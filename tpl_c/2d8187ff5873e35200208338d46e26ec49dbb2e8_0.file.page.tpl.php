<?php
/* Smarty version 4.3.0, created on 2025-05-17 16:14:53
  from '/home/sporte2/public_html/framadate/tpl/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6828b5fd7eb363_04641429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d8187ff5873e35200208338d46e26ec49dbb2e8' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/page.tpl',
      1 => 1746650461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6828b5fd7eb363_04641429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {?>
        <title><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['title']->value);?>
 - <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['APPLICATION_NAME']->value);?>
</title>
    <?php } else { ?>
        <title><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['APPLICATION_NAME']->value);?>
</title>
    <?php }?>
    <meta name="description" content="<?php echo __('Generic','Framadate is an online service for planning an appointment or make a decision quickly and easily.');?>
" />

    <?php if ((isset($_smarty_tpl->tpl_vars['favicon']->value))) {?>
        <link rel="icon" href="<?php echo smarty_modifier_resource($_smarty_tpl->tpl_vars['favicon']->value);?>
">
    <?php }?>
    <link rel="stylesheet" href="<?php echo smarty_modifier_resource('css/bootstrap.min.css');?>
">
    <link rel="stylesheet" href="<?php echo smarty_modifier_resource('css/datepicker3.css');?>
">
    <link rel="stylesheet" href="<?php echo smarty_modifier_resource('css/style.css');?>
">
    <link rel="stylesheet" href="<?php echo smarty_modifier_resource('css/frama.css');?>
">
    <link rel="stylesheet" href="<?php echo smarty_modifier_resource('css/set.css');?>
">
    <link rel="stylesheet" href="<?php echo smarty_modifier_resource('css/print.css');?>
" media="print">
    <?php if ($_smarty_tpl->tpl_vars['provide_fork_awesome']->value) {?>
        <link rel="stylesheet" href="<?php echo smarty_modifier_resource('css/fork-awesome.min.css');?>
">
    <?php }?>
    <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource('js/jquery-3.6.0.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource('js/bootstrap.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource('js/bootstrap-datepicker.js');?>
"><?php echo '</script'; ?>
>
    <?php if ('en' != $_smarty_tpl->tpl_vars['locale']->value) {?>
        <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource(smarty_modifier_datepicker_path($_smarty_tpl->tpl_vars['locale']->value));?>
"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource('js/core.js');?>
"><?php echo '</script'; ?>
>
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19639325696828b5fd7e98b4_82496659', "header");
?>

</head>

<body>
    <?php if ($_smarty_tpl->tpl_vars['use_nav_js']->value) {?>
        <?php echo '<script'; ?>
 src="https://framasoft.org/nav/nav.js"><?php echo '</script'; ?>
>
    <?php }?>
    
    <div class="container ombre">
        <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5895770826828b5fd7ea558_61300622', 'main');
?>

        </main>
    </div> <!-- .container -->
    
    <?php if ((isset($_smarty_tpl->tpl_vars['tracking_code']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['tracking_code']->value;?>

    <?php }?>
</body>
</html><?php }
/* {block "header"} */
class Block_19639325696828b5fd7e98b4_82496659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_19639325696828b5fd7e98b4_82496659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "header"} */
/* {block 'main'} */
class Block_5895770826828b5fd7ea558_61300622 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_5895770826828b5fd7ea558_61300622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
