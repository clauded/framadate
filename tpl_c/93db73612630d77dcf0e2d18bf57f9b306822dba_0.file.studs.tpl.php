<?php
/* Smarty version 4.3.0, created on 2025-05-17 16:14:53
  from '/home/sporte2/public_html/framadate/tpl/studs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6828b5fd7dc5b2_92811531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93db73612630d77dcf0e2d18bf57f9b306822dba' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/studs.tpl',
      1 => 1746650536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:part/password_request.tpl' => 2,
    'file:part/poll_info.tpl' => 1,
    'file:part/poll_hint_admin.tpl' => 1,
    'file:part/poll_hint.tpl' => 1,
    'file:part/messages.tpl' => 1,
    'file:part/vote_table_date.tpl' => 1,
    'file:part/vote_table_classic.tpl' => 1,
  ),
),false)) {
function content_6828b5fd7dc5b2_92811531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14464809796828b5fd7c3382_02104996', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19078243676828b5fd7d1a99_97515271', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "header"} */
class Block_14464809796828b5fd7c3382_02104996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_14464809796828b5fd7c3382_02104996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource("js/Chart.min.js");?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource("js/Chart.StackedBar.js");?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource("js/app/studs.js");?>
"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo smarty_modifier_resource('css/jquery-ui.min.css');?>
">

    <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
        <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource("js/easymde.min.js");?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource("js/purify.min.js");?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource("js/mde-wrapper.js");?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource("js/app/adminstuds.js");?>
"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="<?php echo smarty_modifier_resource('css/easymde.min.css');?>
">
    <?php }?>
    
    <?php
}
}
/* {/block "header"} */
/* {block 'main'} */
class Block_19078243676828b5fd7d1a99_97515271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_19078243676828b5fd7d1a99_97515271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!$_smarty_tpl->tpl_vars['accessGranted']->value && !$_smarty_tpl->tpl_vars['resultPubliclyVisible']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:part/password_request.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>$_smarty_tpl->tpl_vars['poll']->value->active), 0, false);
?>
    <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:part/poll_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('admin'=>$_smarty_tpl->tpl_vars['admin']->value), 0, false);
?>

                <?php if ($_smarty_tpl->tpl_vars['expired']->value) {?>
            <div class="alert alert-danger">
                <p><?php echo __('studs','The poll is expired, it will be deleted soon.');?>
</p>
                <p><?php echo __('studs','Deletion date:');?>
 <?php echo smarty_modifier_html(smarty_modifier_intl_date_format($_smarty_tpl->tpl_vars['deletion_date']->value,$_smarty_tpl->tpl_vars['date_format']->value['txt_short']));?>
</p>
            </div>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:part/poll_hint_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:part/poll_hint.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>$_smarty_tpl->tpl_vars['poll']->value->active), 0, false);
?>
            <?php }?>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['accessGranted']->value && $_smarty_tpl->tpl_vars['resultPubliclyVisible']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:part/password_request.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>$_smarty_tpl->tpl_vars['poll']->value->active), 0, true);
?>
        <?php }?>

                <?php $_smarty_tpl->_subTemplateRender('file:part/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ($_smarty_tpl->tpl_vars['poll']->value->format === 'D') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:part/vote_table_date.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>$_smarty_tpl->tpl_vars['poll']->value->active), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:part/vote_table_classic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active'=>$_smarty_tpl->tpl_vars['poll']->value->active), 0, false);
?>
        <?php }?>
    <?php }
}
}
/* {/block 'main'} */
}
