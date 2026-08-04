<?php
/* Smarty version 4.3.0, created on 2025-06-21 01:23:16
  from '/home/sporte2/public_html/framadate/tpl/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68560984a3e353_99382265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b8de605db1f2b2fd6877b51d1cbbc159a687df' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/maintenance.tpl',
      1 => 1640295248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68560984a3e353_99382265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86938918568560984a36665_57400152', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'main'} */
class Block_86938918568560984a36665_57400152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_86938918568560984a36665_57400152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="alert alert-warning text-center">
        <h2><?php echo __('Maintenance','The application');?>
 <?php echo $_smarty_tpl->tpl_vars['APPLICATION_NAME']->value;?>
 <?php echo __('Maintenance','is currently under maintenance.');?>
</h2>
        <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
            <pre><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</pre>
        <?php }?>
        <p><?php echo __('Maintenance','Thank you for your understanding.');?>
</p>
    </div>
<?php
}
}
/* {/block 'main'} */
}
