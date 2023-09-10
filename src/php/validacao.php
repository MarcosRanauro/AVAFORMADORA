<?php
function validarFormulario() {
    $erros = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter os valores do campo "nome", "sobrenome" e "repeticoes" do formulário
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $repeticoes = $_POST["repeticoes"];

        // Validação do campo "nome"
        if (empty($nome)) {
            $erros[] = "O campo Nome é obrigatório.";
        }

        // Validação do campo "sobrenome"
        if (empty($sobrenome)) {
            $erros[] = "O campo Sobrenome é obrigatório.";
        }

        // Validação do campo "repeticoes"
        if (empty($repeticoes)) {
            $erros[] = "O campo Quantidade de repetições deve ser maior que zero.";
        } elseif (!is_numeric($repeticoes) || $repeticoes <= 0) {
            $erros[] = "A quantidade de repetições deve ser um número positivo.";
        }

        // Se não houver erros de validação, mostrar os dados alternando entre nome e sobrenome
        if (empty($erros)) {
            $alternar = true; // Variável para alternar entre nome e sobrenome
            $nomesEmLinha = ""; // Variável para armazenar os nomes em uma linha

            for ($i = 1; $i <= $repeticoes; $i++) {
              if ($alternar) {
                  $nomesEmLinha .= $i . ": " . $nome . "<br>";
              } else {
                  $nomesEmLinha .= $i . ": " . $sobrenome . "<br>";
              }
          
              $alternar = !$alternar; // Inverte o valor de $alternar
          }
          echo '<p class="container-form">' . $nomesEmLinha . '</p>';
        }
    }

    return $erros;
}
?>
