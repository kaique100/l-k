<?php
/* Smarty version 3.1.36, created on 2020-07-19 14:01:29
  from 'C:\xampp\htdocs\l-k\ae\view\adm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f147c6978f2e5_20874475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d38c4fa98a8b9ab8bfb203ea869b2b547c056b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\ae\\view\\adm_login.tpl',
      1 => 1595178085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f147c6978f2e5_20874475 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
    <head>
        <title>Area restrita </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
          <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/estilo.css">
        <!-- meu aquivo pessoal de CSS-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css"/>
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/icon/logovinhi.png">

     
    
    </head>
    <body style="background-color: #591e29">
        
        <section class="container">
            <article class="formCon">
            
            <section class="row">
                
                <div class="col-md-4"></div>    
               
                <div class="col-md-4 thumbnail" id="bloco_login_adm">
                 
                    <h4 class="text-center"> Área restrita </h4>
               
                     
                        
                    <form name="login" method="post" action="">


 <div class="input-field">
                    <div>
                     <input type="email" name="txt_email" class="form-control" required autocomplete="off">
                        <label>Email:</label>
                        <span></span>
                    </div>
                </div>  

<div class="input-field">
                    <div>
                    <input type="password" name="txt_senha" class="form-control" required>
                         <label>Senha:</label>
                        <span></span>
                    </div>
                </div>
                        
                        
                       
                        
                        
                       
                       
                        
                        <br>
                        <br>
                        <button class="btnss btnss-success btnss-block btnss-lg" name="txt_logar" value="txt_logar"> Entrar </button>
                        <br>
                        
                          
                        
                    </form>
                    
                    
                    <!-- botão senha recovery -->
                    <br>
                    <center><button class="btnw btnw-warning" data-toggle="collapse" data-target="#recovery"> Esqueci a senha </button>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
" class="btni btni-info"> Ir para Loja </a>
                    </center>
                    
                    <div class="alert alert-danger collapse" id="recovery">
                    
                        <form name="recovery" method="post" action="">
                            <label>Digite o email do administrador </label>
                            <input type="email" name="txt_email" class="form-control" required>
                            <button class="btns btns-success" name="recovery" value="recovery">Solicitar senha</button>
                            
                        </form> 
                        
                    </div>
                    
                </div>    
              
                <div class="col-md-4"></div>    
                
                
            </section>
            
            
            
        </section>
        </article>
        
    </body>
</html>

<?php }
}
