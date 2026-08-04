<?php
/* Smarty version 4.3.0, created on 2025-05-19 15:44:05
  from '/home/sporte2/public_html/framadate/tpl/admin/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682b51c53c66f9_46094414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5169eb5e24751d2253343281ec75eb5062ffaff8' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/admin/index.tpl',
      1 => 1640295248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682b51c53c66f9_46094414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_982309553682b51c53bed23_09211403', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin_page.tpl');
}
/* {block 'main'} */
class Block_982309553682b51c53bed23_09211403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_982309553682b51c53bed23_09211403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="col-md-6 col-xs-12">
        <a href="./polls.php"><h2><?php echo __('Admin','Polls');?>
</h2></a>
    </div>
    <div class="col-md-6 col-xs-12">
        <a href="./migration.php"><h2><?php echo __('Admin','Migration');?>
</h2></a>
    </div>
    <div class="col-md-6 col-xs-12">
        <a href="./purge.php"><h2><?php echo __('Admin','Purge');?>
</h2></a>
    </div>
    <div class="col-md-6 col-xs-12">
        <a href="./check.php"><h2><?php echo __('Check','Installation checking');?>
</h2></a>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['logsAreReadable']->value) {?>
        <div class="col-md-6 col-xs-12">
            <a href="./logs.php"><h2><?php echo __('Admin','Logs');?>
</h2></a>
        </div>
    <?php }?>
</div>
<?php
}
}
/* {/block 'main'} */
}
