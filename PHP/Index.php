<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cadastro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novo-usuario.php">Novo Usuário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listar-usuario.php">Listar Usuário</a>
      </li>
    </ul>
  </div>
</nav>

<?php
    switch(@$_REQUEST["page"]){
        case "novo":
            include("novo-usuario.php")
    }
?>

    <script src="js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>