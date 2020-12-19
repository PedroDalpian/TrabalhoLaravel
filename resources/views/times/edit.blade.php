@extends('adminlte::page')

@section('content')
    <h3>Editando Time: {{ $time->nome }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>["times.update", 'id'=>$time->id], 'method'=>'put']) !!}

    <div class="container text">
    <div class="row">
        <div class="col-2 m-1">{!! Form::label('nome', 'Nome Time:') !!}</div>
        <div class="col-3 m-1">{!! Form::text('nome', $time->nome, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-2 m-1">{!! Form::label('modalidade', 'Modalidade:') !!}</div>
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
        <div class="col-2 m-1">{!! Form::label('responsavel', 'Responsável:') !!}</div>
        <div class="col-3 m-1">{!! Form::text('responsavel', $time->responsavel, ['class'=>'form-control', 'required']) !!}</div>
    </div>    
    </br>
    <div class="border">
    </br>
    <div class="row justify-content-center">
        <div class="col-4"></div>
        <div class="col-2">{!! Form::label('jogador1', 'Jogador 1') !!}</div>
        <div class="col-3"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-3"></div>
        <div class="col-3 m-1">{!! Form::text('jogador1', $time->jogador1, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-3"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2">{!! Form::label('jogador2', 'Jogador 2') !!}</div>
        <div class="col-5"></div>
        <div class="col-2">{!! Form::label('jogador3', 'Jogador 3') !!}</div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3 m-1">{!! Form::text('jogador2', $time->jogador2, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-4"></div>
        <div class="col-3 m-1">{!! Form::text('jogador3', $time->jogador3, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2">{!! Form::label('jogador4', 'Jogador 4') !!}</div>
        <div class="col-5"></div>
        <div class="col-2">{!! Form::label('jogador5', 'Jogador 5') !!}</div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3 m-1">{!! Form::text('jogador4', $time->jogador4, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-4"></div>
        <div class="col-3 m-1">{!! Form::text('jogador5', $time->jogador5, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1"></div>
    </div>
    </br>
    <ul class="border">
    </ul>
    </br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2">{!! Form::label('jogador6', 'Jogador 6') !!}</div>
        <div class="col-5"></div>
        <div class="col-2">{!! Form::label('jogador7', 'Jogador 7') !!}</div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3 m-1">{!! Form::text('jogador6', $time->jogador6, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-4"></div>
        <div class="col-3 m-1">{!! Form::text('jogador7', $time->jogador7, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2">{!! Form::label('jogador8', 'Jogador 8') !!}</div>
        <div class="col-5"></div>
        <div class="col-2">{!! Form::label('jogador9', 'Jogador 9') !!}</div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3 m-1">{!! Form::text('jogador8', $time->jogador8, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-4"></div>
        <div class="col-3 m-1">{!! Form::text('jogador9', $time->jogador9, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4"></div>
        <div class="col-2">{!! Form::label('jogador10', 'Jogador 10') !!}</div>
        <div class="col-3"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-3"></div>
        <div class="col-3 m-1">{!! Form::text('jogador10', $time->jogador10, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-3"></div>
    </div>
    </br>
    </div>
    </br>
    <div class="row justify-content-center">
        <div class="m-1">{!! Form::submit('Gravar Time', ['class'=>'btn btn-success']) !!}</div>
        <div class="m-1">{!! Form::reset('Limpar Campos', ['class'=>'btn btn-danger']) !!}</div>
    </div>
    
</div>
    {!! Form::close() !!}
@stop