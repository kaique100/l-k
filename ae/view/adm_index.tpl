<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
      <title>{$TITULO_SITE}</title>
      <meta name="vieport" content="width=device=width">
      <!--css de reset das configuraçoes do browser-->
      <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/reset.css">
      <link href="{$GET_TEMA}/css/bootstrap.min.css" rel="stylesheet">
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
      <header id="topo-fixo">
        <div class="contaiiner">
            <input type="checkbox" name="" id="check">
            
             <div class="logo-container">
          <h1 >Projeto Joias!</h1>
             </div>
            <div class="nav-btnn">
                <div class="nav-links">
          <button class="fechar-menu"></button> 

            <ul> <!--lista de marcadores-->
            <li class="nav-link" style="--i: .6s">
              <a href="{$GET_SITE_ADM}">
                <span> HOME</span>
              </a>
            </li><!--Fim item da lista-->
            
            <li class="nav-link" style="--i: .6s">
                <a href="{$PAG_CATEGORIAS}">
                  CATEGORIAS
                </a>
              </li>            
                   
           <li>
             <li class="nav-link" style="--i: 1.1s">
                            <a href="#">Joias<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        {foreach from=$CATEGORIAS item=C}
                    
                    <a href="{$C.cate_link_adm}">{$C.cate_nome}</a> 
                    
                    {/foreach}
                                    </li>
                                    
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
      
            </li>
            <li class="nav-link" style="--i: .6s">
                <a href="{$PAG_ADM_PRODUTOS}">
                  PRODUTOS               
                </a>
              </li>            
            <li class="nav-link" style="--i: .6s">
                <a href="{$PAG_ADM_CLIENTE}">
                  CLIENTES                
                  
                </a>
              </li>
            <li class="nav-link" style="--i: .6s">
                <a href="{$PAG_ADM_PEDIDOS}">
               PEDIDOS
                  
                </a>
              </li>
            <li class="nav-link" style="--i: .6s">
            
                        
                                <!-- {if $LOGADO == true}            
                                  Olá: {$USER}<li> <a href="{$PAG_LOGOFF}" class="btn btn-geral"><i class="glyphicon glyphicon-log-out"></i> Sair </a> </li>
                                 {/if} -->
                    
              </li>
               
            </li>
            
</ul>
</div>

                
                
            
        </div>
        <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>

      </header><!--FIM DO CABEÇALHO-->

      <script type="text/javascript" src="{$GET_TEMA}/js/menu-fixo.js"></script>
     
      
                                             <h4 class="text-center text-danger"> Olá Administrador <b>{$USER}</b>, seja bem vindo! O que deseja fazer agora?</h4> 
                                      <p class="text-center ">Último Login: {$DATA} ás {$HORA}</p>

<section class="row">
    
    <div class="text-center">
        
        <a href="{$PAG_CATEGORIAS}" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Categorias</a>
        
        <a href="{$PAG_ADM_PRODUTOS}" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Produtos</a>
        
        <a href="{$PAG_ADM_CLIENTE}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Clientes </a>
        <a href="{$PAG_ADM_PEDIDOS}" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Pedidos </a>
        <a href="{$PAG_SENHA}" class="btn btn-warning"><i class="glyphicon glyphicon-asterisk"></i> Alterar Senha </a>
        <a href="{$PAG_LOGOFF}" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
     
        
        
        
    </div>
    
    
    
    
    
</section>
      
     {php}

     Rotas::get_Pagina();
     //var_dump(Rotas::$pag);
     
     {/php}
      
      

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

  

 </html>
