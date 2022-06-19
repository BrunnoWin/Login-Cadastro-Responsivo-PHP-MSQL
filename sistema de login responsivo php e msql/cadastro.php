<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" type="text/css" href="css/telalogin.css">


</head>


<body>



    <div class="login">
        <div class="image">
           <!-- <img src="logo.jpg" alt="">   --->
           
            
        </div>

<!-------informaçao se usuario existe ou se login cadastro verificado com sucesso-------->
<?php  
if(@$_SESSION['status_cadastro']):// O @ E SO PARA O SERVIDOR NAO MOSTRA NOTIFICAO  NO LOCALHOST SE FOR
                                  // SERVIDOR PAGO TIPO HOSTINGER TIRA O @
?>
<div>
<p>cadastro efetuado com sucesso</p>
<p>faça login usando seu usuario e senha <a href="login.php">aqui</a></p>
</div>
<?php 
endif;
unset($_SESSION['status_cadastro']);
?>


<?php
if(@$_SESSION['usuario_existe']):
?>
<div>
<p>O usuario escolhido  ja existe. informe outro e tente novamente.</p>
</div>
<?php 
endif;
unset($_SESSION['usuario_existe']);
?>  

<?php
if(@$_SESSION['email_existe']):
?>
<div>
<p>O email escolhido  ja existe. informe outro e tente novamente.</p>
</div>
<?php 
endif;
unset($_SESSION['email_existe']);
?>  
<!-------informaçao se usuario existe ou se login cadastro verificado com sucesso-------->

         


        <form action="cadastrar.php" method="POST">
            
           <div class="row">
                <i class="fas fa-user"></i>
        <!--<input name="nome" type="text" class="input is-large" placeholder="Nome Completo " autofocus> -->
         <input name="nome" type="text" class="input is-large" placeholder="Nome Completo "  autofocus=""  style=" text-transform:uppercase" required onchange="try{setCustomValidity('')}catch(e){}">
          <!--< style=" text-transform:uppercase" o  text-transform:uppercase permite somente letra maiuscula 
          
          required  onchange="try{setCustomValidity('')}catch(e){}"   e para obrigar o usuario digitar
          
          -->
          
                                </div>
                                  <div class="row">
                                      
                <i class="fas fa-user"></i>
        <input name="email" type="email" class="input is-large" placeholder="E-mail" autofocus="">
                                </div>
                                 <!--<input  required e para ser obrigatorio ter que digitar algo se nao ao clicar no botao ele nao deixa proseguir-->
                                
            
            <div class="row">
                <i class="fas fa-user"></i>
                <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus=""    required  onchange="try{setCustomValidity('')}catch(e){}"  >
            </div>

            <div class="row">
                <i class="fas fa-lock"></i>
                <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
            </div>

            <div class="row">
                <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                <a href="index.php">Login</a>
            </div>
        </form>
    </div>

</body>

</html>