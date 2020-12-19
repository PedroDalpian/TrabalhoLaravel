@extends('adminlte::page')

@section('content')
    <h3>Editando Reserva: {{ $reserva->responsavel }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>["reservas.update", 'id'=>$reserva->id], 'method'=>'put']) !!}

<div class="container">
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('responsavel', 'Responsavel:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('responsavel', $reserva->responsavel, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('datareserva', 'Data Reserva:') !!}</div>
        <div class="col-4 m-1">{!! Form::date('datareserva', $reserva->datareserva, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">
    <div class="col-1 m-1">{!! Form::label('time', 'Time:') !!}</div>
        <div class="col-3 m-1">{!! Form::select('time_id', 
                                        \App\Time::orderBy('nome')->pluck('nome', 'id')->toArray(),
                                        $reserva->time_id, ['class'=>'form-control', 'required']) !!}
        </div>
        <div class="col-1 m-1">{!! Form::label('quadra', 'Quadra:') !!}</div>
        <div class="col-3 m-1">{!! Form::select('quadra_id', 
                                        \App\Quadra::orderBy('nome')->pluck('nome', 'id')->toArray(),
                                        $reserva->quadra_id, ['class'=>'form-control', 'required']) !!}
        </div>
    </div>

    <br/>
    <h5>Horário da Reserva</h5>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainicioreserva', 'Hora início:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainicioreserva', $reserva->horainicioreserva, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimsegunda', ' Hora Fim:') !!}
        <div class="col-1 m-1">{!! Form::text('horafimreserva', $reserva->horafimreserva, ['class'=>'form-control', 'required']) !!}</div>
    </div>

    <br/>

    <div class="row justify-content-center">
        <div class="m-1">{!! Form::submit('Editar Quadra', ['class'=>'btn btn-success']) !!}</div>
        <div class="m-1">{!! Form::reset('Limpar Campos', ['class'=>'btn btn-danger']) !!}</div>
    </div>
</div>
    {!! Form::close() !!}
@stop