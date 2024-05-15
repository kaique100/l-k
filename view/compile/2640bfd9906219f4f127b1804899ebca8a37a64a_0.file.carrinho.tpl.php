<?php
/* Smarty version 3.1.36, created on 2020-07-19 20:27:08
  from 'C:\xampp\htdocs\l-k\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f14d6cc9bc624_07952364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2640bfd9906219f4f127b1804899ebca8a37a64a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\carrinho.tpl',
      1 => 1595201221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f14d6cc9bc624_07952364 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php echo '<script'; ?>
>
$(document).ready(function(){    

   // validar frete
     $('#buscar_frete').click(function(){  
        
      var CEP_CLIENTE = $('#cep_frete').val();
      var PESO_FRETE = $('#peso_frete').val();
       
        if (CEP_CLIENTE.length !== 8 ) {
        alert('Digite seu CEP corretamente, 8 digitos e sem traço ou ponto');  
         $('#frete').addClass(' text-center text-danger');
         $('#frete').html('<b>Digite seu CEP corretamente, 8 digitos e sem traço ou ponto</b>');
        $('#cep_frete').focus();
      
        } else {
     
       
        $('#frete').html('<img src="view/images/dialoading.gif"> <b>Carregando...</b>');
        $('#frete').addClass(' text-center text-danger');
      
        // carrego o combo com os bairros
       
        $('#frete').load('controller/frete.php?cepcliente='+CEP_CLIENTE+'&pesofrete='+PESO_FRETE);
        
 
 } // fim do IF digitei o CEP
      
 
    }); // fim do change
    
   
} ); // fim do ready

<?php echo '</script'; ?>
>
 
 
 <!--<h3>Meu Carrinho</h3>-->

<!-- botoes e op��es de cima -->
<section class="row">
    
   <div class="linha">Meu Carrinho</div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">
         
    </div>
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table" style="width: 95%">
       
        <tr >
            <td>Item(ns)</td> 
            <td>Produto(s)</td> 
            <td>Valor R$</td> 
            <td>Qld</td> 
            <td>Sub Total R$</td> 
          <!--  <td>Remover</td> -->
            
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
            <td> 
                <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                  
                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                    <input type="hidden" name="acao" value="del">    
                    
                    <button class="btnx btnx-danger btnx-sm"> X </button> 
                </form>
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

                <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                    <input type="hidden" name="acao" value="limpar">
                    <input type="hidden" name="pro_id" value="1">

                    <button class="btn btn-danger "> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>

                </form>

            </div>

            


            <div class="col-md-2 " align="right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="btn btn-danger " title="">Comprar Mais</a>
            </div>
             <br>
             <br>
             <br>
             <br>

              <!--  bloco frete -->
           <section class="row" id="dadosfrete">
                    
               
             
               
            <div class="col-md-4"></div>
                   
                   
               <div class="col-md-4">
                   
                   <!-- campos para tratar  do  frete -->
                   <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" class="form-control " readonly>
                   
                   <input type="text" name="cep_frete" class="form-control" id="cep_frete" value="" placeholder="digite seu cep" >
                  
                   
                   <input type="hidden" name="frete_valor" id="frete_valor" value="0">
                   
                   
               </div> 
               
              
                   <div class="col-md-2">
                       <!-- botão frete -->

                       <button class="btn btn-warning btn-block" id="buscar_frete"> <i class="glyphicon glyphicon-send"></i> Calcular Frete </button>
                      
                       
                   </div>          
                                
                                
                                
          </section>
            
             <br>
           
            <div class="col-md-11 text-right">
            <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>
            
            </div>
        </section>
                    <br>
                    
                   
    
         <form name="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
            <center>
          <span  class="col-md-44" id="frete"></span>
           <!-- bot�o finalzar -->
               <button class="btn btn-geral  btn-lg" type="submit">  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>
            </center>
          
       </form>       
       
       </div>
       
                  
                        
  </section>
       <br>
       <br>
       <br>
       <br><?php }
}
