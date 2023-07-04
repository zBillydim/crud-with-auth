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
    .teste{
        margin-right: 50px;
    }
    .card{
        width: 659px;
        height: 737px;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container teste">
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-footer">
                        <div class="text-end">
                            <button class="btn btn-link" onclick="toggleForm('veiculos')">Veículos</button>
                            <button id="register" class="btn btn-link" onclick="toggleForm('registerForm')">Editar perfil</button>
                        </div>
                    </div>
                    <div class="card-body mt-5">
                        <div id="veiculos">
                            Veículos
                            <button type="submit" class="btn btn-primary">Adicionar carro</button>
                        </div>
                        <form class="mt-4" id="registerForm" action="" method="POST" style="display: none; padding: 30px">
                            <h1 class="mb-3">Editar perfil</h1>
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="name" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="emailUpdate" name="emailUpdate" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Confirmar email</label>
                                <input type="email" class="form-control" id="ConfirmEmailUpdate" name="ConfirmEmailUpdate"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordUpdate" name="passwordUpdate"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="passwordUpdate" class="form-label">Repeat Password</label>
                                <input type="password" class="form-control" id="RepeatPasswordUpdate"
                                    name="repeatPassword" oninput="validatePassword()" required>
                                <div id="passwordError" class="invalid-feedback">As senhas não coincidem</div>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Alterar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="bg-dark text-white text-center py-2 fixed-bottom">
        <div class="container text-center">
            <div class="col">
                Desenvolvido por <a style="text-decoration: none;" href="https://github.com/zbillydim" target="_blank">Gabriel C.</a>
                <br>
                <a style="text-decoration: none;" href="https://github.com/zbillydim"><i class="fab fa-github github-icon">  Github</i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleForm(formId) {
            document.getElementById('veiculos').style.display = 'none';
            document.getElementById('registerForm').style.display = 'none';
            document.getElementById(formId).style.display = 'block';
        }
    </script>
</body>

</html>