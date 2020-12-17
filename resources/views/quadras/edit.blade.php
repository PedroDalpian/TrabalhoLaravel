@extends('adminlte::page')

@section('content')
    <h3>Editando Quadra: {{ $quadra->nome }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>["quadras.update", 'id'=>$quadra->id], 'method'=>'put']) !!}

<div class="container">
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('ativo', 'Ativo:') !!}</div>
        <div class="col-4 m-1">{!! Form::checkbox('ativo', $quadra->ativo, ['cheked'=>'true']) !!} (Marcado mostra a quadra para os usuários)</div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('nome', 'Nome:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('nome', $quadra->nome, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('modalidade', 'Modalidade:') !!}</div>
        <div class="col-3 m-1">{!! Form::select('modalidade_id', 
                                        \App\Modalidade::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                                        $quadra->modalidade_id, ['class'=>'form-control', 'required']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('endereco', 'Endereço:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('endereco', $quadra->endereco, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('numero', 'Número:') !!}</div>
        <div class="col-2 m-1">{!! Form::text('numero', $quadra->numero, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('bairro', 'Bairro:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('bairro', $quadra->bairro, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('CEP', 'CEP:') !!}</div>
        <div class="col-2 m-1">{!! Form::text('CEP', $quadra->CEP, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('cidade', 'Cidade:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('cidade', $quadra->cidade, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('UF', 'Estado:') !!}</div>
        <div class="col-3 m-1">{!! Form::select('UF', 
                                        array(  'RS'=>'Rio Grande do Sul',
                                                'AC'=>'Acre',
                                                'AL'=>'Alagoas',
                                                'AP'=>'Amapá',
                                                'AM'=>'Amazonas',
                                                'BA'=>'Bahia',
                                                'CE'=>'Ceará',
                                                'DF'=>'Distrito Federal',
                                                'ES'=>'Espírito Santo',
                                                'GO'=>'Goiás',
                                                'MA'=>'Maranhão',
                                                'MT'=>'Mato Grosso',
                                                'MS'=>'Mato Grosso do Sul',
                                                'MG'=>'Minas Gerais',
                                                'PA'=>'Pará',
                                                'PB'=>'Paraíba',
                                                'PR'=>'Paraná',
                                                'PE'=>'Pernambuco',
                                                'PI'=>'Piauí',
                                                'RJ'=>'Rio de Janeiro',
                                                'RN'=>'Rio Grande do Norte',
                                                'RS'=>'Rio Grande do Sul',
                                                'RO'=>'Rondônia',
                                                'RR'=>'Roraima',
                                                'SC'=>'Santa Catarina',
                                                'SP'=>'São Paulo',
                                                'SE'=>'Sergipe',
                                                'TO'=>'Tocantins'),
                                                $quadra->UF, ['class'=>'form-control', 'required']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('telefone', 'Telefone:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('telefone', $quadra->telefone, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('email', 'E-mail:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('email', $quadra->email, ['class'=>'form-control', 'required']) !!}</div>
    </div>

    <br/>
    <h5>Horários para Reservas</h5>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainiciosegunda', 'Segunda-Feira:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainiciosegunda', $quadra->horainiciosegunda, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimsegunda', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimsegunda', $quadra->horafimsegunda, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorsegunda', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorsegunda', $quadra->valorsegunda, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainicioterca', 'Terça-Feira:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainicioterca', $quadra->horainicioterca, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimterca', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimterca', $quadra->horafimterca, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorterca', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorterca', $quadra->valorterca, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainicioquarta', 'Quarta-Feira:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainicioquarta', $quadra->horainicioquarta, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimquarta', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimquarta', $quadra->horafimquarta, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorquarta', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorquarta', $quadra->valorquarta, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainicioquinta', 'Quinta-Feira:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainicioquinta', $quadra->horainicioquinta, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimquinta', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimquinta', $quadra->horafimquinta, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorquinta', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorquinta', $quadra->valorquinta, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainiciosexta', 'Sexta-Feira:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainiciosexta', $quadra->horainiciosexta, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimsexta', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimsexta', $quadra->horafimsexta, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorsexta', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorsexta', $quadra->valorsexta, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainiciosabado', 'Sábado:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainiciosabado', $quadra->horainiciosabado, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimsabado', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimsabado', $quadra->horafimsabado, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorsabado', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorsabado', $quadra->valorsabado, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainiciodomingo', 'Domingo:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainiciodomingo', $quadra->horainiciodomingo, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimdomingo', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimdomingo', $quadra->horafimdomingo, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valordomingo', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valordomingo', $quadra->valordomingo, ['class'=>'form-control', 'required']) !!}</div>
    </div>

    <br/>
    <h5>Detalhes da Quadra</h5>
    <div class="row">
        <div class="col-2 m-1">{!! Form::label('observacao', 'Observação:') !!}</div>
        <div class="col-8 m-1 ">{!! Form::textarea('observacao', $quadra->observacao, ['class'=>'form-control','rows'=>'3','required']) !!}</div>
    </div>
    <div class="row">
        <div class="col-2 m-1">{!! Form::label('redesocial', 'Rede Social:') !!}</div>
        <div class="col-8 m-1">{!! Form::text('redesocial', $quadra->redesocial, ['class'=>'form-control', 'required']) !!}</div>
    </div>

    <div class="row justify-content-center">
        <div class="m-1">{!! Form::submit('Editar Quadra', ['class'=>'btn btn-success']) !!}</div>
        <div class="m-1">{!! Form::reset('Limpar Campos', ['class'=>'btn btn-danger']) !!}</div>
    </div>
</div>
    {!! Form::close() !!}
@stop