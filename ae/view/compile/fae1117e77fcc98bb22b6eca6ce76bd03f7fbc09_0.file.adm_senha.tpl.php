<?php
/* Smarty version 3.1.36, created on 2020-07-18 20:54:19
  from 'C:\xampp\htdocs\l-k\ae\view\adm_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f138babf2ddd0_97018717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fae1117e77fcc98bb22b6eca6ce76bd03f7fbc09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\ae\\view\\adm_senha.tpl',
      1 => 1593925117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f138babf2ddd0_97018717 (Smarty_Internal_Template $_smarty_tpl) {
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
