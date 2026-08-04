<?php
/* Smarty version 4.3.0, created on 2025-05-19 15:44:05
  from '/home/sporte2/public_html/framadate/tpl/admin/admin_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682b51c53d0d13_51545555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86502296238a0ab066c1a678ad7028b3d1d7db67' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/admin/admin_page.tpl',
      1 => 1640295248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682b51c53d0d13_51545555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1571410924682b51c53cc531_46136204', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'admin_main'} */
class Block_821156986682b51c53d0622_40746467 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'admin_main'} */
/* {block 'main'} */
class Block_1571410924682b51c53cc531_46136204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1571410924682b51c53cc531_46136204',
  ),
  'admin_main' => 
  array (
    0 => 'Block_821156986682b51c53d0622_40746467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-xs-12 lead">
            <a class="btn btn-default" href="<?php echo smarty_modifier_resource('admin');?>
"><?php echo __('Admin','Back to administration');?>
</a>
        </div>
    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_821156986682b51c53d0622_40746467', 'admin_main', $this->tplIndex);
?>

<?php
}
}
/* {/block 'main'} */
}
