<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Veículos</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
    .navContainer{
        margin-right: 50px;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container navContainer">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="/veiculo">Veiculo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="/perfil">Perfil                       <i class="fa fa-user"> </i> </a>
                    </li>
                    <li class="nav-item ms-auto">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-dark">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    @if(Session::has('register_success'))
    <div id="alerta" class="alert alert-success mt-3 mx-auto" style="max-width: 300px;" role="alert">
        {{ Session::get('register_success') }}
        <button type="button" class="close" onclick="fecha(event)" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if(Session::has('failed_register'))
    <div id="alerta" class="alert alert-danger mt-3 mx-auto" style="max-width: 300px;" role="alert">
        {{ Session::get('failed_register') }}
        <button type="button" class="close" onclick="fecha(event)" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <br>
    <div class="container">
        <h1 class="mb-3">Cadastro de Veículos</h1>
            <form method="POST" action="{{ route('create.vehicle') }}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="marca">Marca *</label>
                                    <input type="text" class="form-control" id="marca" name="marca" required >
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="modelo">Modelo *</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="km_rodados">Km Rodados * </label>
                                    <input type="text" class="form-control" id="km_rodados" name="km_rodados" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="combustivel">Tipo de Combustível *</label>
                                    <select class="form-control" id="combustivel" name="combustivel" required >
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
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="placa">Placa *</label>
                                    <input type="text" class="form-control" id="placa" name="placa" maxlength="7" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="cpf">CPF *</label>
                                    <input type="text" class="form-control" id="cpf" placeholder="___.___.___-__" name="cpf" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="numero">Número celular/whatsapp</label>
                                    <input type="text" class="form-control" id="numero" placeholder="(__) _____-____" name="numero" >
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="status">Status *</label>
                                    <select class="form-control" id="status" name="status" required >
                                        <option value="Ativo">Ativo</option>
                                        <option value="Desativado">Desativado</option>
                                    </select>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" style="background-color: #212529; color: white; border-color:#212529" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    <br>
    <footer id="footer"class="bg-dark text-white text-center py-2 fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                        Desenvolvido por <a style="text-decoration: none;"href="https://github.com/zbillydim"  target="_blank">Gabriel C.</a>
                    <br>
                    <a style="text-decoration: none;" href="https://github.com/zbillydim"><i class="fab fa-github github-icon">  Github</i>  </a>
                </div>
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