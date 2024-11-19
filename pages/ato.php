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
    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/logo.ico">
</head>

<body>



<div class="main-container">
    <div class="video-container">
        <!-- Embed de vídeo do YouTube -->
        <h1>Exercicios Espirituais</h1>
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/4leEtZ-WdJM?si=k8eZ9c_50r1YsGOv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>


<div class="main-container">
    <div class="video-container">
    <h1>Consagração e Renovação</h1>
        <!-- Embed de vídeo do YouTube -->
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/uBSXDmS4H7M?si=HtAFpUjNw3N10HSN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<!-- <div class="main-container">
        <div class="video-container">
            <video controls controlsList="nodownload" autoplay loop>
                
                <source src="../mp4/aula1.mov" type="video/mp4">
            Desculpe, seu navegador não suporta a tag de vídeo.
            </video>
        </div>
    </div> -->

</body>

</html>