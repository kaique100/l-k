<?php
/* Smarty version 3.1.36, created on 2020-07-19 22:07:07
  from 'C:\xampp\htdocs\l-k\ae\view\adm_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f14ee3b752b58_28873441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc14b3ada8453f80148c353af2b81806f9234fae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\ae\\view\\adm_clientes.tpl',
      1 => 1595207224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f14ee3b752b58_28873441 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Gerenciar Clientes </h4>
<hr>

<!--- listando clientes ---->
<section class="row">
    
    <center>
    <table class="table table-bordered">
    
        
        <tr class="text-success bg-success">
            <td>Pedidos</td>
            <td>Nome</td>
          <!--  <td>Email </td>
            <td>Fone </td>-->
            <td>Data cad</td>
            <td>Cadastro</td>
            
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
        
        <tr>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
 " class="btn btn-info">Ver</a> </td>
            <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_sobrenome'];?>
</td>
           <!-- <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_fone'];?>
</td>-->
            <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_data_cad'];?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" class="btn btn-info"> Ver </a>
                
            </td>
            
        </tr>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
    </center >
    
</section><?php }
}
