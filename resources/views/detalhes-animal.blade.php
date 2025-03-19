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

    <!-- Animal Details Section -->
    <div class="container">
      <div class="animal-details-section">
        <div class="row">
          <div class="col-md-6">
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR4gmkPjM0gi106-GoCiTauU4wR9sQS_uE8cngtL8Xx7tszbgmL88JsJVPf7okkb2HbEJFolmRuilnDGlF3r4b4f2a5k3oCzRi4RONLNFM" class="img-fluid rounded" alt="Rex">
          </div>
          <div class="col-md-6">
            <h2>Rex</h2>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Raça:</strong> Vira-lata</p>
            <p><strong>Porte:</strong> Médio</p>
            <p><strong>Descrição:</strong> Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e outros animais. É ideal para famílias ativas que gostam de passear e brincar ao ar livre.</p>
            <a href="adocao.html" class="btn btn-primary w-100">Adotar Rex</a>
          </div>
        </div>
      </div>
    </div>

@endsection
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Animal</title>
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
      .animal-details-section {
        background-color: #005E54;
        color: white;
        padding: 50px;
        border-radius: 10px;
        margin-top: 100px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
      }
      .btn-primary {
        background-color: #E1523D;
        border-color: #E1523D;
      }
      .btn-primary:hover {
        background-color: #ED8B16;
        border-color: #ED8B16;
      }
      .footer {
        background-color: #003547;
        color: white;
        padding: 20px 0;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
      }
    </style>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>