@extends('adminlte::page')

@section('content')
    <h3>Nova Quadra</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'quadras.store']) !!}

<div class="container">
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('ativo', 'Ativo:') !!}</div>
        <div class="col-4 m-1">{!! Form::checkbox('ativo', null, ['cheked'=>'true']) !!} (Marcado mostra a quadra para os usuários)</div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('nome', 'Nome:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('modalidade_id', 'Modalidade:') !!}</div>
        <div class="col-3 m-1">{!! Form::select('modalidade_id', 
                                        \App\Modalidade::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
                                        null, ['class'=>'form-control', 'required']) !!}
        </div>
        
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('endereco', 'Endereço:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('endereco', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('numero', 'Número:') !!}</div>
        <div class="col-2 m-1">{!! Form::text('numero', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('bairro', 'Bairro:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('bairro', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('CEP', 'CEP:') !!}</div>
        <div class="col-2 m-1">{!! Form::text('CEP', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('cidade', 'Cidade:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('cidade', null, ['class'=>'form-control', 'required']) !!}</div>
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
                                            'RS', ['class'=>'form-control', 'required']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-1 m-1">{!! Form::label('telefone', 'Telefone:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('telefone', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1">{!! Form::label('email', 'E-mail:') !!}</div>
        <div class="col-4 m-1">{!! Form::text('email', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>

    <br/>
    <h5>Horários para Reservas</h5>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainiciosegunda', 'Segunda-Feira:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainiciosegunda', null, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimsegunda', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimsegunda', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorsegunda', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorsegunda', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainicioterca', 'Terça-Feira:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainicioterca', null, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimterca', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimterca', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorterca', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorterca', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainicioquarta', 'Quarta-Feira:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainicioquarta', null, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimquarta', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimquarta', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorquarta', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorquarta', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainicioquinta', 'Quinta-Feira:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainicioquinta', null, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimquinta', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimquinta', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorquinta', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorquinta', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainiciosexta', 'Sexta-Feira:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainiciosexta', null, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimsexta', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimsexta', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorsexta', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorsexta', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainiciosabado', 'Sábado:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainiciosabado', null, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimsabado', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimsabado', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valorsabadoegunda', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valorsabado', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>
    <div class="row">        
        <div class="col-2 m-1">{!! Form::label('horainiciodomingo', 'Domingo:') !!}</div>
        <div class="col-1 m-1">{!! Form::text('horainiciodomingo', null, ['class'=>'form-control', 'required']) !!}</div>
        {!! Form::label('horafimdomingo', ' x ') !!}
        <div class="col-1 m-1">{!! Form::text('horafimdomingo', null, ['class'=>'form-control', 'required']) !!}</div>
        <div class="col-1 m-1"></div>{!! Form::label('valordomingo', 'Valor hora:') !!}
        <div class="col-1 m-1">{!! Form::text('valordomingo', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>

    <br/>
    <h5>Detalhes da Quadra</h5>
    <div class="row">
        <div class="col-2 m-1">{!! Form::label('observacao', 'Observação:') !!}</div>
        <div class="col-8 m-1 ">{!! Form::textarea('observacao', null, ['class'=>'form-control','rows'=>'3','required']) !!}</div>
    </div>
    <div class="row">
        <div class="col-2 m-1">{!! Form::label('redesocial', 'Rede Social:') !!}</div>
        <div class="col-8 m-1">{!! Form::text('redesocial', null, ['class'=>'form-control', 'required']) !!}</div>
    </div>

    <div class="row justify-content-center">
        <div class="m-1">{!! Form::submit('Gravar Quadra', ['class'=>'btn btn-success']) !!}</div>
        <div class="m-1">{!! Form::reset('Limpar Campos', ['class'=>'btn btn-danger']) !!}</div>
    </div>
</div>
    {!! Form::close() !!}
@stop