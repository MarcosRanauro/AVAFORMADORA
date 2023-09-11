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

        // Se não houver erros de validação, redirecione para a página de resultados
        if (empty($erros)) {
            // Montar os resultados em uma string
            $alternar = true;
            $nomesEmLinha = "";

            for ($i = 1; $i <= $repeticoes; $i++) {
                if ($alternar) {
                    $nomesEmLinha .= $i . ": " . $nome . "<br>";
                } else {
                    $nomesEmLinha .= $i . ": " . $sobrenome . "<br>";
                }

                $alternar = !$alternar;
            }

            // Armazenar os resultados em uma sessão (opcional)
            session_start();
            $_SESSION['resultados'] = $nomesEmLinha;

            // Redirecionar para a página de resultados
            header("Location: ./src/components/resultados.php");
            exit();
        }
    }

    return $erros;
}
