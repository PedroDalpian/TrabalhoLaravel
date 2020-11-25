@extends('adminlte::page')

@section('content')
    <h3>Nova Modalidade</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'modalidades.store']) !!}

<div class="container">
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('descricao', 'Descrição:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('descricao', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>

    <div class="row justify-content-center">
        <div class="m-1">{!! Form::submit('Gravar Modalidade', ['class'=>'btn btn-success']) !!}</div>
        <div class="m-1">{!! Form::reset('Limpar Campos', ['class'=>'btn btn-danger']) !!}</div>
    </div>
</div>
    {!! Form::close() !!}
@stop