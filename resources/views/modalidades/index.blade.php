@extends('layouts.default')
@section('content')

<div>
    <h1 class="float-left">Modalidades</h1>
    <a class="btn-sm btn-primary mr-5 float-right" href="../modalidades/create">Nova Modalidade</a>
</div>
<table class="table table-stripe table-bordered table-hover">
    <thead>
        <th>Descrição</th>
        <th>Ações</th>
    </thead>

    <tbody>
        @foreach($modalidades as $modalidade)
            <tr>
                <td>{{ $modalidade->descricao }}</td>
                <td>
                    <a href="{{ route('modalidades.edit', ['id'=>$modalidade->id]) }}" class="btn-sm btn-warning">Editar</a>
                    <a href="#" onclick="return ConfirmaExclusao({{$modalidade->id}})" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $modalidades->links() }}

@stop

@section('table-delete')
"modalidades"
@endsection
