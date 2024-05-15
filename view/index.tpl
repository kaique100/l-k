<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
      <title>{$TITULO_SITE}</title>
      <meta name="vieport" content="width=device=width">
      <!--css de reset das configuraçoes do browser-->
      <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/reset.css">
      <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/slick.css">
      <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/slick-theme.css">
      <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/lity.css">
      <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/animate.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://kit.fontawesome.com/a81368914c.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/estilo.css">
      <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/login.css">
    <!-- banner inicio -->
    <!-- fim banner -->
      
      <!--icone favicon-->
      <link rel="icon" type="image/png" sizes="32x32" href="{$GET_TEMA}/img/icon/logovinhi.png">
 <script type="text/javascript"src="{$GET_TEMA}/js/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="{$GET_TEMA}/css/menu.css">
    </head>
    
    <body>
      <!--cabeçalho do site-->
      <header id="topo-fixo" class="cabecalho">
        <!--divisao para o topo do site-->
       
        <div class="contaiiner">
            <input type="checkbox" name="" id="check">
            
             <div class="logo-container">
          <h1 >Projeto Joias!</h1>
             </div>
            <div class="nav-btnn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="{$GET_SITE_HOME}"><span> HOME</span></a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="{$PAG_SOBRE}">Sobre</a>
                            
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#">Joias<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        {foreach from=$CATEGORIAS item=C}
                    
                    <a href="{$C.cate_link}">{$C.cate_nome}</a> 
                    
                    {/foreach}
                                    </li>
                                    
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="{$PAG_CONTATO}  ">Contato</a>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">

                    <form class="search" role="search"
                            method="POST" action="">
                            
                                <div class="search__wrapper">
                                    <input type="text"
                                    name="txt_buscar" class="search__field" placeholder="  Buscar produto" required >
                                
                                
                                <!-- <button type="submit" class="fa fa-search search__icon">
                                
                              </button>--></div>
                            </form>
               </li>
                        <li class="nav-link">
                            <a class="glyphicon glyphicon-user" href="{$PAG_MINHACONTA}">
                            <i ></i></a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s ">
                            <a class="glyphicon glyphicon-shopping-cart" href="{$PAG_CARRINHO}">
                            <i ></i></a>
                        </li>
 

                    </ul>
                    
                </div>

                
                
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
        
   
      </header><!--FIM DO CABEÇALHO-->

   
      <main class="conteudo">
      

      <script type="text/javascript" src="{$GET_TEMA}/js/menu-fixo.js"></script>
     
      
  
      
     {php}

     Rotas::get_Pagina();
     //var_dump(Rotas::$pag);
     
     {/php}


     <div id="instafeed" class="is--flex is-flex-block no-padding is-fullwidth is-matrix-block">
</div>

      
   
     </main>
      <!--RODAPE-->
      <footer class="rodape">
       <div class="site">
          <img src="{$GET_TEMA}/img/icone.svg" alt="logo rodape">
        <p>Lorem Ipsum é simplesmente uma simulação de texto da ipográfia e de impressor</p>
        <ul class="iconesRedes">
            <li>
                <a class="facebook" href="https://facebook.com" target="_blank">
                    Facebook
                </a>
            </li>
            <li>
                <a class="instagram" href="https://www.instagram.com/joiasnascimento/" target="_blank">
                    Instagram
                </a>
            </li>
            <li>
                <a class="youtube" href="https://www.instagram.com/joiasnascimento/" target="_blank">
                    youtube
                </a>
            </li>
        </ul>
       </div>
       
     </footer>
     <h2 class="direitos">&copy; Todososdireitosreservadosnascimentojoias </h2>
 </body>
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript"src="{$GET_TEMA}/js/script.js"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script type="text/javascript"src="{$GET_TEMA}/js/slick.js"></script>
 <script type="text/javascript"src="{$GET_TEMA}/js/wow.js"></script>
 <script type="text/javascript"src="{$GET_TEMA}/js/lity.js"></script>
 <script type="text/javascript"src="{$GET_TEMA}/js/animacao.js"></script>
<script src="{$GET_TEMA}/js/banner.js"></script>
<script src="{$GET_TEMA}/js/novi.js"></script>
<script src="https://cdn.shopify.com/s/files/1/0683/5883/t/3/assets/instafeed.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
<script src="{$GET_TEMA}/js/instafeed.js"></script>

 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/instafeed.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>



<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script> 
<script type="text/javascript" src="js/Instafeed.js"></script> 





 </html>
 