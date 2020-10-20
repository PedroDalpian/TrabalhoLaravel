@extends('adminlte::page')

@section('content')
    <h3>Novo Time</h3>
    {!! Form::open(['url'=>'times/store']) !!}

<div class="container text">
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('nome', 'Nome Time:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('modalidade', 'Modalidade:') !!}</div>
        <div class="col-3 m-1">{!! Form::select('modalidade', 
                                        array(  'FUTSAL'=>'Quadra FUTSAL',
                                                'SOCIETY'=>'Quadra SOCIETY',
                                                'CAMPO'=>'Quadra CAMPO',                                                
                                                'VOLEI'=>'Quadra VOLÊI',
                                                'TENNIS'=>'Quadra TENNIS',
                                                'FUTVOLEI'=>'Quadra FUTVOLÊI',
                                                'BASQUETE'=>'Quadra BASQUETE',
                                                'HANDEBOL'=>'Quadra HANDEBOL',
                                                'RUBGBY'=>'Quadra RUBGBY',
                                                'BASEBALL'=>'Quadra BASEBALL',
                                                'FUTEBOLAMERICANO'=>'Quadra FUTEBOL AMERICANO',
                                                'MULTIESPORTE'=>'Quadra MULTI ESPORTES'),
                                            'FUTSAL', ['class'=>'form-control', 'required']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('jogador1', 'Jogador 1:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('jogador1', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('jogador2', 'Jogador 2:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('jogador2', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('jogador3', 'Jogador 3:') !!}</div>
        <div class="col-2 m-1">{!! Form::text('jogador3', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('jogador4', 'Jogador 4:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('jogador4', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('jogador5', 'Jogador 5:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('jogador5', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    </br>
    </br>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('jogador6', 'Jogador 6:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('jogador6', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('jogador7', 'Jogador 7:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('jogador7', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('jogador8', 'Jogador 8:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('jogador8', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('jogador9', 'Jogador 9:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('jogador9', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('jogador10', 'Jogador 10:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('jogador10', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    </br>
    <div class="row d-flex justify-content-center">
        <div class="m-1">{!! Form::submit('Gravar Quadra', ['class'=>'btn btn-primary']) !!}</div>
        <div class="m-1">{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}</div>
    </div>
</div>
    {!! Form::close() !!}
@stop