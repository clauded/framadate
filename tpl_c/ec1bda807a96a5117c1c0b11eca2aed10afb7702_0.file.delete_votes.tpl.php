<?php
/* Smarty version 4.3.0, created on 2025-06-25 23:57:06
  from '/home/sporte2/public_html/framadate/tpl/confirm/delete_votes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_685c8cd259f8b3_94650772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1bda807a96a5117c1c0b11eca2aed10afb7702' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/confirm/delete_votes.tpl',
      1 => 1640295248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685c8cd259f8b3_94650772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1152231663685c8cd2598ef4_91107843', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'main'} */
class Block_1152231663685c8cd2598ef4_91107843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1152231663685c8cd2598ef4_91107843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['admin_poll_id']->value,'admin'=>true),$_smarty_tpl);?>
" method="POST">
        <div class="alert alert-danger text-center">
            <h2><?php echo __('adminstuds','Confirm removal of all votes of the poll');?>
</h2>
            <p><button class="btn btn-default" type="submit" name="cancel"><?php echo __('adminstuds','Keep votes');?>
</button>
                <button type="submit" name="confirm_remove_all_votes" class="btn btn-danger"><?php echo __('adminstuds','Remove the votes');?>
</button></p>
        </div>
    </form>
<?php
}
}
/* {/block 'main'} */
}
