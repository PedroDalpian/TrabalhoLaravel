<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;

class TimesController extends Controller
{
    public function index(){
        $times = Time::All();
        return view('times.index', ['times'=>$times]);
     }
 
     public function create(){
         return view ('times.create');
     }
 
     public function store(Request $request){
         $novo_time = $request->all();
         Time::create($novo_time);        
 
         return redirect('times');
     }
}
