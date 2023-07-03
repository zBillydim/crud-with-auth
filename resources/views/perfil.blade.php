<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>perfil</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
</head>
<style>

    /* perfil */

.container{
    display: grid;
    border: 1px solid rgba(0,0,0,.125);
    padding: 15px;
    margin: 117px 20%; 
}
.cima{
    display: flex;
    align-items: start;
    justify-content: end;
}
.botao {
  background-color: #ffffff;
  border: none;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

/* Veiculos */

.veiculos{
    display: grid;
    border: 1px solid rgba(0,0,0,.125);
    padding: 15px;
    margin: 117px 20%; 
}
}

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
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

    <div class="container">
        <div class="cima">
            <button class="botao" onclick="trocaform('dados')">Editar Perfil</button>
            <button class="botao" onclick="trocaform('veiculos')">Veiculos</button>
        </div>
        <div class="veiculos" id="veiculos">
            <h1>Veiculos</h1>
            <button type="submit" class="btn btn-primary">Adicionar Carro</button>
        </div>
        <form style="display: none" id="dados" class="dados" action="" method="POST">
            @csrf
            <h1>Editar Perfil</h1>
            <div class="mb-3">
                <label for="email" >Nome</label> <br>
                <input class="form-control" type="email"  id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="email" >Email</label> <br>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="email" >Confirmar email</label> <br>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" >Senha</label> <br>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="password" >Confirmar senha</label> <br>
                <input class="form-control" type="password" id="password" name="password" required>
            </div class="mb-3">
            <button type="submit" class="btn btn-primary">Alterar dados</button>
        </form>
    </div>
    <footer id="footer" class="bg-dark text-white text-center py-2 fixed-bottom">
        <div class=" text-center">
          <div class="col">
            Desenvolvido por <a style="text-decoration: none;" href="https://github.com/zbillydim" target="_blank">Gabriel C.</a>
            <br>
            <a style="text-decoration: none;" href="https://github.com/zbillydim"><i class="fab fa-github github-icon">  Github</i></a>
          </div>
        </div>
      </footer>
</body>
<script>

    function trocaform(id){
        document.getElementById("dados").style.display ="none";
        document.getElementById("veiculos").style.display ="none";
        document.getElementById(id).style.display ="block";
    }
</script>
</html>
