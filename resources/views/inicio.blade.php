@extends('_partials/main')

@section('conteudo')
  
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <h1>Adote um Amigo</h1>
        <p class="lead">Dê um lar para um animal de rua e ganhe um companheiro para a vida toda.</p>
        <a href="#" class="btn btn-primary btn-lg">Ver Animais para Adoção</a>
      </div>
    </section>

    <!-- Animals Section -->
    <section class="container my-5">
      <h2 class="text-center mb-4">Animais Disponíveis para Adoção</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR4gmkPjM0gi106-GoCiTauU4wR9sQS_uE8cngtL8Xx7tszbgmL88JsJVPf7okkb2HbEJFolmRuilnDGlF3r4b4f2a5k3oCzRi4RONLNFM" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e outros animais.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://preview.redd.it/a-gata-mais-linda-do-mundo-v0-l8dmji653rvb1.jpg?width=640&crop=smart&auto=webp&s=c2628e844c770d049068d8e753be15f6c7c1e0d3" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Mimi</h5>
              <p class="card-text">Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo e um lugar quentinho para dormir.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://img.olx.com.br/images/35/351434005600823.jpg" class="card-img-top" alt="Coelho">
            <div class="card-body">
              <h5 class="card-title">Bolinha</h5>
              <p class="card-text">Bolinha é um coelho muito dócil e curioso. Ele adora explorar novos ambientes e brincar com brinquedos.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
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
    <title>Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        font-family: Arial, sans-serif;
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
        padding: 100px 0;
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
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>