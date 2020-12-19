<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;
use App\Http\Requests\TimeRequest;

class TimesController extends Controller
{
    public function index(){
        $times = Time::orderBy('nome')->paginate(9);
        return view('times.index', ['times'=>$times]);
     }
 
     public function create(){
         return view ('times.create');
     }
 
     public function store(TimeRequest $request){
        $novo_time = $request->all();
        if ($novo_time['jogador11'] = '') {
            $novo_time['jogador11'] = '';
            $novo_time['jogador12'] = '';
            $novo_time['jogador13'] = '';
            $novo_time['jogador14'] = '';
            $novo_time['jogador15'] = '';
            $novo_time['idreserva'] = 1;
            $novo_time['idusuario'] = 1;
        }
        
        Time::create($novo_time);        

        //return redirect('quadras');
        return redirect()->route('times');
    }

    public function destroy($id){
        try{
            Time:: find($id)->delete();
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
        $time = Time::find($id);
        return view('times.edit', compact('time'));
    }

    public function update(TimeRequest $request, $id){
        Time::find($id)->update($request->all());
        //return redirect('quadras');
        return redirect()->route('times');
    }

}
