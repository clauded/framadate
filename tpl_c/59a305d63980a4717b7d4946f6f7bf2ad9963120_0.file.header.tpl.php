<?php
/* Smarty version 4.3.0, created on 2025-05-17 16:14:53
  from '/home/sporte2/public_html/framadate/tpl/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6828b5fd7f8a39_76715313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59a305d63980a4717b7d4946f6f7bf2ad9963120' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/header.tpl',
      1 => 1746649549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6828b5fd7f8a39_76715313 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="clearfix">
    <?php if (count($_smarty_tpl->tpl_vars['langs']->value) > 1) {?>
        <form method="post" class="hidden-print">
            <div class="input-group input-group-sm pull-right col-xs-12 col-sm-2">
                <select name="lang" class="form-control" title="<?php echo __('Language selector','Select the language');?>
" >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'lang_value', false, 'lang_key');
$_smarty_tpl->tpl_vars['lang_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang_key']->value => $_smarty_tpl->tpl_vars['lang_value']->value) {
$_smarty_tpl->tpl_vars['lang_value']->do_else = false;
?>
                    <option lang="<?php echo substr($_smarty_tpl->tpl_vars['lang_key']->value,0,2);?>
" <?php if (substr($_smarty_tpl->tpl_vars['lang_key']->value,0,2) == $_smarty_tpl->tpl_vars['locale']->value) {?>selected<?php }?> value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['lang_key']->value);?>
"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['lang_value']->value);?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-sm" title="<?php echo __('Language selector','Change the language');?>
">OK</button>
                </span>
            </div>
        </form>
    <?php }?>

        <h1 class="row col-xs-12 col-sm-10">
            <a href="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['SERVER_URL']->value);?>
" title="<?php echo __('Generic','Home');?>
 - <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['APPLICATION_NAME']->value);?>
" >
                <img src="<?php echo smarty_modifier_resource($_smarty_tpl->tpl_vars['TITLE_IMAGE']->value);?>
" alt="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['APPLICATION_NAME']->value);?>
" class="img-responsive"/>
            </a>
        </h1>
        <?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {?><h2 class="lead col-xs-12"><i><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['title']->value);?>
</i></h2><?php }?>
        <div class="trait col-xs-12" role="presentation"></div>
</header>

<main>
<?php }
}
