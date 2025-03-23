@extends('_partials/main')

@section('conteudo')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Animais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <h1>Animais para Adoção</h1>
        <p class="lead">Encontre seu novo melhor amigo!</p>
      </div>
    </section>

    <!-- Animals List Section -->
    <section class="container my-5">
      <div class="row">
        <!-- Animal 1 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR4gmkPjM0gi106-GoCiTauU4wR9sQS_uE8cngtL8Xx7tszbgmL88JsJVPf7okkb2HbEJFolmRuilnDGlF3r4b4f2a5k3oCzRi4RONLNFM" class="card-img-top" alt="Rex">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e outros animais.</p>
              <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
          </div>
        </div>
        <!-- Animal 2 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://preview.redd.it/a-gata-mais-linda-do-mundo-v0-l8dmji653rvb1.jpg?width=640&crop=smart&auto=webp&s=c2628e844c770d049068d8e753be15f6c7c1e0d3" class="card-img-top" alt="Mimi">
            <div class="card-body">
              <h5 class="card-title">Mimi</h5>
              <p class="card-text">Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo e um lugar quentinho para dormir.</p>
              <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
          </div>
        </div>
        <!-- Animal 3 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://img.olx.com.br/images/35/351434005600823.jpg" class="card-img-top" alt="Bolinha">
            <div class="card-body">
              <h5 class="card-title">Bolinha</h5>
              <p class="card-text">Bolinha é um coelho muito dócil e curioso. Ele adora explorar novos ambientes e brincar com brinquedos.</p>
              <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
          </div>
        </div>
        <!-- Animal 4 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://amoraospets.com/wp-content/uploads/2019/02/melhor-rac%CC%A7a%CC%83o-para-cane-corso.jpg" class="card-img-top" alt="Thor">
            <div class="card-body">
              <h5 class="card-title">Thor</h5>
              <p class="card-text">Thor é um cachorro grande e protetor. Ele é ideal para famílias que buscam um guardião leal.</p>
              <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
          </div>
        </div>
        <!-- Animal 5 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://img.odcdn.com.br/cdn-cgi/image/width=1200,height=1200,fit=cover/wp-content/uploads/2022/05/shutterstock_gata-tricolor-femea.jpg" class="card-img-top" alt="Luna">
            <div class="card-body">
              <h5 class="card-title">Luna</h5>
              <p class="card-text">Luna é uma gata muito independente e curiosa. Ela adora explorar e brincar com arranhadores.</p>
              <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
          </div>
        </div>
        <!-- Animal 6 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUu22vJPSEt5zW4r8aixzbFDxWNDsFOQa7aQ&s" class="card-img-top" alt="Pipoca">
            <div class="card-body">
              <h5 class="card-title">Pipoca</h5>
              <p class="card-text">Pipoca é um hamster muito ativo e brincalhão. Ele adora correr em sua rodinha e comer sementes.</p>
              <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
      }
      .navbar {
        background-color: #003547;
      }
      .navbar-brand, .nav-link {
        color: #C2BB00 !important;
      }
      .hero-section {
        background-color: #005E54;
        color: white;
        padding: 60px 0;
        text-align: center;
      }
      .btn-primary {
        background-color: #E1523D;
        border-color: #E1523D;
      }
      .btn-primary:hover {
        background-color: #ED8B16;
        border-color: #ED8B16;
      }
      .card {
        margin-bottom: 20px;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .card-img-top {
        height: 200px;
        object-fit: cover;
      }
      .footer {
        background-color: #003547;
        color: white;
        padding: 20px 0;
        text-align: center;
      }
    </style>
  </head>
  <body>
    

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>