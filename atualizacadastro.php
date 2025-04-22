<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eu me Consagro - Curso de Consagração Online</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">    
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/logo.ico">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">                    
                    
                    <div class="box">
                        
                        <figure style="margin: 0 auto;">
                            <img src="./img/imglogin.png" alt="Imagem de Login">
                        </figure>
                        
                        <form action="atualizar.php" method="POST">
                            <div>
                                <h1>Atualização de cadastro</h1>
                                <p>
                                    Seja Bem Vindo. Essa é sua primeira vez aqui. <br/>                                    
                                    Para continuar, Insira seu nome abaixo.
                                </p>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" id="usuario" class="input is-large" placeholder="Insira Seu Nome" autofocus="">
                                </div>
                            </div>          

                          
                            <button type="submit">Continuar</button>                            
                            <hr/>                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>