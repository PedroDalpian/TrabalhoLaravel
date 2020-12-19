@extends('adminlte::page')

@section('content')
    <h3>Nova Reserva</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'reservas.store']) !!}

<div class="container">
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('responsavel', 'Responsavel:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('responsavel', null, ['class'=>'form-control', 'required']) !!}</div>        
        <div class="col-1 m-1">{!! Form::label('datareserva', 'Data Reserva:') !!}</div>
        <div class="col-4 m-1">{!! Form::date('datareserva', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-3 m-1">{!! Form::select('time_id', 
                                        \App\Time::orderBy('nome')->pluck('nome', 'id')->toArray(),
                                        null, ['class'=>'form-control', 'required']) !!}
        </div>
        <div class="col-1 m-1">{!! Form::label('quadra_id', 'Quadra:') !!}</div>
        <div class="col-3 m-1">{!! Form::select('quadra_id', 
                                        \App\Quadra::orderBy('nome')->pluck('nome', 'id')->toArray(),
                                        null, ['class'=>'form-control', 'required']) !!}
        </div>
    </div>

    <br/>
    <h5>Horários para Reservas</h5>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainicioreserva', 'Hora Início:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainicioreserva', null, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimreserva', ' Hora Fim:') !!}
        <div class="col-1 m-1">{!! Form::text('horafimreserva', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>

    <br/>

    <div class="row justify-content-center">
        <div class="m-1">{!! Form::submit('Gravar Reserva', ['class'=>'btn btn-success']) !!}</div>
        <div class="m-1">{!! Form::reset('Limpar Campos', ['class'=>'btn btn-danger']) !!}</div>
    </div>
</div>
    {!! Form::close() !!}
@stop