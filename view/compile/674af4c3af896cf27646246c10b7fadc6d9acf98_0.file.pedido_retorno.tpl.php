<?php
/* Smarty version 3.1.36, created on 2021-08-19 19:33:29
  from 'C:\xampp\htdocs\l-k\view\pedido_retorno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_611edc3945d805_15798042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '674af4c3af896cf27646246c10b7fadc6d9acf98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\pedido_retorno.tpl',
      1 => 1629244838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611edc3945d805_15798042 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center text-success"> Obrigado pelo seu pedido </h3>
<hr>
<section class="row">
    
    <div class="col-md-3"></div> 
   
    <div class="col-md-6 thumbnail">
        
        
         <h4> Informações do pagamento </h4>
            <p> <b>Código transação:</b> <?php echo $_smarty_tpl->tpl_vars['CODIGO']->value;?>
</p>
            <p> <b>Referencia:</b> <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
</p>
            <p> <b>Status do pagamento:</b> <?php echo $_smarty_tpl->tpl_vars['PAGO']->value;?>
</p>
            <p> <b>Forma pagamento: </b><?php echo $_smarty_tpl->tpl_vars['FORMA_PAG']->value;?>
</p>
            
            
         
            <form name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">  
                <button class="btn btn-success btn-block btn-lg"> Detalhes deste Pedido</button>



            </form>        

        
    </div> 
    <div class="col-md-3"></div> 
    
    
   
    
    
</section>

<?php }
}
