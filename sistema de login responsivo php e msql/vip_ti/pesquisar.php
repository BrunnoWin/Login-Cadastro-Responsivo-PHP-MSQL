<?php
session_start();
include('./verifica_login.php');
?>

<html>
<head>
    <title>Páginas responsivas - Tutorial Linha de Código</title>
    <style type="text/css">
    <script src="javascripts/jquery.js" type="text/javascript"></script> 
        <script type="text/javascript">
        $(document).ready(function() {
        var largura = $(window).width(); /* Capturando a do cliente */
        if (largura <= 921) {
        /* Se a Largura do monitor for menor ou = que 921 px */
        $("#hire").hide(); /* Esconde a bandeira azul*/
        $("#resize").hide(); /* Esconde "triangulo" resize no canto inferior direito*/
        }
        else if (tam >= 922) {
        /* Se não for a condição a cima e for marior ou = a 922 px */
        $("#hire").show(); /* Mostra a bandeira azul*/
        $("#resize").show(); /* Mostra "triangulo" resize no canto inferior direito*/
        }
}); 
</script>
 
</style>

<link rel="stylesheet" href="./css_vip_ti/estilo_vip_ti.css">
</head>
<body>
    <div class="container">
        <div class="one-third column">
    <hr>
    <h1>| Login: <?php echo $_SESSION['login'];?></h1> 
    <h2><a href="logout.php">Sair</a></h2>
     
        </div>
        
            <div class="one-third column">
              
   <h1>Pesquisar usuarios</h1>
<form method="POST" action="./pesquisar.php">
    Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
    <input type="submit" value="ENVIAR">
</form>

<?php
    $servidor = "127.0.0.1:3306";
    $usuario = "u570383782_brunno50";
    $senha = "Br@96219643";
    $dbname = "u570383782_login";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM usuario WHERE usuario LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
       echo "Usuario: ".$rows_cursos['usuario']."<br>";
       echo "Senha ".$rows_cursos['senha']."<br>";
        echo "ID: ".$rows_cursos['usuario_id']."<br>";
    }
?>


            </div>
            
              <div class="one-third column">
              
              
              
            </div>
            
            
            
            
                <div class="one-third column">
                </div>
    </div>
 
</body>
</html>
