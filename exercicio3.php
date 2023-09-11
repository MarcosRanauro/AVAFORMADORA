<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AVAFORMADORA</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./src/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./src/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./src/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./src/css/index.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./src/css/exercicio01.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="./src/css/exercicio02.css" type="text/css" rel="stylesheet" media="screen,projection" />
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
    <h1>Exercício 03</h1>
    <h2>Formulário PHP</h2>
    <div class="row">
    <form class="col s12" method="post" action="./src/components/resultados03.php">
        <div class="con-exe2">
          <label for="massa">Massa:</label>
          <input type="number" name="massa" id="massa" required><br>
          <label for="volume">Volume:</label>
          <input type="number" name="volume" id="volume" required><br>
          <input class="enviar voltar orange darken-3" type="submit" name="calcular" value="Calcular">
        </div>
      </form>
    </div>
    <?php
    if (isset($_POST["calcular"])) {
      $massa = $_POST["massa"];
      $volume = $_POST["volume"];

      $errors = [];

      if ($massa <= 0 || $volume <= 0) {
        $errors[] = "O campo Massa e Volume devem ser maiores que zero.";
      }

      if ($massa < 0 || $volume < 0) {
        $errors[] = "O campo Massa e Volume devem ser números positivos.";
      }

      if (empty($errors)) {
        // Redireciona para resultados03.php se não houver erros
        header("Location: resultados03.php?massa=$massa&volume=$volume");
        exit;
      } else {
        // Exibe os erros na página exercicio3.php
        foreach ($errors as $error) {
          echo "<p>$error</p>";
        }
      }
    }
    ?>
    <?php
    echo '<a class="voltar orange darken-3" type="submit" href="index.php">Voltar</a>';
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="./src/js/index.js"></script>
  <script src="./src/js/exercicio1.js"></script>
</body>

</html>