<?php
/* Smarty version 3.1.36, created on 2021-08-17 22:08:58
  from 'C:\xampp\htdocs\l-k\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_611c5daa5b7c82_78594337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109f68a126a4830d7072615be7888dc81ddfc577' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\login.tpl',
      1 => 1629244838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c5daa5b7c82_78594337 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
  

<?php } else { ?>


  <article class="imgContato">
    <div class="imgCon">

      <!--  <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/sobre.jpg" alt="ouvire"> -->
      
    </div>

        <article class="formCon">
        <div class="Container">
            <form  name="cliente_login" method="post" class="form" action="" >
                <div class="input-field">
                    <div>
                    <input type="email" name="txt_email" id="loginemail" required> 
                        <label>Digite seu email</label>
                        <span></span>
                    </div>
                </div>               

                <div class="input-field">
                    <div>
                    <input type="password" name="txt_senha" id="loginemail" required>
                        <label>Digite sua senha</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-field">
                
                
                    <div class="botaoEnviar">
                    <input type="submit" value="Login" class="btnc">
                    
                     <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="btnc">Cadastrar</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
" class="btnc"> Esqueci a Senha</a>
                    
                      
                    </div>
                   
                </div>        
                   <div class="botaoEnviar">
             
                
           
                   </div>
                   
            </form>

        

    </article>
    </article>
    
        
     
       
     </div>
</section>
<?php }
}
}
