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
    <title>Eu me Consagro - Curso de Consagração Online</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/logo.ico">
</head>

<body>


<div class="main-container">
    <div class="video-container">
    <iframe width="560" height="315" 
    src="https://www.youtube-nocookie.com/embed/zv5rIkvfhiI?si=3DpEZbe2xgSpEHcA" 
    title="YouTube video player" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
    referrerpolicy="strict-origin-when-cross-origin" 
    allowfullscreen></iframe>
    </div>
</div>
    
    
    



</body>

</html>