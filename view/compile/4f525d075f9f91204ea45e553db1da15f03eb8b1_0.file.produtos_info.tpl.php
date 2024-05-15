<?php
/* Smarty version 3.1.36, created on 2021-08-17 22:08:33
  from 'C:\xampp\htdocs\l-k\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_611c5d911abaf3_86582817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f525d075f9f91204ea45e553db1da15f03eb8b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\produtos_info.tpl',
      1 => 1629244838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c5d911abaf3_86582817 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

      
<div class="recipiente">
  <div class="card">
      <div class="banner imgBanner ">    
        <img  src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="" > 

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>             
          <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="" >
          
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </div>
      <div class="info">
          <div class="cardeNome">
              <div>
                  <h1 class="big"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h1>                  
              </div>
              <h3 class="small">Ref : <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h3>
              <h1>R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h1>
          </div>
          <div class="descricao " >
              <h1 class="prodTitulo">descrição do Produto</h1>
               <h3 > Acabamento: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
 </h3>
               <h3 > Acabamento: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
 </h3>
                <h3 >Tamanho: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_comprimento'];?>
  mm  </h3>
                <h3 >Peso médio: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_peso'];?>
   </h3>
                
                
          </div>     
          
        </div>
              <div class="prodPaga btnEnviar">
                  <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                <input type="hidden" name="acao" value="add">
            <button  class="btn buy">Add carrinho</button>
             </form> 
                </div>
               
                    <!--  <div class="price">
                          <h1>R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h1>
                      </div> -->
  </div>
</div>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  
 <?php }
}
