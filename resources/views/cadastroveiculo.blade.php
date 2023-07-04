<!DOCTYPE html>
<html>
<head>
    <title>Criação de Veículos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <style>
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark top">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Veiculo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/perfil">Perfil <i class="fa fa-user"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark">Sair</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    @if(Session::has('register_success'))
    <div id="alerta" class="alert alert-success mt-3 mx-auto" style="max-width: 300px;" role="alert">
        {{ Session::get('register_success') }}
        <button type="button" class="close" onclick="fecha(event)" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <br>
    <div class="container">
        <h1 class="mb-3">Cadastro de Veículos</h1>
            <form method="POST" action="/cadastro-veiculo">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="marca">Marca *</label>
                                    <input type="text" class="form-control" id="marca" name="marca" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modelo">Modelo *</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="km_rodados">Km Rodados * </label>
                                    <input type="text" class="form-control" id="km_rodados" name="km_rodados" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="combustivel">Tipo de Combustível *</label>
                                    <select class="form-control" id="combustivel" name="combustivel" required>
                                        <option value="gasolina">Gasolina</option>
                                        <option value="etanol">Etanol</option>
                                        <option value="diesel">Diesel</option>
                                        <option value="flex">Flex</option>
                                        <option value="eletrico">Elétrico</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="placa">Placa *</label>
                                    <input type="text" class="form-control" id="placa" name="placa" maxlength="7" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cpf">CPF *</label>
                                    <input type="text" class="form-control" id="cpf" placeholder="___.___.___-__" name="cpf" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="numero">Número *</label>
                                    <input type="text" class="form-control" id="numero" placeholder="(__) _____-____"name="numero" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cep">CEP *</label>
                                    <input type="text" class="form-control" id="cep" placeholder="_____-___" name="cep" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Bairro">Bairro *</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Rua">Rua *</label>
                                    <input type="text" class="form-control" id="rua" name="rua" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="numero_casa">Nº *</label>
                                    <input type="text" class="form-control" id="numero_casa" name="numero_casa" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="complemento">Complemento *</label>
                                    <input type="text" class="form-control" id="complemento" name="complemento" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    <br>
    <footer id="footer" class="bg-dark text-white text-center py-2">
        <div class="container text-center">
          <div class="col">
            Desenvolvido por <a style="text-decoration: none;" href="https://github.com/zbillydim" target="_blank">Gabriel C.</a>
            <br>
            <a style="text-decoration: none;" href="https://github.com/zbillydim"><i class="fab fa-github github-icon">  Github</i></a>
          </div>
        </div>
      </footer>
    <script>
        $(document).ready(function() {
            $('#cpf').inputmask('999.999.999-99');
            $('#numero').inputmask('(99) 99999-9999');
            $('#cep').inputmask('99999-999');
            $('#km_rodados').on('input', function() {
                $(this).val($(this).val().replace(/\D/g, ''));
            });

            var footer = $('#footer');       
            var windowWidth = $(window).height();
                
            if(windowWidth <= 768){
                footer.addClass('bottom');
            }else{
                footer.addClass('fixed-bottom');
            }
        });
    </script>
</body>
</html>