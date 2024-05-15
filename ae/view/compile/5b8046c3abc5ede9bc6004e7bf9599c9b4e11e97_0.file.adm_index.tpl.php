<?php
/* Smarty version 3.1.36, created on 2020-07-19 14:59:46
  from 'C:\xampp\htdocs\l-k\ae\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f148a1255c733_62183563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b8046c3abc5ede9bc6004e7bf9599c9b4e11e97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\ae\\view\\adm_index.tpl',
      1 => 1595181578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f148a1255c733_62183563 (Smarty_Internal_Template $_smarty_tpl) {
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
/css/bootstrap.min.css" rel="stylesheet">
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
              <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
">
                <span> HOME</span>
              </a>
            </li><!--Fim item da lista-->
            
            <li class="nav-link" style="--i: .6s">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
">
                  CATEGORIAS
                </a>
              </li>            
                   
           <li>
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
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link_adm'];?>
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
      
            </li>
            <li class="nav-link" style="--i: .6s">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
">
                  PRODUTOS               
                </a>
              </li>            
            <li class="nav-link" style="--i: .6s">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
">
                  CLIENTES                
                  
                </a>
              </li>
            <li class="nav-link" style="--i: .6s">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
">
               PEDIDOS
                  
                </a>
              </li>
            <li class="nav-link" style="--i: .6s">
            
                        
                                <!-- <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>            
                                  Olá: <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
<li> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-geral"><i class="glyphicon glyphicon-log-out"></i> Sair </a> </li>
                                 <?php }?> -->
                    
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

      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/menu-fixo.js"><?php echo '</script'; ?>
>
     
      
                                             <h4 class="text-center text-danger"> Olá Administrador <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 
                                      <p class="text-center ">Último Login: <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
 ás <?php echo $_smarty_tpl->tpl_vars['HORA']->value;?>
</p>

<section class="row">
    
    <div class="text-center">
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Categorias</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Produtos</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Clientes </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Pedidos </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SENHA']->value;?>
" class="btn btn-warning"><i class="glyphicon glyphicon-asterisk"></i> Alterar Senha </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
     
        
        
        
    </div>
    
    
    
    
    
</section>
      
     <?php 

     Rotas::get_Pagina();
     //var_dump(Rotas::$pag);
     
     ?>
      
      

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

  

 </html>
<?php }
}
