<?php
/* Smarty version 3.1.36, created on 2021-08-19 18:32:36
  from 'C:\xampp\htdocs\l-k\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_611ecdf44d9f21_44549558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e9a87e58084638476fe3986f12ac342c57d8619' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\cadastro.tpl',
      1 => 1629408752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611ecdf44d9f21_44549558 (Smarty_Internal_Template $_smarty_tpl) {
?><!---<h3>Cadastro de cliente</h3>-->
<!--- dados do cadastro -->

<hr>

  

<section class="row" id="cadastro">
    <article class="formDados">
        <div class="Containerr">
  <div class="linha"><h3>Cadastro de cliente</h3></div>
     <form name="cadcliente" id="cadcliente" method="post" action="">   
        
        <div class="col-md-4">
        <div class="input-fieldd">
         <div>   
            <input type="text" name="cli_nome" class="form-control" minlength="3" required>
            <label>Nome:</label>
            <span></span>
        </div>
         </div>
         </div>
       
        <div class="col-md-4">
        <div class="input-fieldd">
        <div> 
           
            <input type="text" name="cli_sobrenome" class="form-control"  minlength="3" required>
            <label>Sobrenome:</label> 
            <span></span>
            
        </div>
         </div>
         </div>
      
        <div class="col-md-3">
            <div class="input-fieldd">
        <div> 
            
            <input type="date" style="color: transparent; name="cli_data_nasc" class="form-control"  required>
      <label>Data Nasc:</label>
      <span></span>
            
        </div>
         </div>
         </div>
      
        <div class="col-md-2"> 
        <div class="input-fieldd">
           <div>  
            <input type="text" name="cli_rg" class="form-control" required>
            <label>RG:</label>
            <span></span>
        </div>
        </div>
         </div>
      
        
        <div class="col-md-2">
          <div class="input-fieldd">
           <div>   
            <input type="text" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required>
            <label>CPF:</label>
             <span></span>
        </div>
        </div>
         </div>
      
        
        <div class="col-md-2">
            <div class="input-fieldd">
           <div> 
            <input type="number" name="cli_ddd" class="form-control"  min="10" max="99" required>
            <label>DDD:</label>
            <span></span>
        </div>
         </div>
         </div>
      
        
        <div class="col-md-3">
        <div class="input-fieldd">
           <div> 
            
            <input type="number" name="cli_fone" class="form-control" required>
            <label>Fone:</label>
            <span></span>
         </div>
         </div>   
        </div>
        
      
        
        <div class="col-md-3">
           <div class="input-fieldd">
           <div>  
            <input type="number" name="cli_celular" class="form-control" required>
            <label>Celular:</label>
            <span></span>
        </div>
        </div>   
        </div>        
        
        
        <div class="col-md-6">
        <div class="input-fieldd">
           <div> 
            
            <input type="text" name="cli_endereco" class="form-control"  minlength="3" required>
            <label>Endereço:</label>
            <span></span>
        </div>
        </div>   
        </div> 
        
        
        <div class="col-md-2">
            <div class="input-fieldd">
           <div> 
            <input type="text" name="cli_numero" class="form-control" required>
            <label>Numero:</label>
            <span></span>
        </div>
        </div>   
        </div> 
        
        <div class="col-md-4">
        <div class="input-fieldd">
           <div> 
            
            <input type="text" name="cli_bairro" class="form-control" minlength="3" required>
            <label>Bairro:</label>
             <span></span>
        </div>
         </div>   
        </div> 
        
        <div class="col-md-4">
            <div class="input-fieldd">
           <div> 
            <input type="text" name="cli_cidade" class="form-control" minlength="3" required>
           <label>Cidade:</label>
           <span></span>
        </div>
         </div>   
        </div>
        
        
        <div class="col-md-2">
            <div class="input-fieldd">
           <div> 
           
            <input type="text" name="cli_uf" class="form-control" maxlength="2" minlength="2" required>
            <label>UF:</label>
            <span></span>
        </div>
         </div> 
        </div>
        
        
        <div class="col-md-2">
            <div class="input-fieldd">
           <div> 
           
            <input type="text" name="cli_cep" class="form-control" minlength="8" maxlength="8" required>
            <label>Cep:</label>
            <span></span>
        </div>
         </div> 
        </div>
        
        
        <div class="col-md-4">
        <div class="input-fieldd">
           <div> 
            
           <label>Email:</label>
            <input type="email" name="cli_email" class="form-control" required>
            
             <span></span>
        </div>
         </div> 
        </div>
        
        
        
        
 
    
       
    
</section>

      <br>
      <br>
      
      <section class="row" id="btngravar">
          
       <div class="col-md-4"></div>
       
       <div class="col-md-4">
           <button type="submit" class="btn btn-geral btn-block "> <i class="glyphicon glyphicon-ok"></i> Gravar </button>
               
           
       </div>
       
       <div class="col-md-4"></div>
    
    
</section>
      
      
         </form>

<?php }
}
