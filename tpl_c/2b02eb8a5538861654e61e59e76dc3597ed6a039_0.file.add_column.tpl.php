<?php
/* Smarty version 4.3.0, created on 2025-05-22 23:24:06
  from '/home/sporte2/public_html/framadate/tpl/add_column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fb216175467_60462732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b02eb8a5538861654e61e59e76dc3597ed6a039' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/add_column.tpl',
      1 => 1640295248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:part/messages.tpl' => 1,
  ),
),false)) {
function content_682fb216175467_60462732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_813088794682fb216166062_12965665', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_588642437682fb21616b6a8_36296966', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "header"} */
class Block_813088794682fb216166062_12965665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_813088794682fb216166062_12965665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        window.date_formats = {
            DATE: '<?php echo __('Date','DATE');?>
',
            DATEPICKER: '<?php echo __('Date','datepicker');?>
'
        };
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource('js/app/framadatepicker.js');?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "header"} */
/* {block 'main'} */
class Block_588642437682fb21616b6a8_36296966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_588642437682fb21616b6a8_36296966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['admin_poll_id']->value,'admin'=>true),$_smarty_tpl);?>
" method="POST">
        <div class="alert alert-info text-center">
            <h2><?php echo __('adminstuds','Column\'s adding');?>
</h2>

                        <?php $_smarty_tpl->_subTemplateRender('file:part/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['format']->value === 'D') {?>
                <div class="form-group">
                    <label for="newdate" class="col-md-4"><?php echo __('Generic','Day');?>
</label>
                    <div class="col-md-8">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input type="text" id="newdate" data-date-format="<?php echo __('Date','dd/mm/yyyy');?>
" aria-describedby="dateformat" name="newdate" class="form-control" placeholder="<?php echo __('Date','dd/mm/yyyy');?>
" />
                        </div>
                        <span id="dateformat" class="sr-only">(<?php echo __('Date','dd/mm/yyyy');?>
)</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="newmoment" class="col-md-4"><?php echo __('Generic','Time');?>
</label>
                    <div class="col-md-8">
                        <input type="text" id="newmoment" name="newmoment" class="form-control" />
                    </div>
                </div>
            <?php } else { ?>
                <div class="form-group">
                    <label for="choice" class="col-md-4"><?php echo __('Generic','Choice');?>
</label>
                    <div class="col-md-8">
                        <input type="text" id="choice" name="choice" class="form-control" />
                    </div>
                </div>
            <?php }?>
            <div class="form-group">
                <a href="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['admin_poll_id']->value,'admin'=>true),$_smarty_tpl);?>
" class="btn btn-default" name="back"><?php echo __('adminstuds','Back to the poll');?>
</a>
                <button type="submit" name="confirm_add_column" class="btn btn-success"><?php echo __('adminstuds','Add a column');?>
</button>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block 'main'} */
}
