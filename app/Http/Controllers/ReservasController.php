<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;

class ReservasController extends Controller
{
    public function index(){
        $reservas = Reserva::All();
        return view('reservas.index', ['reservas'=>$reservas]);
     }
 
     public function create(){
         return view ('reservas.create');
     }
 
     public function store(Request $request){
         $nova_reserva = $request->all();
         Reserva::create($nova_reserva);        
 
         return redirect('reservas');
     }
}
