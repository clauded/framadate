<?php
/* Smarty version 4.3.0, created on 2025-05-23 17:07:57
  from '/home/sporte2/public_html/framadate/tpl/admin/migration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6830ab6d392731_76848878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c7534e3b1b6a0be5537463d3fda06c0b1aaf4aa' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/admin/migration.tpl',
      1 => 1640295248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6830ab6d392731_76848878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_283967166830ab6d384a82_97404601', 'admin_main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin_page.tpl');
}
/* {block 'admin_main'} */
class Block_283967166830ab6d384a82_97404601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_main' => 
  array (
    0 => 'Block_283967166830ab6d384a82_97404601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-xs-12 col-md-4">
            <h2><?php echo __('Admin','Summary');?>
</h2>
            <?php echo __('Admin','Succeeded:');?>
 <span class="label label-warning"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['countSucceeded']->value);?>
 / <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['countTotal']->value);?>
</span>
            <br/>
            <?php echo __('Admin','Failed:');?>
 <span class="label label-danger"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['countFailed']->value);?>
 / <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['countTotal']->value);?>
</span>
            <br/>
            <?php echo __('Admin','Skipped:');?>
 <span class="label label-info"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['countSkipped']->value);?>
 / <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['countTotal']->value);?>
</span>
        </div>
        <div class="col-xs-12 col-md-4">
            <h2><?php echo __('Admin','Success');?>
</h2>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['success']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                    <li><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['s']->value);?>
</li>
                    <?php
}
if ($_smarty_tpl->tpl_vars['s']->do_else) {
?>
                    <li><?php echo __('Admin','Nothing');?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>

        <div class="col-xs-12 col-md-4">
            <h2><?php echo __('Admin','Fail');?>
</h2>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fail']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                    <li><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['f']->value);?>
</li>
                    <?php
}
if ($_smarty_tpl->tpl_vars['f']->do_else) {
?>
                    <li><?php echo __('Admin','Nothing');?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>

        <div class="col-xs-12 well well-sm">
            <?php echo __('Generic','Page generated in');?>
 <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
 <?php echo __('Generic','seconds');?>

        </div>
    </div>
<?php
}
}
/* {/block 'admin_main'} */
}
