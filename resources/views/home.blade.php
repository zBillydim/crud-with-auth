<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>


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
    <div id="carr" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://classic.exame.com/wp-content/uploads/2016/10/size_960_16_9_ferrari-italia-spider1.jpg?quality=70&strip=info&w=960" class="d-block w-100 img-fluid"alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.portalautoshopping.com.br/blog/wp-content/uploads/2017/06/beleza-importa-veja-quais-sao-os-carros-mais-bonitos-do-mundo.jpeg"class="d-block w-100 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.portalautoshopping.com.br/blog/wp-content/uploads/2017/06/beleza-importa-veja-quais-sao-os-carros-mais-bonitos-do-mundo.jpeg"class="d-block w-100 img-fluid" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carr" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carr" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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