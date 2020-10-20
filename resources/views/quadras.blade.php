@extends('adminlte::page')

@section('content')
        
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Numero</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Rede Social</th>
        </thead>

        <tbody>
            @foreach($quadras as $quadra)
                <tr>
                    <td>{{ $quadra->nome }}</td>
                    <td>{{ $quadra->telefone }}</td>
                    <td>{{ $quadra->endereco }}</td>
                    <td>{{ $quadra->bairro }}</td>
                    <td>{{ $quadra->numero }}</td>
                    <td>{{ $quadra->cidade }}</td>
                    <td>{{ $quadra->UF }}</td>
                    <td>{{ $quadra->redesocial }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@stop
