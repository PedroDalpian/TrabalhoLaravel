@extends('layouts.default')
@section('content')

<div>
    <h1 class="float-left">Reservas</h1>    
    <a class="btn-sm btn-primary float-right" href="../reservas/create">Nova Reserva</a>
    <a class="btn-sm btn-primary mr-2 float-right" href="../pdf">Imprimir Reservas</a>
</div>
<table class="table table-stripe table-bordered table-hover">
    <thead>
        <th>Responsavel</th>
        <th>Data</th>     
        <th>Hora Início</th>
        <th>Hora Fim</th>
        <th>Time</th>
        <th>Quadra</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ações</th>
    </thead>

    <tbody>
        @foreach($reservas as $reserva)
            <tr>
                <td>{{ $reserva->responsavel }}</td>
                <td>{{ Carbon\Carbon::parse($reserva->datareserva)->format('d/m/Y') }}</td>
                <td>{{ $reserva->horainicioreserva }}</td>
                <td>{{ $reserva->horafimreserva }}</td>
                <td>{{ $reserva->time->nome }}</td>
                <td>{{ $reserva->quadra->nome }}</td>
                <td>{{ $reserva->quadra->cidade }}</td>
                <td>{{ $reserva->quadra->UF }}</td>
                <td>
                    <a href="{{ route('reservas.edit', ['id'=>$reserva->id]) }}" class="btn-sm btn-warning">Editar</a>
                    <a href="#" onclick="return ConfirmaExclusao({{$reserva->id}})" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $reservas->links() }}

@stop

@section('table-delete')
"reservas"
@endsection
