<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Ah Quadra!</title>
  </head>
  <script>
    function mostraEscondeCampos() {
        var instituicao = document.getElementById("selecionaRegiaoCEP").value;

        if (instituicao === 'mostraCamposCEP') {
            document.getElementById("mostraCamposCEP").style.display = "block";
            document.getElementById("lblMostraCamposCEP").style.display = "block";
        } else {
            document.getElementById("mostraCamposCEP").style.display = "none";
            document.getElementById("lblMostraCamposCEP").style.display = "none";

        }
        if (instituicao === 'mostraCamposRegiao') {
            document.getElementById("mostraCamposRegiao").style.display = "block";
            document.getElementById("lblMostraCamposRegiao").style.display = "block";
        } else {
            document.getElementById("mostraCamposRegiao").style.display = "none";
            document.getElementById("lblMostraCamposRegiao").style.display = "none";
        }
    }
  </script>
<body>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mt-2 mb-2" href="../inicio"><h2>AH Quadra!</h2></a>

            <div class="collapse navbar-collapse mt-2" id="navbarTogglerDemo03">            
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active ml-5 form-inline">
                    <a class="nav-link ml-2 text-light" href="../quadras/create"><h5>Nova Quadra</h5></span></a>
                    <a class="nav-link ml-2 text-light" href="#"><h5>Quem Somos</h5></span></a>
                    <a class="nav-link ml-2 text-light" href="#"><h5>Fale Conosco</h5></span></a>
                </li>
                </ul>
            </div>
            <div class="full-height form-inline mr-5">
                @if (Route::has('login'))
                    @auth
                        <a class="text-light" href="{{ url('../inicio') }}">Home</a>
                    @else
                        <a class="text-light" href="{{ route('login') }}"><h6>Entrar</h6></a>

                        @if (Route::has('register'))
                            <a class="ml-3 text-light" href="{{ route('register') }}"><h6>Novo Cadastro</h6></a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>

        </br>
        <div class="container-fluid mt-3 text-center">
            <h1>Bora Reservar AH Quadra meu 10!!!</h1>
            <h4>TEMOS A QUADRA CERTA PARA VOCÊ</h4>
            </br>
            <div class="form-check form-check-inline">
                <h4><input class="form-check-input" type="radio" name="inlineRadioOptions" id="mostraCamposRegiao" value="mostraCamposRegiao" checked="true" onchange="mostraEscondeCampos()"></h4>
                <h4><label class="form-check-label" for="inlineRadio1">Região</label></h4>
            </div>
            <div class="form-check form-check-inline">
                <h4><input class="form-check-input" type="radio" name="inlineRadioOptions" id="mostraCamposCEP" value="mostraCamposCEP" onchange="mostraEscondeCampos()"></h4>
                <h4><label class="form-check-label" for="inlineRadio2">CEP</label></h4>
            </div>
            <div id="mostraCamposCEP" name="mostraCamposCEP" class="form-inline mt-1" style="display: none;">
                <div class="col-4"> </div> 
                <div class="col-1">CEP</div> 
                <div class="col-2">{!! Form::text('CEP', null, ['class'=>'form-control' , 'required']) !!}</div>
                <div class="col-5"> </div>
            </div>

            <div id="mostraCamposRegiao" name="mostraCamposRegiao" class="form-inline mt-1">
                <div class="col-4"> </div> 
                <div class="col-1">Estado</div> 
                <div class="col-2">{!! Form::select('UF', 
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
                <div class="col-5"></div>
            </div> 
            <div id="mostraCamposRegiao" name="mostraCamposRegiao" class="form-inline mt-1">
                <div class="col-4"> </div> 
                <div class="col-1">Cidade</div> 
                <div class="col-2">{!! Form::text('cidade', null, ['class'=>'form-control', 'required']) !!}</div>
                <div class="col-5"> </div>
            </div> 
            <div class="form-inline mt-1">
                <div class="col-4"> </div> 
                <div class="col-1">Modalidade</div>       
                <div class="col-2">{!! Form::select('modalidade', 
                                            array(  'FUTSAL'=>'Quadra FUTSAL',
                                                    'SOCIETY'=>'Quadra SOCIETY',
                                                    'CAMPO'=>'Quadra CAMPO',                                                
                                                    'VOLEI'=>'Quadra VOLÊI',
                                                    'TENNIS'=>'Quadra TENNIS',
                                                    'FUTVOLEI'=>'Quadra FUTVOLÊI',
                                                    'BASQUETE'=>'Quadra BASQUETE',
                                                    'HANDEBOL'=>'Quadra HANDEBOL',
                                                    'RUBGBY'=>'Quadra RUBGBY',
                                                    'BASEBALL'=>'Quadra BASEBALL',
                                                    'FUTEBOLAMERICANO'=>'Quadra FUTEBOL AMERICANO',
                                                    'MULTIESPORTE'=>'Quadra MULTI ESPORTES'),
                                                'FUTSAL', ['class'=>'form-control', 'required']) !!}
                </div>
                <div class="col-5"> </div>
            </div>
            <div class="form-inline mt-1">
                <div class="col-3"> </div>
                <div class="col-6">
                    <h4><button type="button" class="btn btn-primary pt-2"><h5>Click Pesquisar Quadras de Esportes</h5></button>
                </div>
                <div class="col-3"> </div>
            </div>        
        </div>



</body>
</html>

