<!DOCTYPE html>
<html>
<head>
    <title>Criação de Veículos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <br>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
                    <a class="nav-link" href="/perfil">Perfil <i class="fa fa-user"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Cadastro de Veículos</h1>
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
                                    <label for="km_rodados">Km Rodados *</label>
                                    <input type="number" class="form-control" id="km_rodados" name="km_rodados" required>
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
                                    <input type="text" class="form-control" id="placa" name="placa" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cpf">CPF *</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="numero">Número *</label>
                                    <input type="text" class="form-control" id="numero" name="numero" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="endereco">Endereço *</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" required>
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
    <script>
        $(document).ready(function() {
            $('#cpf').inputmask('999.999.999-99');
            $('#numero').inputmask('(99) 99999-9999');
        });
    </script>
</body>
</html>