<?php
define('HOST', '50.116.112.16:3306');
define('USUARIO', 'vitali04_adminconsagrate');
define('SENHA', 'consagrados01');
define('DB', 'vitali04_consagrate');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');