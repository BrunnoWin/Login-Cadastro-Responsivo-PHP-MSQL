<?php
session_start();
include("conexao.php");


$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

///////////////// caso e-mail  ja esteja cadastrado//////////////////////////////////
$sql = "select count(*) as total from usuario where email = '$email'";
$result2 = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result2);

if($row['total'] == 1) {   //== 1 significa caso tenha um email assim ele mostra email existe na msg que esta no cadastro php
	$_SESSION['email_existe'] = true;
	header('Location: cadastro.php');
	exit;
}
//////////////////////////////////////////////////

$sql = "INSERT INTO usuario (nome, email, usuario, senha, data_cadastro) VALUES ('$nome','$email', '$usuario', '$senha', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>