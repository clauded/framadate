<?php
/* Smarty version 4.3.0, created on 2025-06-10 00:40:24
  from '/home/sporte2/public_html/framadate/tpl/part/messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68477ef8abeca7_70925065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10698b619e18e292bd45c80339e67a12e65c3342' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/part/messages.tpl',
      1 => 1749515891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68477ef8abeca7_70925065 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="message-container">
    <?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {?>
        <div class="alert alert-dismissible alert-<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['message']->value->type);?>
 hidden-print" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="<?php echo __('Generic','Close');?>
"><span aria-hidden="true">&times;</span></button>
            <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['message']->value->message);?>

            <?php if ($_smarty_tpl->tpl_vars['message']->value->link != null) {?>
                <div class="input-group input-group-sm">
                        <span class="input-group-btn">
                            <a <?php if ($_smarty_tpl->tpl_vars['message']->value->linkTitle != null) {?> title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value->linkTitle, ENT_QUOTES, 'UTF-8', true);?>
" <?php }?> class="btn btn-default btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['message']->value->link;?>
">
                                <?php if ($_smarty_tpl->tpl_vars['message']->value->linkIcon != null) {?><i class="glyphicon glyphicon-pencil"></i><?php if ($_smarty_tpl->tpl_vars['message']->value->linkTitle != null) {?><span class="sr-only"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value->linkTitle, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }
}?>
                            </a>
                        </span>
                    <input type="text" aria-hidden="true" value="<?php echo $_smarty_tpl->tpl_vars['message']->value->link;?>
" class="form-control" readonly="readonly" >
                </div>
                <?php if ($_smarty_tpl->tpl_vars['message']->value->includeTemplate != null) {?>
                    <?php echo $_smarty_tpl->tpl_vars['message']->value->includeTemplate;?>

                <?php }?>
            <?php }?>
        </div>
    <?php }?>
</div>
<div id="nameErrorMessage" class="hidden alert alert-dismissible alert-danger hidden-print" role="alert">
    <?php echo __('Error','The name is invalid.');?>

    <button type="button" class="close" data-dismiss="alert" aria-label="<?php echo __('Generic','Close');?>
"><span aria-hidden="true">&times;</span></button>
</div>
<div id="choiceErrorMessage" class="hidden alert alert-dismissible alert-danger hidden-print" role="alert">
    <?php echo __('Error','Make at least a choice.');?>

    <button type="button" class="close" data-dismiss="alert" aria-label="<?php echo __('Generic','Close');?>
"><span aria-hidden="true">&times;</span></button>
</div>
<div id="genericErrorTemplate" class="hidden alert alert-dismissible alert-danger hidden-print" role="alert">
    <span class="contents"></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="<?php echo __('Generic','Close');?>
"><span aria-hidden="true">&times;</span></button>
</div>
<div id="genericUnclosableSuccessTemplate" class="hidden alert alert-success hidden-print" role="alert">
    <span class="contents"></span>
</div><?php }
}
