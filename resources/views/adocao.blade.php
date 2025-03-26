@extends('_partials/main')

@section('conteudo')
 <!-- Navbar -->
    <!-- Adoption Section -->
    <div class="container">
      <div class="adoption-section">
        <h2 class="text-center mb-4">Adotar Rex</h2>
        <form>
          <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
          </div>
          <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" placeholder="Digite seu endereço" required>
          </div>
          <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem (opcional)</label>
            <textarea class="form-control" id="mensagem" rows="3" placeholder="Digite uma mensagem"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Enviar Solicitação de Adoção</button>
        </form>
      </div>
    </div>

@endsection

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adotar Animal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      
    </style>
  </head>
  <body>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>