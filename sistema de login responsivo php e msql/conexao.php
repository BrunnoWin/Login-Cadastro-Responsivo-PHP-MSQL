<?php
define('HOST', 'localhost'); //servidor
define('USUARIO', 'root'); // usuario
define('SENHA', '');//senha
define('DB', 'login'); //banco de dados

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>