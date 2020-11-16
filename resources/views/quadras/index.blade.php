@extends('layouts.default')
@section('content')

<div>
    <h1 class="float-left">Quadras</h1>
    <a class="btn-sm btn-primary mr-5 float-right" href="../quadras/create">Nova Quadra</a>
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
        <th>Ações</th>
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
                <td>
                    <a href="{{ route('quadras.edit', ['id'=>$quadra->id]) }}" class="btn-sm btn-warning">Editar</a>
                    <a href="#" onclick="return ConfirmaExclusao({{$quadra->id}})" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $quadras->links() }}

@stop

@section('table-delete')
"quadras"
@endsection
