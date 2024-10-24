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
</head>

<body>


<div class="main-container">
        <div class="video-container">
            <video controls controlsList="nodownload" autoplay loop>
                <!-- Substitua "seu-video.mp4" pelo caminho do seu vídeo -->
                <source src="../mp4/aula8.mp4" type="video/mp4">
            Desculpe, seu navegador não suporta a tag de vídeo.
            </video>
        </div>
    </div>

    
    
    



</body>

</html>