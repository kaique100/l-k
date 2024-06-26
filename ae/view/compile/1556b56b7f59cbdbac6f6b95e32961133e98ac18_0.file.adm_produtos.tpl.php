<?php
/* Smarty version 3.1.36, created on 2020-06-04 18:39:04
  from 'C:\xampp\htdocs\l-k\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed969f8e690e2_33011674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1556b56b7f59cbdbac6f6b95e32961133e98ac18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\adm\\view\\adm_produtos.tpl',
      1 => 1591306733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed969f8e690e2_33011674 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Gerenciar Produtos</h4>
<hr>
<section class="row ">
    
    
 <div class="col-md-4"> </div>

 

    <div class="col-md-4"> </div>

    <div class="col-md-4 text-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_NOVO']->value;?>
" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> Novo Produto</a>

    </div>




</section>
<br>

<!--     exibe mensagem caso nao encontre produtos -->
 <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
    <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>  
 <?php }?>

        
    <!--  começa lista de produtos  ---->   
  <section id="produtos" class="row">  
 

      
      <table class="table table-bordered">  
      
          <tr class="bg-success text-success">
             
              <td></td> 
              <td>Produto</td> 
              <td>Categoria</td> 
              <td>Preço</td> 
              <td>      </td>      
              <td>      </td>      
          
          </tr>
          
          
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    
    <tr>
        
        
        <td>  <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_p'];?>
" alt="" > </td>
        <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</td>
        <td class="text-right">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
        <td>

            <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_EDITAR']->value;?>
">
                <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                <button class="btn btn-success"> <i class="glyphicon glyphicon-pencil"></i> </button>
   
            </form>  
            
        </td>

        <td>

            <form name="proimg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_IMG']->value;?>
">
                <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                <input type="hidden" name="pro_nome" id="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                <button class="btn btn-info"> <i class="glyphicon glyphicon-picture"></i> </button>
   
            </form>  
            
        </td>


    </tr>
    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
      </table>
    
    </section>
    
    
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
    </section>


<?php }
}
