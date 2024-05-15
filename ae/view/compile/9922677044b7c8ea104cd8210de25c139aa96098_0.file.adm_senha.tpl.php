<?php
/* Smarty version 3.1.36, created on 2020-06-13 21:12:40
  from 'C:\xampp\htdocs\l-k\adm\view\adm_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee56b7846da85_84241995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9922677044b7c8ea104cd8210de25c139aa96098' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\adm\\view\\adm_senha.tpl',
      1 => 1592093558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee56b7846da85_84241995 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">
    
    <section class="row ">
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
          
            <input type="password" name="adm_senha_atual" id="adm_senha_atual" class="form-control" required>
          
           
            
            <label>Digite sua nova senha</label>
          
            <input type="password" name="adm_senha" id="adm_senha" class="form-control" required>
            <br>
           
            
            
            <button type="submit" class="btn btn-success btn-block"> Alterar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form><?php }
}
