@extends('_partials/main')

@section('conteudo')
<!-- Navbar -->
    <!-- Register Section -->
    <div class="container">
      <div class="register-section">
        <h2 class="text-center mb-4">Registro</h2>
        <form action = "{{ route('registro') }}" method = "POST">
          @csrf
          <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name = "nome" placeholder="Digite seu nome" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email"  name = "email" placeholder="Digite seu e-mail" required>
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha"  name = "senha" placeholder="Digite sua senha" required>
          </div>
          <div class="mb-3">
            <label for="confirmar-senha" class="form-label">Confirmar Senha</label>
            <input type="password" class="form-control" id="confirmar-senha" placeholder="Confirme sua senha" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Registrar</button>
          <p class="text-center mt-3">
            Já tem uma conta? <a href="login.html" style="color: #C2BB00;">Faça login</a>
          </p>
        </form>
      </div>
    </div>

@endsection

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
     
    </style>
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>