<?php
@session_start();/// inicia a sessao

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME  </title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/menunavegacao.css">
    <link rel="stylesheet" href="css/cardnovidades.css">

</head>

<body>
<header rel="cabeçalho">        
<h1>BRUNNO.XYZ</h1>
<p>                      </p>
</header>

<nav rel="menu de navegaçao do site" class="bg hover-circulo" >

<a href="https://brunno.xyz/home.php" title="HOME"> HOME</a>
<a href="dowloand/pagina-principal" title="">DOWLOAND</a>
<a href="noticias/pagina-principal" title="NOTICIAS">NOTICIAS</a>
<a href="review/pagina-principal-review.html" title="REVIEW">REVIEW </a>
<a href="tutoriais/pagina-principal.html" title="TUTORIAIS">TUTORIAIS </a>
<a href="contato/pagina-principal" title="CONTATO">CONTATO</a>
<a href="ajuda/pagina-principal" title="AJUDA">AJUDA</a>





</nav>

     <main rel="conteudo principal">

         <article rel="artig inicial">

    <h1>Seja bem-vindo ao nosso novo site! </h1>
    <h2>Olá, <?php echo $_SESSION['nome'];?></h2>
    
    <a href="logout.php">Sair</a>
    

    <p> Meu nome e <strong>Brunno</strong> sou o criador do site que esta em desenvolvimento
        então algumas paginas vão esta escritas 404 erro caso precise entrar em contato comigo <a href="contato/pagina-principal.html">clique aqui</a>
               
                                           </p>
    </article>


<article rel="artigo Novidades/Noticias">
    
    
    <h2>Ultimas Novidades/Noticias/Reviews</h2>
<!----card de novidades------>
<!----esses efeitos vem do <link rel="stylesheet" href="css/cardnovidades.css">----->
    <p><div class="main">
        
        
  <ul class="cards"> <!----card noticia 01---->
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="review.png"></div> <!----tamanho imagem 500 x 300---->
        <div class="card_content">
          <h2 class="card_title">God of War PC</h2>
          <p><h6>Postagem: 11/06/2022 21:55</h6></p>   <!----data e hora postagem---->
          <p class="card_text">Confirmado:God of War saira para PC antes exclusivo da sony nosso Kratos agora estara disponivel na steam e loja de jogos para pc da microsoft. muitos sonystas ficaram revoltados com a noticia official porem ate o momento o que se sabe e que não so esse mais seus proximos lançamentos... </p> <!---texto deve ter sempre 305 carcters para fica responsivo--->
          <button class="btn card_btn">Mais informação</button>
        </div>
      </div>
      
    </li>  <!----card noticia 01---->
    
    
    
    <li class="cards_item"><!----card noticia 02---->
      <div class="card">
        <div class="card_image"><img src="review.png"></div> <!----tamanho imagem 500 x 300---->
        <div class="card_content">
          <h2 class="card_title">Top 5 Filmes brasileiros</h2>
          <p><h6>Postagem: 11/06/2022 20:17</h6></p> <!----data e hora postagem---->
          <p class="card_text">Industria brasileira possui varios filmes incriveis. que são desconhecidos ou muito conhecidos que voce precisa adiciona em sua lista de melhores filmes não e de hoje que existe filmes ruins brasileiros por falta de investimento por isso provarei para voce que existe filme bom sim como Tropa de elite...
          
                                      </p> <!---texto deve ter sempre 305 carcters para fica responsivo--->
          <button class="btn card_btn">Mais informação</button>
        </div>
      </div>
    </li>  <!----card noticia 02---->
    
    <li class="cards_item"> <!----card noticia 03---->
      <div class="card">
        <div class="card_image"><img src="review.png"></div>   <!----tamanho imagem 500 x 300---->
        <div class="card_content">
          <h2 class="card_title">Novidades na Netflix</h2>
          <p><h6>Postagem: 11/06/2022 19:19</h6></p> <!----data e hora postagem---->
          <p class="card_text">tem várias novidades chegando ao catálogo da plataforma de streaming, com filme e séries para os mais diferentes gostos.Os lançamentos da Netflix neste fim de semana (10 a 12 de junho) como  Stranger Things, que finalmente estreou sua quarta temporada na Netflix. Com... </p> <!---texto deve ter sempre 305 carcters para fica responsivo--->
          <button class="btn card_btn">Mais informação</button>
        </div>
      </div>
    </li>   <!----card noticia 03---->
    
    <li class="cards_item">  <!----card noticia 04---->
      <div class="card">
        <div class="card_image"><img src="review.png"></div>  <!----tamanho imagem 500 x 300---->
        <div class="card_content">
          <h2 class="card_title">Junji Ito anuncia anime</h2>
          <p><h6>Postagem: 11/06/2022 18:55</h6></p>
          <p class="card_text">O mestre do horror japonês Junji Ito anunciou uma parceria com a Netflix para a produção de uma série animada baseada em suas obras. Segundo o autor, ele selecionou 20 histórias para serem adaptadas pela primeira vez em Junji Ito Maniac: Japanese Tales of the Macabre... </p> <!---texto deve ter sempre 305 carcters para fica responsivo--->
          <button class="btn card_btn">Mais informação</button>
        </div>
      </div>
    </li>    <!----card noticia 04---->
    
    <li class="cards_item"> <!----card noticia 05---->
      <div class="card">
        <div class="card_image"><img src="review.png"></div> <!----tamanho imagem 500 x 300---->
        <div class="card_content">
          <h2 class="card_title">Sonic 2: O Filme</h2>
          <p><h6>Postagem: 11/06/2022 17:45</h6></p> <!----data e hora postagem---->
          <p class="card_text">Lançamento filme Sonic 2: O Dr. Robotnik retorna à procura de uma esmeralda mística que tem o poder de destruir civilizações. Para detê-lo, Sonic se une a seu antigo parceiro, Tails, e parte em uma jornada para encontrar a joia antes que ela caia em mãos erradas.dessa vez com um novo... </p>  <!---texto deve ter sempre 305 carcters para fica responsivo--->
          <button class="btn card_btn">Mais informação</button>
        </div>
      </div>
    </li> <!----card noticia 05---->
    
    <!----------------------------------------------------------------->
    
    <li class="cards_item">  <!----card noticia 06---->
      <div class="card">
        <div class="card_image"><img src="review.png"></div>  <!----tamanho imagem 500 x 300---->
        <div class="card_content">
          <h2 class="card_title">O homem do ano</h2><!---titulo card---->
           <p><h6>Postagem:  11/06/2022 21:55</h6></p>  <!----data e hora postagem---->
<p class="card_text">Review: Filme sigma brasileiro essencial chamado O Homem do ano. vamos esta analisando essa obra brasileira chamada O homem do ano. o adm desse post estava andando pelo youtube quando acabo vendo uma cena desse filme acabei ficando curioso para assistir...</p> <!---texto deve ter sempre 305 carcters para fica responsivo--->
           <a href="../review/categoria-filmes-series/2022/o-homem-do-ano.html"> <button class="btn card_btn"> Mais informação</button></a>
                 <!-----link do post--->
        </div>
      </div>
    </li>
  </ul>
</div> <!----card noticia 06---->

<!--------------------------------FIM CARDS NOTICIAS E NOVIDADES---------------------------------------------------->
 </article>
               
                                           </p>

 <article rel="Ultimas Review">
        <h2>Ultimas Review</h2>

            <p> 
                   EM BREVE
        
                        
                                                    </p>

</article>  


 <article rel="Ultimos tutoriais">

    <h2>Ultimos Tutoriais</h2>

            <p> 
                   EM BREVE
        
                        
                                                    </p>
  </article>                                                  
                       
                       
 <article rel ="Dowloands novos">                                                    
     <h2>Dowloands novos</h2>

            <p> 
                   EM BREVE
        
                        
                                                    </p>                                                   
   </article>

 <article rel="Minhas redes sociais">
                                                    
    <h2>Minhas redes sociais</h2>

            <p> 
            
<!-- adiciona icons redes sociais CODIGO E CSSS -->

<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<ul class="myulli">
  <a href="#" class="removefollowunderline"><li class="facebookicon"><i class="fa fa-facebook" id="mysvgstyle"></i>Facebook</li></a>
  <a href="https://www.youtube.com/channel/UCoAX5llcyc96aD95-xX0C4Q/about" class="removefollowunderline"><li class="youtubeicon"><i class="fa fa-youtube" id="mysvgstyle"></i></i>YouTube</li></a>
  <a href="https://www.instagram.com/pudim_win/" class="removefollowunderline"><li class="instagramicon"><i class="fa fa-instagram" id="mysvgstyle"></i>Instagram</li></a>
  <a href="#"><li class="twittericon"><i class="fa fa-twitter" id="mysvgstyle"></i>Twitter</li></a>
</ul>
<style>
    
    .myulli{
  list-style: none;
  
}
.myulli li{
  text-align: left;
  padding: 5px 5px;
  margin-left: 2px;
  margin-right: 2px;
  color: #fff;
  padding: 10px 0px 10px 0px;
  font-family: 'Righteous', cursive;
  white-space: nowrap; 
  font-size: 20px;
  margin-bottom: 10px;
  letter-spacing: 1px;
  box-shadow: 0 4px 12px 0 rgba(152, 160, 180, 10);
  cursor: pointer;
  opacity: 1;
}
.myulli li:hover #mysvgstyle{
  position: relative;
  margin-right: 70px;
  animation: svga 1s ;
}
@-webkit-keyframes svga
{
  100% {transform: rotateY(360deg);}
}
#mysvgstyle{
  margin-right: 50px;
  margin-left: 20px;
  font-size: 17px
  position: relative;
  
}
.myulli .facebookicon{
  background-color: #3a5795;
  background: linear-gradient(to left, #fff,#3a5795, #00a5e5, #3a5795);
  border-bottom: 5px solid #314A7F;
}
.myulli .twittericon{
  background-color: #00a5e5;
  background: linear-gradient(to left, #fff, #00a5e5, #3a5795, #00a5e5);
  border-bottom: 5px solid #008DC3;
}
.myulli .youtubeicon{
  background-color: #b31217;
  background: linear-gradient(to left, #fff, #b31217, #EF585C, #b31217);
  border-bottom: 5px solid #980F14;
}
.removefollowunderline{
  text-decoration: none;
}
.myulli .instagramicon{
  
  background: linear-gradient(to left, #fff, #517fa4, #34363F, #517fa4);
  border-bottom: 5px solid #456C8C;
}
    
    
</style>

<!------------FIM MEU CODIGO COM CSS DE ICONS REDES SOCIAIS ---------------------------->
 </article>

            
            
            
            
                        
                        
                        
             </p>                                             


  
    <aside>
        <h3>Informações:</h3>

        <p>Criador do site: Brunno</p>
    
      
     
        </aside>
        
    
        <p>
            Então é isso! Espero que você tenha gostado do nosso site
            <strong>https://brunno.xyz/</strong>
        </p>
    
    </main>
    <footer rel="rodape">
    <p>Site criado por  Brunno</p>
    </footer>
    </body>
    </html>