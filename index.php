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
  <div class="container container02">
    <div class="img column">
      <img src="./src/images/aluno.jpeg" alt="foto-aluno">
    </div>
    <form class="col s12">
      <div class="infos">
        <h1>Aluno: <span class="indigo-text text-darken-4">Marcos Vinicius Ranauro Corrêa</span></h1>
        <h2>Matrícula: <span class="indigo-text text-darken-4">23103576</span></h2>
        <h3>Curso: <span class="indigo-text text-darken-4">Análise e Desenvolvimento de Sistemas</span></h3>
        <h4>Período: <span class="indigo-text text-darken-4">2º</span></h4>
    </form>
  </div>
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
</body>

</html>