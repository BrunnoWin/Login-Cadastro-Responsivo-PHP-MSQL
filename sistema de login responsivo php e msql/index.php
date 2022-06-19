<?php

// Inicia a sessão
@session_start();


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" type="text/css" href="css/telalogin.css">


</head>

<body>

    <div class="login">
        <div class="image">
            <img src="logo.jpg" alt="">
            
        </div>
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="notification is-danger">
          <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>

        <form action="login.php" method="POST">
            <div class="row">
                <i class="fas fa-user"></i>
                <input   name="email" type="email" class="input is-large" placeholder="Seu Email" autofocus="">
            </div>

            <div class="row">
                <i class="fas fa-lock"></i>
                <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
            </div>

            <div class="row">
                <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                 <!---<a href="./vip_ti/index.php">Login Vip Ti</a></p>--->
                 <a href="cadastro.php">Cadastre-se</a></p>
                 
                
            </div>
        </form>
    </div>

</body>

</html>