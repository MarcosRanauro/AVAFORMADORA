<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../css/index.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../css/exercicio01.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../css/exercicio02.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <header>
    <div>
      <nav class="orange darken-3">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo center logo">
            <img src="../images/logo-graduacao-unisuam-branco.png" alt="Logo-unisuam">
          </a>
          <ul class="left hide-on-med-and-down">
            <li><a href="../../index.php">Principal</a></li>
            <li><a href="../../exercicio1.php">Exercício 1</a></li>
            <li><a href="../../exercicio2.php">Exercício 2</a></li>
            <li><a href="../../exercicio3.php">Exercício 3</a></li>
          </ul>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="../../index.php">Principal</a></li>
            <li><a href="../../exercicio1.php">Exercício 1</a></li>
            <li><a href="../../exercicio2.php">Exercício 2</a></li>
            <li><a href="../../exercicio3.php">Exercício 3</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <div class="container container02">
    <div class="row">
      <form class="col s12">
        <?php
        session_start();

        // Verifique se há resultados armazenados na sessão
        if (isset($_SESSION['resultados'])) {
          $resultados = $_SESSION['resultados'];

          // Exiba os resultados
          echo "<h1>Resultados:</h1>";
          echo $resultados;

          // Limpe os resultados da sessão (opcional)
          unset($_SESSION['resultados']);
        }
        echo '<a class="voltar orange darken-3" type="submit" href="../../index.php">Voltar</a>';
        ?>

      </form>
    </div>
  </div>
  <footer class="white">
    <div class="footer">
      <a href="#!" class="brand-logo center logo">
        <img src="../../src/images/logo-unisuam.png" alt="Logo-unisuam">
      </a>
      <p class="brand-logo center logo">Graduação © 2023</p>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="../../src/js/index.js"></script>
</body>

</html>