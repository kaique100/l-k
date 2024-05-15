<?php
/* Smarty version 3.1.36, created on 2021-08-17 22:08:52
  from 'C:\xampp\htdocs\l-k\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_611c5da4a49757_26403101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7290f9735cc6da17750b953af2f9eb39b39ab409' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\pedido_confirmar.tpl',
      1 => 1629244838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c5da4a49757_26403101 (Smarty_Internal_Template $_smarty_tpl) {
?> <!--<h3>Confirmar Pedido</h3>-->
  <div class="linha">Confirmar Pedido</div>
<hr>
<!-- botoes e op��es de cima -->
<section class="row">
    
   
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">
         
    </div>
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table " style="width: 95%">
       
        <tr >
            <td>Item(ns)</td> 
            <td>Produto(s)</td> 
            <td>Valor R$</td> 
            <td>Qld</td> 
            <td>Sub Total R$</td> 
            
            
        </tr>
     
        
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        
        <tr>
            
            <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"> </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>
            
            
            
        </tr>
        
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <!-- BOTÃO DE COMPRA MAIS -->
             
            
            <!-- bot�o de limpar-->
            <div class="col-md-5" align="right">

               

            </div>
            <div class="col-md-2 " align="right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-danger " title="">Voltar para o Carrinho</a>
            </div>
            <hr>
             <br>
             <br>
             <br>
            <div class="col-md-11 text-right">
            <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>
             <h4>
               Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

            </h4>
            <h4>
               Total com frete : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>

            </h4>
            
            </div>
        </section>
                    <br>
                    <hr>
                   
    
         <form name="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
           <center>
           <!-- bot�o finalzar -->
               <button class="btn btn-geral  btn-lg" type="submit">  <i class="glyphicon glyphicon-ok"></i> Finalizar Pedido </button>
           </center>
       </form>  
       
       </div>
       
                   
                        
  </section>
       <br>
       <br>
       <br>
       <br><?php }
}
