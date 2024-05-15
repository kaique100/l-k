<?php
/* Smarty version 3.1.36, created on 2023-07-27 00:21:33
  from 'C:\xampp\htdocs\l-k\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_64c1e2bd8cd510_44140020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc5a3aa8856f5ec8572225619820514d366a10c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\l-k\\view\\produtos.tpl',
      1 => 1690428084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c1e2bd8cd510_44140020 (Smarty_Internal_Template $_smarty_tpl) {
?>
<hr>
<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
<H4 class="alert alert-danger">Nenhum produto encontrado!!</H4>
<meta http-equiv="refresh" content=1;url="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS']->value;?>
">

<?php }?>
   
  
       
    <!--  começa lista de produtos  ---->   
  <section  class="container theme-showcase" role="main">  
 
<ul class="row"  >
    
    
  
                  <div >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>     
           
        <li class="col-sm-6 col-md-4">

            <div class="thumbnail">

                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="text-center" >


                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" > 

                    <div class="caption text-center">

                        <p > <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </p> 
                        <p > R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</p>

                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="btn btn-primary" role="button">Detalhes</a> </p>


                    </div>

                </a>

            </div>


        </li>
        

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

         </div>
         
    
</ul>
</section>

 <!--  paginação inferior   -->  
     <section class="text-center row">
    <center>
    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
    </section>
    
    
    <?php }
}
