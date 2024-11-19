<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eu me Consagro - Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">    
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/logo.ico">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <div class="box">
                        
                        <!-- Mensagem de boas-vindas -->
                        <h1 class="title is-3 has-text-primary">Seja Bem-vindo!</h1>
                        <p class="has-text-grey">Curso de Consagração a Jesus pelas mãos da virgem Maria, pelo método de São Luis Maria Grignion de Montfort.</p>
                        
                        <hr/>

                        <p class="has-text-grey">Tenho um recado abaixo pra você! Assista ao vídeo.</p>

                        <!-- Vídeo de boas-vindas -->
                        <div class="video-container mb-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/seu-video-id" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <hr/>

                        <!-- QR Code para contato via WhatsApp -->
                        <figure class="image is-128x128" style="margin: 0 auto;">
                            <img src="img/qrcode.png" alt="QR Code para WhatsApp">
                        </figure>
                        <hr/>
                        <p class="mb-4">Escaneie o QR Code para falar conosco pelo WhatsApp.</p>

                        <!-- Botão de contato pelo WhatsApp -->
                        <a href="https://wa.me/5511999999999" target="_blank" class="button is-success is-large is-fullwidth mb-4">
                            Falar Pelo WhatsApp e pegar meu acesso!
                        </a>

                        <!-- Mensagem de despedida -->
                        <p class="has-text-grey">Estou pronto para ajudar você a começar sua jornada. Você não estará sozinho(a)!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Estilo adicional para o contêiner de vídeo -->
    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #f4f4f4;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</body>

</html>