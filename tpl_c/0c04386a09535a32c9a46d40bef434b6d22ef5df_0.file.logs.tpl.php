<?php
/* Smarty version 4.3.0, created on 2025-05-23 17:07:19
  from '/home/sporte2/public_html/framadate/tpl/admin/logs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6830ab476b4d17_74186676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c04386a09535a32c9a46d40bef434b6d22ef5df' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/admin/logs.tpl',
      1 => 1640295248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6830ab476b4d17_74186676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17398797576830ab476af822_78838510', 'admin_main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin_page.tpl');
}
/* {block 'admin_main'} */
class Block_17398797576830ab476af822_78838510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_main' => 
  array (
    0 => 'Block_17398797576830ab476af822_78838510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<pre><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['logs']->value);?>
</pre>
<?php
}
}
/* {/block 'admin_main'} */
}
