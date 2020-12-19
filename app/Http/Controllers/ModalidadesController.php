<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modalidade;
use App\Http\Requests\ModalidadeRequest;

class ModalidadesController extends Controller
{
    public function index(){
        $modalidades = Modalidade::orderBy('descricao')->paginate(8);
        return view('modalidades.index', ['modalidades'=>$modalidades]);
     }
 
     public function create(){
         return view ('modalidades.create');
     }
 
     public function store(ModalidadeRequest $request){
         $nova_modalidade = $request->all();
         Modalidade::create($nova_modalidade);        
 
         //return redirect('quadras');
         return redirect()->route('modalidades');
     }
 
     public function destroy($id){
        try{
            Modalidade:: find($id)->delete();
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
         $modalidade = Modalidade::find($id);
         return view('modalidades.edit', compact('modalidade'));
     }
 
     public function update(ModalidadeRequest $request, $id){
         Modalidade::find($id)->update($request->all());
         //return redirect('quadras');
         return redirect()->route('modalidades');
     }
 
 }
