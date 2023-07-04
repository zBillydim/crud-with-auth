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
</head>
<style>
    .alerta{
    margin-top: 100px; 
    }
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
section {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 80vh;
  background: #fefefe;
}

.login-box {
  position: relative;
  width: 500px;
  height: 550px;
  left: 10%;
  background-color: #212529;
  border: 2px solid black ;
  border-radius: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}

h2 {
  font-size: 2em;
  color: #fff;
  text-align: center;
}

.input-box {
  position: relative;
  width: 310px;
  margin: 30px 0;
  border-bottom: 2px solid #fff;
}
.input-box label {
  position: absolute;
  top: 60%;
  left: 5px;
  transform: translateY(-50%);
  font-size: 1em;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}

.input-box input:focus ~ label,
.input-box input:valid ~ label {
  top: -5px;
}

.input-box input {
  width: 100%;
  height: 50px;
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color: #fff;
  padding: 0 35px 0 5px;
}

.input-box .icon {
  position: absolute;
  right: 8px;
  color: #fff;
  font-size: 1.2em;
  line-height: 57px;
}

.remenber-forgot {
  margin: -15px 0 15px;
  font-size: 0.9em;
  color: #fff;
  display: flex;
  justify-content: space-between;
}

.remenber-forgot label input {
  margin-right: 3px;
}

.remenber-forgot a {
  color: #fff;
  text-decoration: none;
}

.remenber-forgot a:hover {
  text-decoration: underline;
}

button {
  width: 100%;
  height: 40px;
  background-color: #fff;
  border: none;
  outline: none;
  border-radius: 40px;
  cursor: pointer;
  font-size: 1em;
  color: #000;
  font-weight: 500;
}

.register-link{
  font-size: .9em;
  color: #fff;
  text-align: center;
  margin: 25px 0 10px;

}

.register-link p a{
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}

.register-link p a:hover {
  color: #fff;
  text-decoration: underline;
}

.input-box{
  width: 290px;
}

.img {
  position: relative;
  width: 600px;
  height: 300px;
  right: 10%;
  display: flex;
  align-items: center;
}

.subtitle {
  position: relative;
  left: 10%;
}

.papai{
  padding: 30px;
  height: 600px;
}
.botao{
  position: relative;
  height: auto;
  top: 210px;
  right: 220px;
  width: 150px;
  border-radius: 40px;
  display: flex;
  justify-content: space-between;
  margin: -15px 0 15px;
}
.wrapper{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

button{
  display: block;
  font-size: 18px;
  font-family: sans-serif;
  text-decoration: none;
  color: #333;
  border-top: 2px solid #333;
  border-bottom: 2px solid #333;
  padding: 6px;
  letter-spacing: 1px;
  transition: all .25s;
}

button:hover{
  letter-spacing: 5px;
}
</style>
<body>

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

  @if(Session::has('logout_message'))
  <div id="alerta" class="alert alert-success mt-3 mx-auto" style="max-width: 300px;" role="alert">
      Logout bem sucedido.
      <button type="button" class="close" onclick="fecha(event)" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @endif
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
          <form action="" id="loginForm">
            <h2>Login</h2>
            <div class="input-box">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
              <input type="email" required>
              <label>Email</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
              <input type="password" required>
              <label>Senha</label>
            </div>
            <div class="remenber-forgot">
              <label><input type="checkbox">Manter login</label>
              <a href="#">Esqueceu a senha?</a>
            </div>
            <button class="mb-3" type="submit" class="wrapper">Login</button>           
            <button class="mb-3" onclick="toggleForm('registerForm')" class="wrapper">Registrar-se</button>           
          </form>

          <form action="" id="registerForm" style="display: none"> 
            <h2>Registrar</h2>
            <div class="input-box">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
              <input type="email" required>
              <label>Nome</label>
            </div>  
            <div class="input-box">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
              <input type="email" required>
              <label>Sobrenome</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
              <input type="email" required>
              <label>Email</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
              <input type="password" required>
              <label>Senha</label>
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
  
          
  
          
      </script>
</body>
</html>