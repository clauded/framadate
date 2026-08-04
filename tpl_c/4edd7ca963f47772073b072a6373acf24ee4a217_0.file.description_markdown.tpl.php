<?php
/* Smarty version 4.3.0, created on 2025-05-17 16:14:53
  from '/home/sporte2/public_html/framadate/tpl/part/description_markdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6828b5fd87aa59_23985664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4edd7ca963f47772073b072a6373acf24ee4a217' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/part/description_markdown.tpl',
      1 => 1747155097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6828b5fd87aa59_23985664 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="btn-group" role="group" aria-label="...">
    <button type="button" id="rich-editor-button" class="btn btn-default btn-xs<?php if ($_smarty_tpl->tpl_vars['default_to_marldown_editor']->value) {?> active<?php }?>"><?php echo __('PollInfo','Rich editor');?>
</button>
    <button type="button" id="simple-editor-button" class="btn btn-default btn-xs<?php if (!$_smarty_tpl->tpl_vars['default_to_marldown_editor']->value) {?> active<?php }?>"><?php echo __('PollInfo','Simple editor');?>
</button>
</div>

<a href="" data-toggle="modal" data-target="#markdown_modal"><i class="glyphicon glyphicon-info-sign"></i></a><!-- TODO Add accessibility -->

<div id="markdown_modal" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><?php echo __('Generic','Markdown');?>
</h4>
            </div>
            <div class="modal-body">
                    <p>
                        <?php echo __('Step 1','To make the description more attractive, you can use the Markdown format.');?>

                    </p>
                    <p>
                        <?php echo __('Step 1','You can enable or disable the editor at will.');?>

                    </p>
                    <p>
                        <?php echo __('Step 1','More informations here:');?>

                        <a href="http://<?php echo smarty_modifier_locale_2_lang($_smarty_tpl->tpl_vars['locale']->value);?>
.wikipedia.org/wiki/Markdown">http://<?php echo smarty_modifier_locale_2_lang($_smarty_tpl->tpl_vars['locale']->value);?>
.wikipedia.org/wiki/Markdown</a>
                    </p>
            </div>
        </div>
    </div>
</div>
<?php }
}
