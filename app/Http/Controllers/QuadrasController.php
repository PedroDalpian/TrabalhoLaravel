<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quadra;
use App\Http\Requests\QuadraRequest;

class QuadrasController extends Controller
{
    /*
    public function index(){
        return "TESTE DE CONTROLADOR QUADRA!!!";
    }
    */
    /*
    public function index(){
        $nome = "ARENHA DA MONTANHA";
        return view('quadras', ['nome'=>$nome]);
    }
    */
    /*
    public function index(){
        $quadras = Quadra::All();
        return view('quadras', ['quadras'=>$quadras]);
    }
    */
   
    public function index(){
       $quadras = Quadra::orderBy('nome')->paginate(9);
       return view('quadras.index', ['quadras'=>$quadras]);
    }

    public function create(){
        return view ('quadras.create');
    }

    public function store(QuadraRequest $request){
        $nova_quadra = $request->all();
        $nova_quadra['ativo'] = (!isset($nova_quadra['ativo']))? false : true;
        Quadra::create($nova_quadra);        

        //return redirect('quadras');
        return redirect()->route('quadras');
    }

    public function destroy($id){
        try{
            Quadra:: find($id)->delete();
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
        $quadra = Quadra::find($id);
        return view('quadras.edit', compact('quadra'));
    }

    public function update(QuadraRequest $request, $id){
        Quadra::find($id)->update($request->all());
        //return redirect('quadras');
        return redirect()->route('quadras');
    }

}
