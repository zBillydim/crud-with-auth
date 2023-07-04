<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo!</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcome/style.css') }}">
</head>
<body>
  @if(Auth::check())
    <script>window.location = "{{ route('cadastroveiculo') }}";</script>
  @endif
    {{--Barra de navegação--}}
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container-md">
          <a class="navbar-brand text-start" href="#">Simple CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
      </div>
  </nav>

  @if($errors->any())
      <script>         
          window.onload = function() {
              var teste = $('#error').text();
              if (teste === 'Email já utilizado, por favor utilize outro.') {
                  $('#register').click();
              }
          };
      </script>
      <a id="error" style="display:none">{{ $errors->first() }}</a>
      <div id="alerta" class="alert alert-danger mt-3 mx-auto" style="max-width: 300px;" role="alert">
          {{ $errors->first() }}
          <button type="button" class="close" onclick="fecha(event)" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
  @endif

{{--Caixa de login--}}

      <section>
        <div class="papai">
        <div class="img">
          <img class="crud mt-2" src="{{ asset('src/pics/crud.jpeg') }}" id="crud" alt="Imagem do CRUD" style="width: 100%; height: auto;">
        </div>
        <span class=subtitle>
          A simple CRUD System, developed by: <a style="text-decoration:none;"class="text-error" href="https://github.com/zbillydim" target="_blank">Gabriel C.</a>
      </span>
      </div>
      <div class="login-box">
          <form method="POST" action="{{ route('login.submit') }}" id="loginForm">
            <h2>Login</h2>
            @csrf
            <div class="input-box">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
              <input id="email" name="email" type="email" required>
              <label for="email" >Email</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
              <input type="password" name="password" id="password" required>
              <label for="password">Senha</label>
            </div>
            <div class="remenber-forgot">
              <label><input type="checkbox">Manter login</label>
              <a href="#">Esqueceu a senha?</a>
            </div>
            <button class="mb-3" type="submit" class="wrapper">Login</button>           
            <button class="mb-3" onclick="toggleForm('registerForm')" class="wrapper">Registrar-se</button>           
          </form>

          <form  method="POST" action="{{ route('register.submit') }}" id="registerForm" style="display: none"> 
            <h2>Registrar</h2>
            @csrf
            <div class="input-box">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
              <input name="name" id="name" type="text" required>
              <label for="name">Nome</label>
            </div>  
            <div class="input-box">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
              <input type="email" id="registerEmail" name="email" required>
              <label for="email">Email</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
              <input name="password" id="registerPassword" type="password" required>
              <label for="password">Senha</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
              <input type="password" name="repeatPassword" oninput="validatePassword()" required>
              <label for="repeatPassword">Confirmar senha</label>
            </div>
            <button class="mb-3" type="submit" class="wrapper">Registrar-se</button>           
            <span style="color: white;">Já tem conta? <a href="#" onclick="toggleForm('loginForm')">Login</a></span>       
          </form> 
      </section>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        {{--Foot--}}

        <footer id="footer" class="bg-dark text-white text-center py-2 fixed-bottom">
          <div class="container text-center">
            <div class="col">
              Desenvolvido por <a style="text-decoration: none;" href="https://github.com/zbillydim" target="_blank">Gabriel C., Enzo P.</a>
              <br>
              <a style="text-decoration: none;" href="https://github.com/zbillydim"><i class="fab fa-github github-icon">  Github</i></a>
            </div>
          </div>
        </footer>

        {{--Java--}}

        <script>
          function fecha(event){
              document.getElementById('alerta').style.display = 'none';
          }
  
          function toggleForm(formId) {
            console.log('A');
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('registerForm').style.display = 'none';
            document.getElementById(formId).style.display = 'block';
          }

          function validatePassword() {
            var password = document.getElementById("registerPassword").value;
            var repeatPassword = document.getElementById("repeatPassword").value;
            var passwordError = document.getElementById("passwordError");

            if (password !== repeatPassword) {
                passwordError.style.display = 'block';
                document.getElementById("repeatPassword").setCustomValidity("As senhas não coincidem");
            } else {
                passwordError.style.display = 'none';
                document.getElementById("repeatPassword").setCustomValidity("");
            }
        }

        document.getElementById("registerForm").addEventListener("submit", function(event) {
            validatePassword();

            if (!this.checkValidity()) {
                event.preventDefault();
            }
        });

        document.getElementById("registerPassword").addEventListener("input", validatePassword);
        document.getElementById("repeatPassword").addEventListener("input", validatePassword);
          
  
          
      </script>
</body>
</html>