<?php
/* Smarty version 4.3.0, created on 2025-05-17 16:17:08
  from '/home/sporte2/public_html/framadate/tpl/part/poll_hint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6828b684765026_91880494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3f0479d22ce3fafe320eb4127ff32778f6d7e71' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/part/poll_hint.tpl',
      1 => 1746651240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6828b684765026_91880494 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="hint_modal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><?php echo __('Generic','Caption');?>
</h4>
            </div>
            <div class="modal-body">
                <?php if ($_smarty_tpl->tpl_vars['active']->value) {?>
                    <div class="alert alert-info">
                        <p><?php echo __('studs','If you want to vote in this poll, you have to give your name, choose the values that fit best for you and validate with the plus button at the end of the line.');?>
</p>
                        <p aria-hidden="true">
                            <b><?php echo __('Generic','Legend:');?>
</b>
                            <span class="glyphicon glyphicon-ok"></span>
                            = <?php echo __('Generic','Yes');?>
, <b>(<span class="glyphicon glyphicon-ok"></span>)</b>
                            = <?php echo __('Generic','Ifneedbe');?>
, <span class="glyphicon glyphicon-ban-circle"></span>
                            = <?php echo __('Generic','No');?>

                        </p>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-danger">
                        <p><?php echo __('studs','POLL_LOCKED_WARNING');?>
</p>
                        <p aria-hidden="true">
                            <b><?php echo __('Generic','Legend:');?>
</b> 
                            <span class="glyphicon glyphicon-ok"></span>
                            = <?php echo __('Generic','Yes');?>
, <b>(<span class="glyphicon glyphicon-ok"></span>)</b>
                            = <?php echo __('Generic','Ifneedbe');?>
, <span class="glyphicon glyphicon-ban-circle"></span>
                            = <?php echo __('Generic','No');?>

                        </p>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div><?php }
}
