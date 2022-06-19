<?php
session_start();
include('verifica_login.php');
?>

<html>
<head>
    <title>Páginas responsivas - Tutorial Linha de Código</title>
    
<link rel="stylesheet" href="./css_vip_ti/estilo_vip_ti.css">
 

</head>

<body>
    
    
  <header>
    <h1>Area ti</h1>
  </header>
  
  <nav>
    <a href="#" title="Home">Home</a>
    <a href="#" title="Home">Home</a>
    <a href="#" title="Home">Home</a>
  </nav>
  
  <main>
     <div class="container">
        <div class="one-third column">
    <h1>          Login: <?php echo $_SESSION['login'];?></h1> 
    <h2><a href="logout.php">Sair</a></h2>
     
        </div>
        
            <div class="one-third column">
                
              <h1>Pesquisar usuarios</h1>
                 <form method="POST" action="./pesquisar.php">
    Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
    <!---<input type="submit" value="ENVIAR">--->
    <button type="submit">&#128269;</button>

                    </form>
                    
                    
                    
                    
                    
                    
            </div>
            
            
            
            
            
            
              <div class="one-third column">
              
              
              
            </div>
            
            
            
            
                <div class="one-third column">
                </div>
    </div>
  </main>
  
  
  
  
  <footer>
    <p>Desenvolvido por Brunno</p>
  </footer>
</body>




