<?php
session_start();
include('conexao.php');

// Verifica se o ID do usuário está na sessão
/*if (!isset($_SESSION['senha'])) {
    header('Location: index.php');
    exit();
}*/

$usuario_id = $_SESSION['usuario_id'];


// Verifica se o campo nome foi enviado
/*if (!isset($_POST['usuario']) || empty(trim($_POST['usuario']))) {
    header('Location: atualizacadastro.php');
    exit();
}*/

$nome = mysqli_real_escape_string($conexao, trim($_POST['usuario']));


// Atualiza o campo nome no banco de dados

$query = "UPDATE usuario SET nome = '{$nome}' WHERE usuario_id = '{$usuario_id}'";

echo "<script>console.log('Usuário enviado: " . addslashes($query) . "');</script>";


if (mysqli_query($conexao, $query)) {
    // Redireciona para o painel
    header('Location: painel.php');
    exit();
} else {
    // Exibe mensagem de erro e registra no log
    error_log("Erro ao atualizar nome: " . mysqli_error($conexao));
    echo "Erro ao atualizar o nome. Por favor, tente novamente.";
}

?>
