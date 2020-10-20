@extends('adminlte::page')

@section('content')
<h1>Quadras</h1>
<div class="d-flex justify-content-center">
    <a class="btn btn-primary mr-2 mb-2" href="../quadras/create">Nova Quadra</a>
</div>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Modalidade</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Numero</th>
            <th>Cidade</th>
            <th>Estado</th>
        </thead>

        <tbody>
            @foreach($quadras as $quadra)
                <tr>
                    <td>{{ $quadra->nome }}</td>
                    <td>{{ $quadra->modalidade }}</td>
                    <td>{{ $quadra->telefone }}</td>
                    <td>{{ $quadra->endereco }}</td>
                    <td>{{ $quadra->bairro }}</td>
                    <td>{{ $quadra->numero }}</td>
                    <td>{{ $quadra->cidade }}</td>
                    <td>{{ $quadra->UF }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@stop

