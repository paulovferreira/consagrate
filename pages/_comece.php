<?php
if (session_status() === PHP_SESSION_NONE) {
    // Verifica se a sessão ainda não foi iniciada
    session_start();
}

include('../verifica_login.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Acesso</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="../css/pages.css">
</head>

<body>


<div class="main-container">
    <div class="content">
        <h1>SEJAM BEM VINDO.</h1>
        <h2>Comece por Aqui.</h2>
        <p>Abaixo, você encontrará o vídeo. Utilize o botão abaixo para voltar à página anterior quando terminar.</p>
        
        <div class="video-container">
            <video controls controlsList="nodownload" autoplay loop>
                <source src="../mp4/aula1.mp4" type="video/mp4">
                Desculpe, seu navegador não suporta a tag de vídeo.
            </video>
        </div>
        
        <button class="back-button" onclick="history.back()">Voltar</button>
    </div>
</div>

</body>

</html>