@extends('layouts.default')

@section('content')
<h1>Times</h1>
<div class="d-flex justify-content-center">
    <a class="btn btn-primary mr-2 mb-2" href="../times/create">Novo Time</a>
</div>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome do Time</th>
            <th>Responsável</th>
            <th>Modalidade</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($times as $time)
                <tr>
                    <td>{{ $time->nome }}</td>
                    <td></td>
                    <td>{{ $time->modalidade }}</td>                    
                    <td>
                        <a href="{{ route('times.edit', ['id'=>$time->id]) }}" class="btn-sm btn-warning">Editar</a>
                        <a href="{{ route('times.destroy', ['id'=>$time->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>    
{{ $times->links() }}

@stop

@section('table-delete')
"times"
@endsection

