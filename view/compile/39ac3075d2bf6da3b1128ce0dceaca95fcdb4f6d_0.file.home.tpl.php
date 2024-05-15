<?php
/* Smarty version 3.1.36, created on 2021-08-17 21:02:45
  from 'C:\xampp\htdocs\l-k\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_611c4e25acfaa1_13192385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39ac3075d2bf6da3b1128ce0dceaca95fcdb4f6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\home.tpl',
      1 => 1629244838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c4e25acfaa1_13192385 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="banner"><!--BANNER-->
      
        
        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/1.png"alt="banner Site Joias">
        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/b7.png"alt="banner Site Joias">
        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/4.png"alt="banner Site Joias">
        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/5.png"alt="banner Site Joias">
        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/6.png"alt="banner Site Joias">
</section>
     <?php 
     include_once Rotas::get_Pasta_Controller() . '/produtos.php';
      ?>  
      </section><!--fim banner-->
       <!--Instagram-->
       <div class="sobreinsta">
       <p> Compartilhe seu momento e faça um comentario em nosso instagram #nascimentojoias</p>
       
       </div>
      <section class="galeriainsta">
      <div id="instafeed" class="instafeed"></div>
      </section><?php }
}
