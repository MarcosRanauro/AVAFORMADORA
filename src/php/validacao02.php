<?php
// Inicialize uma variável para armazenar o nome de usuário
$nome_usuario = '';

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores do formulário
    $nome = $_POST["nome"];
    $password = $_POST["password"];

    // Verifique se o login e a senha correspondem
    if ($nome === "marcosranauro" && $password === "123456") {
        // Defina o nome de usuário após a autenticação bem-sucedida
        $nome_usuario = $nome;
    }
}

// Redirecione o usuário para a página de sucesso ou falha
if (!empty($nome_usuario)) {
    // Redirecione o usuário para a página de sucesso e passe o nome de usuário como parâmetro
    header("Location: ../components/sucesso.php?nome_usuario=" . urlencode($nome_usuario));
    exit();
} else {
    // Redirecione o usuário para a página de falha
    header("Location: ../components/falha.php");
    exit();
}
?>
