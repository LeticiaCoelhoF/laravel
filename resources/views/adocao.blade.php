<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adotar Animal</title>
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
      .adoption-section {
        background-color: #005E54;
        color: white;
        padding: 50px;
        border-radius: 10px;
        margin-top: 100px;
        max-width: 600px;
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
      .form-control:focus {
        border-color: #C2BB00;
        box-shadow: 0 0 5px rgba(194, 187, 0, 0.5);
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

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>