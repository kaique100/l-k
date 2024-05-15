<?php
/* Smarty version 3.1.36, created on 2021-08-17 21:47:07
  from 'C:\xampp\htdocs\l-k\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_611c588bab4629_55375402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c7c6283dd746a65ae0578e388d9bf916e7b4bed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\contato.tpl',
      1 => 1629244838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c588bab4629_55375402 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="imgContato">

   <h4>ENTRAR EM CONTATO</h4>
    <article class="formCon">
        <div class="Containercont">
            <form   class="form" action="envio" >
                <div class="input-field">
                    <div>
                    <input type="text" name="nome"  required="required">
                        <label>Digite seu nome Completo</label>
                        <span></span>
                    </div>
                </div>
                

                <div class="input-field">
                    <div>
                    <input type="email" name="email"  required="required">
                        <label> Escreva seu email</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-field">
                
                    <div>
                    
                    <textarea name="mens"  cols="5" rows="3" required="required"></textarea>
                        <label>Faça suas perguntas!</label>
                        <span></span>
                    </div>
                </div>
                
                <div class="botaoEnviar">
                    
                        <input type="submit" value="ENVIAR" class="btnc">
                    </div>
                </div>        
            </form>
        
 <div class="imgCon">
       <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/sobre.jpg" alt="ouvire">   
                <div class="box-shadow-demoo">
                <h4>Telefone</h4>
                  <p>(11)99999-9999</p>
                  <hr>
<h4>Endereço</h4>
                  <p>Rua Direita, 32 - 6º Andar
Centro – São Paulo/SP</p>
                </div>
                 
        
    </div>
    </article>
    
</article>
    <section class="galeriainsta">
      <div id="instafeed" class="instafeed"></div>
      </section>
  
 </body>


 </html><?php }
}
