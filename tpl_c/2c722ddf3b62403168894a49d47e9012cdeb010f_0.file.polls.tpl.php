<?php
/* Smarty version 4.3.0, created on 2025-05-19 15:44:09
  from '/home/sporte2/public_html/framadate/tpl/admin/polls.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682b51c94ca431_65270690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c722ddf3b62403168894a49d47e9012cdeb010f' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/admin/polls.tpl',
      1 => 1640295248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682b51c94ca431_65270690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1655913267682b51c949d4b0_77195045', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1249662119682b51c949fc20_03663067', 'admin_main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin_page.tpl');
}
/* {block "header"} */
class Block_1655913267682b51c949d4b0_77195045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1655913267682b51c949d4b0_77195045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo smarty_modifier_resource("js/app/admin/polls.js");?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "header"} */
/* {block 'admin_main'} */
class Block_1249662119682b51c949fc20_03663067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_main' => 
  array (
    0 => 'Block_1249662119682b51c949fc20_03663067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sporte2/public_html/framadate/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <div class="panel panel-default" id="poll_search">
        <div class="panel-heading"><?php echo __('Generic','Search');?>
</div>
        <div class="panel-body" style="display: none;">
            <form method="GET">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="poll" class="control-label"><?php echo __('Admin','Poll ID');?>
</label>
                            <input type="text" name="poll" id="poll" class="form-control"
                                   value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['search']->value['poll']);?>
"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title" class="control-label"><?php echo __('Admin','Title');?>
</label>
                            <input type="text" name="title" id="title" class="form-control"
                                   value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['search']->value['title']);?>
"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="control-label"><?php echo __('Admin','Author');?>
</label>
                            <input type="text" name="name" id="name" class="form-control"
                                   value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['search']->value['name']);?>
"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mail" class="control-label"><?php echo __('Admin','Email');?>
</label>
                            <input type="text" name="mail" id="mail" class="form-control"
                                   value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['search']->value['mail']);?>
"/>
                        </div>
                    </div>
                </div>
                <input type="submit" value="<?php echo __('Generic','Search');?>
" class="btn btn-default"/>
            </form>
        </div>
    </div>

    <form method="POST">
        <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['crsf']->value;?>
"/>
        <?php if ($_smarty_tpl->tpl_vars['poll_to_delete']->value) {?>
            <div class="alert alert-warning text-center">
                <h3><?php echo __('adminstuds','Confirm removal of the poll');?>
 "<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll_to_delete']->value->id);?>
"</h3>

                <p>
                    <button class="btn btn-default" type="submit" value="1"
                            name="annullesuppression"><?php echo __('adminstuds','Keep the poll');?>
</button>
                    <button type="submit" name="delete_confirm" value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll_to_delete']->value->id);?>
"
                            class="btn btn-danger"><?php echo __('adminstuds','Delete the poll');?>
</button>
                </p>
            </div>
        <?php }?>
        <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['crsf']->value;?>
"/>

        <div class="panel panel-default">
            <div class="panel-heading">
                <?php if ($_smarty_tpl->tpl_vars['count']->value == $_smarty_tpl->tpl_vars['total']->value) {
echo $_smarty_tpl->tpl_vars['count']->value;
} else {
echo $_smarty_tpl->tpl_vars['count']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['total']->value;
}?> <?php echo __('Admin','polls in the database at this time');?>

            </div>
            <div class="table-of-polls panel">
                <table class="table table-bordered table-polls">
                    <tr align="center">
                        <th scope="col"></th>
                        <th scope="col"><?php echo __('Admin','Title');?>
</th>
                        <th scope="col"><?php echo __('Admin','Author');?>
</th>
                        <th scope="col"><?php echo __('Admin','Email');?>
</th>
                        <th scope="col"><?php echo __('Admin','Expiration date');?>
</th>
                        <th scope="col"><?php echo __('Admin','Votes');?>
</th>
                        <th scope="col"><?php echo __('Admin','Poll ID');?>
</th>
                        <th scope="col" colspan="3"><?php echo __('Admin','Actions');?>
</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['polls']->value, 'poll');
$_smarty_tpl->tpl_vars['poll']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['poll']->value) {
$_smarty_tpl->tpl_vars['poll']->do_else = false;
?>
                        <tr align="center">
                            <td class="cell-format">
                                <?php if ($_smarty_tpl->tpl_vars['poll']->value->format === 'D') {?>
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"
                                          title="<?php echo __('Generic','Date');?>
"></span>
                                    <span class="sr-only"><?php echo __('Generic','Date');?>
</span>
                                <?php } else { ?>
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"
                                          title="<?php echo __('Generic','Classic');?>
"></span>
                                    <span class="sr-only"><?php echo __('Generic','Classic');?>
</span>
                                <?php }?>
                            </td>
                            <td><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->title);?>
</td>
                            <td><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->admin_name);?>
</td>
                            <td><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->admin_mail);?>
</td>

                            <?php if (strtotime($_smarty_tpl->tpl_vars['poll']->value->end_date) > time()) {?>
                                <td><?php echo date('d/m/y',strtotime($_smarty_tpl->tpl_vars['poll']->value->end_date));?>
</td>
                            <?php } else { ?>
                                <td><span class="text-danger"><?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['poll']->value->end_date),'d/m/Y');?>
</span></td>
                            <?php }?>
                            <td><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->votes);?>
</td>
                            <td><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->id);?>
</td>
                            <td><a href="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['poll']->value->id),$_smarty_tpl);?>
" class="btn btn-link"
                                   title="<?php echo __('Admin','See the poll');?>
"><span
                                            class="glyphicon glyphicon-eye-open"></span><span
                                            class="sr-only"><?php echo __('Admin','See the poll');?>
</span></a></td>
                            <td><a href="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['poll']->value->admin_id,'admin'=>true),$_smarty_tpl);?>
" class="btn btn-link"
                                   title="<?php echo __('Admin','Change the poll');?>
"><span
                                            class="glyphicon glyphicon-pencil"></span><span
                                            class="sr-only"><?php echo __('Admin','Change the poll');?>
</span></a></td>
                            <td>
                                <button type="submit" name="delete_poll" value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->id);?>
" class="btn btn-link"
                                        title="<?php echo __('Admin','Deleted the poll');?>
"><span
                                            class="glyphicon glyphicon-trash text-danger"></span><span
                                            class="sr-only"><?php echo __('Admin','Deleted the poll');?>
</span>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>

            <div class="panel-heading">
                <?php echo __('Admin','Pages:');?>

                <?php
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['p']->step = 1;$_smarty_tpl->tpl_vars['p']->total = (int) ceil(($_smarty_tpl->tpl_vars['p']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['p']->step));
if ($_smarty_tpl->tpl_vars['p']->total > 0) {
for ($_smarty_tpl->tpl_vars['p']->value = 1, $_smarty_tpl->tpl_vars['p']->iteration = 1;$_smarty_tpl->tpl_vars['p']->iteration <= $_smarty_tpl->tpl_vars['p']->total;$_smarty_tpl->tpl_vars['p']->value += $_smarty_tpl->tpl_vars['p']->step, $_smarty_tpl->tpl_vars['p']->iteration++) {
$_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->iteration === 1;$_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration === $_smarty_tpl->tpl_vars['p']->total;?>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value === $_smarty_tpl->tpl_vars['page']->value) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_URL']->value;?>
admin/polls.php?page=<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_query']->value;?>
" class="btn btn-danger"
                           disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SERVER_URL']->value;?>
admin/polls.php?page=<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['search_query']->value;?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
                    <?php }?>
                <?php }
}
?>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block 'admin_main'} */
}
