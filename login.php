<?php
session_start();
include('conexao.php');

// if(empty($_POST['usuario']) || empty($_POST['senha'])) {
// 	header('Location: index.php');
// 	exit();
// }

if(empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

/*$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);*/
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

/*$query = "select nome, perfil from usuario where usuario = '{$usuario}' and senha = '{$senha}'";*/

$query = "select nome, perfil from usuario where senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	$_SESSION['perfil'] = $usuario_bd['perfil'];
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}