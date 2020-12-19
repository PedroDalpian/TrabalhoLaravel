<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;

class ReservasController extends Controller
{
    public function index(){
        $reservas = Reserva::orderBy('responsavel')->paginate(9);
        return view('reservas.index', ['reservas'=>$reservas]);
     }
 
     public function create(){
         return view ('reservas.create');
     }
 
     public function store(ReservaRequest $request){
         $nova_reserva = $request->all();
         Reserva::create($nova_reserva);        
 
         return redirect()->route('reservas');
     }

     public function destroy($id){
        try{
            Reserva:: find($id)->delete();
            //return redirect('quadras');
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        catch (\PDOException $e) {
            $ret = Array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
        
    }

    public function edit($id) {
        $reserva = Reserva::find($id);
        return view('reservas.edit', compact('reserva'));
    }

    public function update(ReservaRequest $request, $id){
        Reserva::find($id)->update($request->all());
        //return redirect('quadras');
        return redirect()->route('reservas');
    }


}
