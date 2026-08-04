<?php
/* Smarty version 4.3.0, created on 2025-06-08 19:56:56
  from '/home/sporte2/public_html/framadate/tpl/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6845eb084aeca9_66785614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7744a8127eacb18be42d43075a77443091744d15' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/error.tpl',
      1 => 1641006159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6845eb084aeca9_66785614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17821724976845eb084a9ed7_37850254', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'main'} */
class Block_17821724976845eb084a9ed7_37850254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_17821724976845eb084a9ed7_37850254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="alert alert-warning text-center">
        <h2><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['error']->value);?>
</h2>
    </div>
<?php
}
}
/* {/block 'main'} */
}
