<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quadra;

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
       $quadras = Quadra::All();
       return view('quadras.index', ['quadras'=>$quadras]);
    }

    public function create(){
        return view ('quadras.create');
    }

    public function store(Request $request){
        $nova_quadra = $request->all();
        $nova_quadra['ativo'] = (!isset($nova_quadra['ativo']))? false : true;
        Quadra::create($nova_quadra);        

        return redirect('quadras');
    }
}
