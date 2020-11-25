@extends('adminlte::page')

@section('content')
    <h3>Editando Modalidade: {{ $modalidade->descricao }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>["modalidades.update", 'id'=>$modalidade->id], 'method'=>'put']) !!}

<div class="container">
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('descricao', 'descricao:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('descricao', $modalidade->descricao, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row justify-content-center">
        <div class="m-1">{!! Form::submit('Editar Modalidade', ['class'=>'btn btn-success']) !!}</div>
        <div class="m-1">{!! Form::reset('Limpar Campos', ['class'=>'btn btn-danger']) !!}</div>
    </div>
</div>
    {!! Form::close() !!}
@stop