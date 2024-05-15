<?php
/* Smarty version 3.1.36, created on 2020-06-03 13:28:46
  from 'C:\xampp\htdocs\l-k\view\cliente_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed7896e4ba608_95609268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '414f72301a3cca6265be4849b671fc1d0dff941f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\cliente_senha.tpl',
      1 => 1591183725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed7896e4ba608_95609268 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">
    
    <section class="row">
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
          
            <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>
          
           
            
            <label>Digite sua nova senha</label>
          
            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>
           
            
            
            <button type="submit" class="btn btn-woringin btn-block"> Alterar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form>

<?php }
}
