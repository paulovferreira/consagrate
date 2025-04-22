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

$query = "select usuario_id, nome, perfil from usuario where senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	date_default_timezone_set('America/Sao_Paulo');
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	$_SESSION['perfil'] = $usuario_bd['perfil'];
	$_SESSION['usuario_id'] = $usuario_bd['usuario_id'];

    // Atualiza o campo UltimoAcesso com a data e hora atual
    $id_usuario = $usuario_bd['usuario_id']; // Supondo que há um campo 'id' único na tabela 'usuario'    
	$data_atual = date('Y-m-d H:i:s');
    $update_query = "UPDATE usuario SET UltimoAcesso = '{$data_atual}' WHERE usuario_id = '{$id_usuario}'";
   
	 // Executa o comando e captura erros
	 if (mysqli_query($conexao, $update_query)) {
        $status_update = "Sucesso";
    } else {
        $status_update = "Erro: " . mysqli_error($conexao);
    }

	if (empty($usuario_bd['nome'])) {
        header('Location: atualizacadastro.php'); // Redireciona para a página de atualização de cadastro
        exit();
    }

    header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}