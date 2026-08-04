<?php
/* Smarty version 4.3.0, created on 2025-05-17 16:14:53
  from '/home/sporte2/public_html/framadate/tpl/part/poll_hint_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6828b5fd888827_29739499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9cf6f732ed1b7c32262d27a2169fda6b74d3711' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/part/poll_hint_admin.tpl',
      1 => 1747155035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6828b5fd888827_29739499 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="alert alert-info">
                    <p><?php echo __('adminstuds','As poll administrator, you can change all the lines of this poll with this button');?>

                        <span class="glyphicon glyphicon-pencil"></span><span
                            class="sr-only"><?php echo __('Generic','Edit');?>
</span>,
                        <?php echo __('adminstuds','remove a column or a line with');?>
 <span
                            class="glyphicon glyphicon-remove text-danger"></span><span
                            class="sr-only"><?php echo __('Generic','Remove');?>
</span>
                        <?php echo __('adminstuds','and add a new column with');?>
 <span
                            class="glyphicon glyphicon-plus text-success"></span><span
                            class="sr-only"><?php echo __('adminstuds','Add a column');?>
</span>.
                    </p>
                    <p><?php echo __('adminstuds','Finally, you can change the informations of this poll like the title, the comments or your email address.');?>
</p>
                    <p aria-hidden="true"><strong><?php echo __('Generic','Legend:');?>
</strong> <span
                        class="glyphicon glyphicon-ok"></span> = <?php echo __('Generic','Yes');?>
, <b>(<span
                        class="glyphicon glyphicon-ok"></span>)</b> = <?php echo __('Generic','Ifneedbe');?>
, <span
                        class="glyphicon glyphicon-ban-circle"></span> = <?php echo __('Generic','No');?>

                    </p>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }
}
