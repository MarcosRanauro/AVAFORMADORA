<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário PHP</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./src/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./src/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./src/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./src/css/index.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./src/css/exercicio01.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <header>
    <div>
      <nav class="orange darken-3">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo center logo">
            <img src="./src/images/logo-graduacao-unisuam-branco.png" alt="Logo-unisuam">
          </a>
          <ul class="left hide-on-med-and-down">
            <li><a href="index.php">Principal</a></li>
            <li><a href="exercicio1.php">Exercício 1</a></li>
            <li><a href="exercicio2.php">Exercício 2</a></li>
            <li><a href="exercicio3.php">Exercício 3</a></li>
          </ul>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Principal</a></li>
            <li><a href="exercicio1.php">Exercício 1</a></li>
            <li><a href="exercicio2.php">Exercício 2</a></li>
            <li><a href="exercicio3.php">Exercício 3</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <div class="container">
    <h1>Exercício 01</h1>
    <h2>Formulário PHP</h2>

    <div class="row">
      <form class="col s12" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div>
          <label for="nome">Nome:</label>
          <input type="text" name="nome" id="nome" required><br>

          <label for="sobrenome">Sobrenome:</label>
          <input type="text" name="sobrenome" id="sobrenome" required><br>

          <label for="repeticoes">Quantidade de repetições:</label>
          <input type="number" name="repeticoes" id="repeticoes" required><br>

          <input class="voltar enviar orange darken-3" type="submit" value="Enviar">
        </div>
      </form>
    </div>
    <?php
    echo '<a class="voltar orange darken-3" type="submit" href="index.php">Voltar</a>';
    ?>
    <?php
    // Inclua o arquivo de validação
    include './src/php/validacao.php';

    // Execute a função de validação
    $erros = validarFormulario();

    // Verifique se há erros de validação
    if (!empty($erros)) {
      echo "<ul id='erros'>";
      foreach ($erros as $erro) {
        echo "<li>$erro</li>";
      }
      echo "</ul>";
    }
    ?>
  </div>
  <footer class="white">
    <div class="footer">
      <a href="#!" class="brand-logo center logo">
        <img src="./src/images/logo-unisuam.png" alt="Logo-unisuam">
      </a>
      <p class="brand-logo center logo">Graduação © 2023</p>
    </div>
  </footer>
  <script src="./src/js/exercicio1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="./src/js/index.js"></script>
</body>

</html>