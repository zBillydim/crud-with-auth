<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
    .navContainer{
        margin-right: 50px;
    }
    .card{
        width: 659px;
        height: auto;
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
    @if(Session::has('success'))
    <div id="alerta" class="alert alert-success mt-3 mx-auto" style="max-width: 300px;" role="alert">
        {{ Session::get('success') }}
        <a type="button" class="close" onclick="fecha(event)" data-dismiss="alert" style="margin-left: 50px; margin-bottom: 2px; text-decoration: none" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>
    </div>
    @endif
    @if($errors->any())
       
        <a id="error" style="display:none">{{ $errors->first() }}</a>
        <div id="alerta" class="alert alert-danger mt-3 mx-auto" style="max-width: 300px;" role="alert">
            {{ $errors->first() }}
            <button type="button" class="close" onclick="fecha(event)" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div id="perfilModal" class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body ">
                        <a class="nav-link btn btn-primary mb-5" style="background-color: #212529; color: white; border-color:#212529">Editar Perfil<i style="margin-left:10px" class="fa fa-user"> </i> </a>
                        <div class="col-md-4">
                            <ul class="row justify-content-center">
                                <span >Nome: {{ $nome }}</span>
                                <span >Email: {{ $email }}</span>        
                                
                            </ul>
                            <a class="nav-link btn btn-primary mt-5" onclick="toggleForm('formModal')" style="background-color: #212529; color: white; border-color:#212529">Alterar senha</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="formModal" style="display: none" class="container mt-4">
        <div class="row justify-content-center justify-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body ">
                        <a class="nav-link btn btn-primary mb-5"  style="background-color: #212529; color: white">Alterar Senha<i style="margin-left:10px" class="fa fa-user"> </i> </a>
                        <div class="col-md-4  justify-items-center">
                            <form class="justify-content-center"  action="/change-password" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="currentPassword" class="form-label">Senha atual</label>
                                    <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
                                </div>
                                <div class="mb-3">
                                    <label for="newPassword" class="form-label">Nova senha</label>
                                    <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                                </div>
                                <div class="mb-3">
                                    <label for="RepeatNewPassword" class="form-label">Repita a senha</label>
                                    <input type="password" class="form-control" id="RepeatNewPassword" name="RepeatNewPassword" required>
                                    <div id="passwordError" class="invalid-feedback">As senhas não coincidem</div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="background-color: #212529; color: white">Alterar</button>
                            </form>
                            <a class="nav-link btn btn-primary mt-5" onclick="toggleForm('perfilModal')" style="background-color: #212529; color: white">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleForm(formId) {
            document.getElementById('perfilModal').style.display = 'none';
            document.getElementById('formModal').style.display = 'none';
            document.getElementById(formId).style.display = 'block';
        }

        function fecha(event){
            document.getElementById('alerta').style.display = 'none';
        }

    </script>

</body>

</html>