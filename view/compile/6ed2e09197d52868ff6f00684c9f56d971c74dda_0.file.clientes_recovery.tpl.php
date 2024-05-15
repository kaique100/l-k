<?php
/* Smarty version 3.1.36, created on 2020-07-05 21:35:40
  from 'C:\xampp\htdocs\l-k\view\clientes_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f0271dc3aef93_09396852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ed2e09197d52868ff6f00684c9f56d971c74dda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\clientes_recovery.tpl',
      1 => 1593995734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0271dc3aef93_09396852 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
<h4 class="text-center">Digite seu email cadatrado para receber uma nova senha </h4>
<hr>

<form name="recuperarsenha" method="post" action="">
    
    <section  class="row">
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
        <div class="input-fieldd">
                    <div>
            
          
            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <label>Digite seu email cadastrado</label>
            <span></span>
                    </div>
                </div>
            <br>
            <button type="submit" class="btn btn-warning btn-block"> Recuperar </button>
        </div>
       
        <div class="col-md-4">           
        </div>     
    </section>   
</form>
</section><?php }
}
