<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <h2>Relatório de Reservas</h2>
    @foreach ($reserva as $reservas)
        Reponsável: {{ $reservas->responsavel }}<br>
        Data: {{ Carbon\Carbon::parse($reservas->datareserva)->format('d/m/Y') }}<br>
        Hora Início: {{ $reservas->horainicioreserva }}<br>
        Hora Fim: {{ $reservas->horafimreserva }}<br>
        Time: {{ $reservas->time->nome }}<br>
        Quadra: {{ $reservas->quadra->nome }}<br>
        Cidade: {{ $reservas->quadra->cidade }}<br>
        Estado: {{ $reservas->quadra->UF }}<br><br>
    @endforeach
</body>
</html>