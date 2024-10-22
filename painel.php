<?php
if (session_status() === PHP_SESSION_NONE) {
    // Verifica se a sessão ainda não foi iniciada
    session_start();
}

include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pilates em Casa - by Camila Ferreira</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="css/painel.css">
</head>

<body>


<div id="header">
    <div id="logo">
        <img src="./img/mulher.png" alt="Imagem do Usuário" width="70" height="70">
    </div>
    <?php
    if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'ADMIN'):
    ?>                
        <a class="highlight-button" href="cadastro.php">Cadastrar novo usuário</a>
    <?php
    endif;
    ?>
    <div id="user-info">
        <img src="./img/user.png" alt="Imagem do Usuário" width="40" height="40">
        <span>
            Olá, <?php echo $_SESSION['nome'];?>
            <br>
            Sair
    
        </span>
    </div>
    </div>      

    <div class="separador">        
        <div><a href="./videos/video1.php"> <img src="./img/comece.png" alt="Imagem 2">  </a>  </div>           
    </div>

    <div class="gallery">        
        <div><a href="./pages/comece.php"> <img src="./img/capa1.png" alt="Imagem 2">  </a>  </div>        
        <div><a href="./videos/video1.php"> <img src="./img/capa1.png" alt="Imagem 2">  </a>  </div>        
        <div><a href="./videos/video1.php"> <img src="./img/capa1.png" alt="Imagem 2">  </a>  </div>        
        <!-- Adicione mais divs com suas imagens aqui -->
        <!-- Certifique-se de substituir "imagem1.jpg", "imagem2.jpg", etc., pelos caminhos corretos das suas imagens -->
    </div>

    <div class="separador">        
        <div><a href="./videos/video1.php"> <img src="./img/comece.png" alt="Imagem 2">  </a>  </div>           
    </div>    

    <div class="gallery">        
        <div><a href="./videos/video1.php"> <img src="./img/capa1.png" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video2.php"> <img src="./img/capa2.png" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video3.php"> <img src="./img/capa3.png" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video4.php"> <img src="./img/capa4.png" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video5.php"> <img src="./img/capa5.png" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video6.php"> <img src="./img/capa6.png" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video7.php"> <img src="./img/capa7.png" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video8.php"> <img src="./img/capa8.png" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video9.php"> <img src="./img/capa9.png" alt="Imagem 2">  </a>  </div>
        <div><a href="./videos/video10.php"> <img src="./img/capa10.png" alt="Imagem 2">  </a>  </div>
        
        <!-- Adicione mais divs com suas imagens aqui -->
        <!-- Certifique-se de substituir "imagem1.jpg", "imagem2.jpg", etc., pelos caminhos corretos das suas imagens -->
    </div>

    
    <footer>
        <p> Todos os direitos reservados. Camila Ferreira - CREFITO: 5554478. Desenvolvido por: Paulo Ferreira Tecnologia.</p>
    </footer>


</body>

</html>