<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$perfil_selecionado = $_POST['perfil'];
$email = $_POST['email'];
$telefone = $_POST['telefone']; 
$usuarioinclusao = $_SESSION['nome'];

/*
$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}
*/

$sql = "INSERT INTO usuario (nome, usuario, senha, perfil, data_cadastro, email, telefone, usuarioinclusao) VALUES ('$nome', '$usuario', '$senha', '$perfil_selecionado', NOW(), '$email', '$telefone', '$usuarioinclusao' )";              

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>