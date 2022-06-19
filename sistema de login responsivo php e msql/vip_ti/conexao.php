<?php
define('HOST', '127.0.0.1:3306'); 
define('USUARIO', 'u570383782_brunno50');
define('SENHA', 'Br@96219643');
define('DB', 'u570383782_login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
