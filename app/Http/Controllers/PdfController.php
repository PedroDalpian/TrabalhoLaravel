<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use PDF;

class PdfController extends Controller
{
    public function geraPdf(){
        
        $reserva = Reserva::all();

        $pdf = PDF::loadView('pdf', compact('reserva'));

        return $pdf->setPaper('a4')->stream('Todas_Reservas.pdf');
    }    


}
