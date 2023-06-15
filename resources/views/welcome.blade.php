<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initial page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    .alerta{
    margin-top: 100px; 
}
</style>
<body>
    @if(Session::has('logout_message'))
    <div id="alerta" class="alert alert-success mt-3 mx-auto" style="max-width: 300px;" role="alert">
        Logout bem sucedido.
        <button type="button" class="close" onclick="fecha(event)" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if($errors->any())
        <div id="alerta" class="alert alert-danger mt-3 mx-auto" style="max-width: 300px;" role="alert">
            {{ $errors->first() }}
            <button type="button" class="close" onclick="fecha(event)" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    
                    <div class="card-body">
                        {{-- inicio form login --}}
                        <form id="loginForm" action="{{ route('login.submit') }}" method="POST">
                            <div class="card-header">Login</div>
                            <br>
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                            {{-- Fim form login --}}
                            {{-- Inicio form register --}}
                        <form id="registerForm" action="{{ route('register.submit') }}" method="POST" style="display: none;">
                            <div class="card-header">Register</div>
                            <br>
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="registerEmail" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="registerPassword" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="repeatPassword" class="form-label">Repeat Password</label>
                                <input type="password" class="form-control" id="repeatPassword" name="repeatPassword" oninput="validatePassword()" required>
                                <div id="passwordError" class="invalid-feedback">As senhas não coincidem</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                        {{-- Fim form register --}}
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-link" onclick="toggleForm('loginForm')">Login</button>
                            <button class="btn btn-link" onclick="toggleForm('registerForm')">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <script>
        function fecha(event){
            document.getElementById('alerta').style.display = 'none';
        }

        function toggleForm(formId) {
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
