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
  * {
    padding: 0;
    margin: 0;
    font-family: "Poppins", sans-serif;
  }

  .carousel-item {
    width: 1800px;
    max-height: 1000PX;
    background-color: #212529;
    background-size: cover;

  }

  .loja {
    text-align: center;
    background-color: #212529;
    color: #fff;
  }

  .grid1 img:hover {
    opacity: 0.5;
    background-color: aqua;
  }


  .grid1  img {
    max-width: 100%;
    display: block;
    transition: opacity 1s;
    cursor: pointer;
  }

  p {
    background-color: #212529;
    color: #fff;
  }

  .grid1 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    max-width: 900px;
    margin: 0 auto;
    grid-gap: 20px;
  }

  #carr {
    background-color: #212529;
  }

  .incial {
    margin-top: 20px;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container teste">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link btn btn-dark" href="/perfil">Perfil <i class="fa fa-user"> </i> </a>
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
    {{-- billy faz o script do slide pra passar pro lado --}}
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.motortrend.com/uploads/2023/03/anthracite-supra-vented-hood.jpg" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.motortrend.com/uploads/2023/01/r33-gtr-rolling-front.jpg?fit=around%7C875:492" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.portalautoshopping.com.br/blog/wp-content/uploads/2017/06/beleza-importa-veja-quais-sao-os-carros-mais-bonitos-do-mundo.jpeg" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.portalautoshopping.com.br/blog/wp-content/uploads/2017/06/beleza-importa-veja-quais-sao-os-carros-mais-bonitos-do-mundo.jpeg" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://quatrorodas.abril.com.br/wp-content/uploads/2021/06/porsche_911_carrera_gts_5_051501ad0ba807f0.jpg?quality=70&strip=info" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.webmotors.com.br/wp-content/uploads/2018/02/09225641/940x576_e249565b-038f-4bab-af2d-42e68cab2381_4.jpg" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.motor1.com/images/mgl/kP9mN/s1/mercedes-amg-a-45-4matic-2019.jpg" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.autoo.com.br/fotos/2017/9/1280_960/Bugatti-Chiron-2017-1600-15_12092017_7201_1280_960.jpg" class="d-block w-100 img-fluid" alt="...">
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

  <div>
    <div>
      <div class="loja">
        <h1 class="loja">Revendas de carros potentes</h1>
        <h6 class="loja">totalmente cofiavel</h6>
      </div>
    </div>
    <section class="grid1">
      <div>
        <img src="https://www.motortrend.com/uploads/2023/03/anthracite-supra-vented-hood.jpg" alt="">
        <p>R$3.000.000</p>
      </div>
      <div>
        <img src="https://www.motortrend.com/uploads/2023/01/r33-gtr-rolling-front.jpg?fit=around%7C875:492" alt="">
        <p>R$4.500.000</p>
      </div>
      <div>
        <img src="https://www.autoo.com.br/fotos/2017/9/1280_960/Bugatti-Chiron-2017-1600-15_12092017_7201_1280_960.jpg" height="167" width="500" alt="">
        <p>R$6.000.000</p>
      </div>
      <div>
        <img src="https://www.webmotors.com.br/wp-content/uploads/2018/02/09225641/940x576_e249565b-038f-4bab-af2d-42e68cab2381_4.jpg" height="167" width="500" alt="">
        <p>R$3.500.000</p>
      </div>
      <div>
        <img src="https://www.portalautoshopping.com.br/blog/wp-content/uploads/2017/06/beleza-importa-veja-quais-sao-os-carros-mais-bonitos-do-mundo.jpeg" height="167" width="500" alt="">
        <p>R$7.000.000</p>
      </div>
      <div>
        <img src="https://quatrorodas.abril.com.br/wp-content/uploads/2021/06/porsche_911_carrera_gts_5_051501ad0ba807f0.jpg?quality=70&strip=info" height="167" width="500" alt="">
        <p>R$5.000.000</p>
      </div>
    </section>

    <br>
    <br>  a

  </div>


  <footer id="footer" class="bg-dark text-white text-center py-2 fixed-bottom">
    <div class="container text-center">
      <div class="col">
        Desenvolvido por <a style="text-decoration: none;" href="https://github.com/zbillydim" target="_blank">Gabriel C.</a>
        <br>
        <a style="text-decoration: none;" href="https://github.com/zbillydim"><i class="fab fa-github github-icon"> Github</i></a>
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
    var currentSlide = 0;
    var slides = document.getElementsByClassName('carousel-item');

    function showSlide(n) {
      if (n >= slides.length) {
        currentSlide = 0;
      } else if (n < 0) {
        currentSlide = slides.length - 1;
      }

      for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
      }

      slides[currentSlide].style.display = 'block';
    }

    function previousSlide() {
      showSlide(currentSlide - 1);
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }

    showSlide(currentSlide);

  </script>
</body>

</html>