@extends('adminlte::page')

@section('content')
<h1>Times</h1>
<div class="d-flex justify-content-center">
    <a class="btn btn-primary mr-2 mb-2" href="../times/create">Novo Time</a>
</div>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome do Time</th>
            <th>Modalidade</th>
        </thead>

        <tbody>
            @foreach($times as $time)
                <tr>
                    <td>{{ $times->nome }}</td>
                    <td>{{ $times->modalidade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@stop

