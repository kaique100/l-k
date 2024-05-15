<?php
/* Smarty version 3.1.36, created on 2021-11-16 23:40:01
  from 'C:\xampp\htdocs\l-k\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61946b81d787e8_15942188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be6656f22a09a9f9dca294ec8da69075fcb892f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\index.tpl',
      1 => 1637116800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61946b81d787e8_15942188 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
      <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
      <meta name="vieport" content="width=device=width">
      <!--css de reset das configuraçoes do browser-->
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/reset.css">
      <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/slick.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/slick-theme.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/lity.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/animate.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a81368914c.js"><?php echo '</script'; ?>
>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/estilo.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/login.css">
    <!-- banner inicio -->
    <!-- fim banner -->
      
      <!--icone favicon-->
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/icon/logovinhi.png">
 <?php echo '<script'; ?>
 type="text/javascript"src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/menu.css">
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
                            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><span> HOME</span></a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SOBRE']->value;?>
">Sobre</a>
                            
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#">Joias<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a> 
                    
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </li>
                                    
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
  ">Contato</a>
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
                            <a class="glyphicon glyphicon-user" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">
                            <i ></i></a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s ">
                            <a class="glyphicon glyphicon-shopping-cart" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">
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
      

      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/menu-fixo.js"><?php echo '</script'; ?>
>
     
      
  
      
     <?php 

     Rotas::get_Pagina();
     //var_dump(Rotas::$pag);
     
     ?>


     <div id="instafeed" class="is--flex is-flex-block no-padding is-fullwidth is-matrix-block">
</div>

      
   
     </main>
      <!--RODAPE-->
      <footer class="rodape">
       <div class="site">
          <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/icone.svg" alt="logo rodape">
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
<?php echo '<script'; ?>
 type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript"src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/script.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript"src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/slick.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript"src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/wow.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript"src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/lity.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript"src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/animacao.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/banner.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/novi.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.shopify.com/s/files/1/0683/5883/t/3/assets/instafeed.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/instafeed.js"><?php echo '</script'; ?>
>

 <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"><?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/instafeed.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/app.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="js/Instafeed.js"><?php echo '</script'; ?>
> 





 </html>
 <?php }
}
