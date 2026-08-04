<?php
/* Smarty version 4.3.0, created on 2025-05-23 17:07:49
  from '/home/sporte2/public_html/framadate/tpl/admin/purge.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6830ab656642c3_20160466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7598e9dd1e7aa0698b50775ace0851fd93cbfe29' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/admin/purge.tpl',
      1 => 1640295248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6830ab656642c3_20160466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1982557246830ab6565aae4_31479578', 'admin_main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin_page.tpl');
}
/* {block 'admin_main'} */
class Block_1982557246830ab6565aae4_31479578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_main' => 
  array (
    0 => 'Block_1982557246830ab6565aae4_31479578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
        <div class="alert alert-dismissible alert-info" role="alert"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['message']->value);?>
<button type="button" class="close" data-dismiss="alert" aria-label="<?php echo __('Generic','Close');?>
"><span aria-hidden="true">&times;</span></button></div>
    <?php }?>
    <form method="POST">
        <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['crsf']->value;?>
"/>
        <div class="text-center">
            <button type="submit" name="action" value="purge" class="btn btn-danger"><?php echo __('Admin','Purge the polls');?>
 <span class="glyphicon glyphicon-trash"></span></button>
        </div>
    </form>
<?php
}
}
/* {/block 'admin_main'} */
}
