<?php
/* Smarty version 4.3.0, created on 2025-05-20 17:53:02
  from '/home/sporte2/public_html/framadate/tpl/part/poll_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682cc17e79d9f9_30019890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bdb01f02ba266429329f0e7f1eb36deb39a3d45' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/part/poll_info.tpl',
      1 => 1747763562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:part/description_markdown.tpl' => 1,
  ),
),false)) {
function content_682cc17e79d9f9_30019890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('admin', (($tmp = $_smarty_tpl->tpl_vars['admin']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
<form action="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['admin_poll_id']->value,'admin'=>true),$_smarty_tpl);?>
" method="POST">
<?php }?>
    <div class="jumbotron<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?> bg-danger<?php }?>">

        <div class="row">
                        <div class="col-md-5 hidden-print">
                <div class="btn-group pull-right">
                    <button onclick="print(); return false;" class="btn btn-default" title="<?php echo __('PollInfo','Print');?>
">
                        <span class="glyphicon glyphicon-print"></span>
                    </button>
                    <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                        <a href="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['SERVER_URL']->value);?>
exportcsv.php?admin=<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['admin_poll_id']->value);?>
" class="btn btn-default"><span class="glyphicon glyphicon-list-alt" title="<?php echo __('PollInfo','Export to CSV');?>
"></span></a>
                    <?php } else { ?>
                        <?php if (!$_smarty_tpl->tpl_vars['hidden']->value) {?>
                            <a href="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['SERVER_URL']->value);?>
exportcsv.php?poll=<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll_id']->value);?>
" class="btn btn-default"><span class="glyphicon glyphicon-list-alt" title="<?php echo __('PollInfo','Export to CSV');?>
"></span></a>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-trash"></span> <span class="sr-only"><?php echo __('Generic','Remove');?>
</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><button class="btn btn-link" type="submit" name="remove_all_votes"><?php echo __('PollInfo','Remove all the votes');?>
</button></li>
                            <li><button class="btn btn-link" type="submit" name="remove_all_comments"><?php echo __('PollInfo','Remove all the comments');?>
</button></li>
                            <li class="divider" role="presentation"></li>
                            <li><button class="btn btn-link" type="submit" name="delete_poll"><?php echo __('PollInfo','Remove the poll');?>
</button></li>
                        </ul>

                    <?php }?>
                </div>
            </div>
        </div>
        
        <div class="row"> 
                        <div id="title-form" class="col-md-7">
                <h3><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->title);
if ($_smarty_tpl->tpl_vars['admin']->value && !$_smarty_tpl->tpl_vars['expired']->value) {?> <button class="btn btn-link btn-sm btn-edit" title="<?php echo __('PollInfo','Edit the title');?>
"><span class="glyphicon glyphicon-pencil"></span><span class="sr-only"><?php echo __('Generic','Edit');?>
</span></button><?php }?></h3>
                <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                    <div class="hidden js-title">
                        <label class="sr-only" for="newtitle"><?php echo __('PollInfo','Title');?>
</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="newtitle" name="title" size="40" value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->title);?>
" />
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-success btn-success-save" name="update_poll_info" value="title" title="<?php echo __('PollInfo','Save the new title');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Save');?>
</span></button>
                                <button class="btn btn-link btn-cancel" title="<?php echo __('PollInfo','Cancel the title edit');?>
"><span class="glyphicon glyphicon-remove"></span><span class="sr-only"><?php echo __('Generic','Cancel');?>
</span></button>
                            </span>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
        
        <div class="row"> 
                        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                <div class="form-group col-md-4">
                    <div id="name-form">
                        <label class="control-label"><?php echo __('PollInfo','Initiator of the poll');?>
</label>
                        <p class="form-control-static"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->admin_name);
if ($_smarty_tpl->tpl_vars['admin']->value && !$_smarty_tpl->tpl_vars['expired']->value) {?> <button class="btn btn-link btn-sm btn-edit" title="<?php echo __('PollInfo','Edit the name');?>
"><span class="glyphicon glyphicon-pencil"></span><span class="sr-only"><?php echo __('Generic','Edit');?>
</span></button><?php }?></p>
                        <div class="hidden js-name">
                            <label class="sr-only" for="newname"><?php echo __('PollInfo','Initiator of the poll');?>
</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="newname" name="name" size="40" maxlength="32" value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->admin_name);?>
" />
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-success btn-success-save" name="update_poll_info" value="name" title="<?php echo __('PollInfo','Save the new name');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Save');?>
</span></button>
                                    <button class="btn btn-link btn-cancel" title="<?php echo __('PollInfo','Cancel the name edit');?>
"><span class="glyphicon glyphicon-remove"></span><span class="sr-only"><?php echo __('Generic','Cancel');?>
</span></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="email-form">
                        <p><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->admin_mail);?>
<button class="btn btn-link btn-sm btn-edit" title="<?php echo __('PollInfo','Edit the email adress');?>
"><span class="glyphicon glyphicon-pencil"></span><span class="sr-only"><?php echo __('Generic','Edit');?>
</span></button></p>
                        <div class="hidden js-email">
                            <label class="sr-only" for="admin_mail"><?php echo __('PollInfo','Email');?>
</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="admin_mail" name="admin_mail" size="40" value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->admin_mail);?>
" />
                                <span class="input-group-btn">
                                    <button type="submit" name="update_poll_info" value="admin_mail" class="btn btn-success btn-success-save" title="<?php echo __('PollInfo','Save the email address');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Save');?>
</span></button>
                                    <button class="btn btn-link btn-cancel" title="<?php echo __('PollInfo','Cancel the email address edit');?>
"><span class="glyphicon glyphicon-remove"></span><span class="sr-only"><?php echo __('Generic','Cancel');?>
</span></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['admin']->value || preg_match('/[^ \r\n]/',$_smarty_tpl->tpl_vars['poll']->value->description)) {?>
                <div class="form-group col-md-8" id="description-form">
                                        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                        <label class="control-label"><?php echo __('Generic','Description');?>
 <button class="btn btn-link btn-sm btn-edit" title="<?php echo __('PollInfo','Edit the description');?>
"><span class="glyphicon glyphicon-pencil"></span><span class="sr-only"><?php echo __('Generic','Edit');?>
</span></button></label>
                    <?php }?>
                    <div class="form-control-static well poll-description"><?php echo smarty_modifier_markdown($_smarty_tpl->tpl_vars['poll']->value->description,false,false);?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                        <div class="hidden js-desc">
                            <label class="sr-only" for="newdescription"><?php echo __('Generic','Description');?>
</label>
                            <?php $_smarty_tpl->_subTemplateRender('file:part/description_markdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <textarea class="form-control" id="newdescription" name="description" rows="2" cols="40"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->description);?>
</textarea>
                            <button type="submit" id="btn-new-desc" name="update_poll_info" value="description" class="btn btn-sm btn-success btn-success-save" title="<?php echo __('PollInfo','Save the description');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Save');?>
</span></button>
                            <button class="btn btn-default btn-sm btn-cancel" title="<?php echo __('PollInfo','Cancel the description edit');?>
"><span class="glyphicon glyphicon-remove"></span><span class="sr-only"><?php echo __('Generic','Cancel');?>
</span></button>
                        </div>
                    <?php }?>
                                        <div class="form-control-static well poll-description">
                        <p>
                            <i class="glyphicon glyphicon-ok btn-xs" style="color:#849551;"></i><?php echo __('PollInfo','Choose an option');?>
<br class="mobile-break">
                            <i class="glyphicon glyphicon-remove btn-xs" style="color:#AD220F;"></i><?php echo __('PollInfo','Remove an option');?>
<br class="mobile-break">
                            <i class="glyphicon glyphicon-save btn-xs" style="color:#0366D6"></i><?php echo __('PollInfo','Save your vote');?>
<br class="mobile-break">
                            <i class="glyphicon glyphicon-edit btn-xs" style=""></i><?php echo __('PollInfo','Edit a vote');?>

                        </p>
                    </div>
                </div>
            <?php }?>
        </div>
        
        <div class="row">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                        <div class="row">
                                <div class="form-group form-group <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>col-md-4<?php } else { ?>col-md-6<?php }?>">
                    <label for="public-link"><a class="public-link" href="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['poll_id']->value),$_smarty_tpl);?>
"><?php echo __('PollInfo','Public link of the poll');?>
</a></label>
                    <input class="form-control" id="public-link" type="text" readonly="readonly" value="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['poll_id']->value),$_smarty_tpl);?>
" onclick="select();"/>
                </div>
                                <div class="form-group col-md-4">
                    <label for="admin-link"><a class="admin-link" href="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['admin_poll_id']->value,'admin'=>true),$_smarty_tpl);?>
"><?php echo __('PollInfo','Admin link of the poll');?>
</a></label>
                    <input class="form-control" id="admin-link" type="text" readonly="readonly" value="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['admin_poll_id']->value,'admin'=>true),$_smarty_tpl);?>
" onclick="select();"/>
                </div>
                                <div id="expiration-form" class="form-group col-md-4">
                    <label class="control-label"><?php echo __('PollInfo','Expiration date');?>
</label>
                    <p><?php echo smarty_modifier_html(smarty_modifier_intl_date_format($_smarty_tpl->tpl_vars['poll']->value->end_date,$_smarty_tpl->tpl_vars['date_format']->value['txt_date']));?>
 <button class="btn btn-link btn-sm btn-edit" title="<?php echo __('PollInfo','Edit the expiration date');?>
"><span class="glyphicon glyphicon-pencil"></span><span class="sr-only"><?php echo __('Generic','Edit');?>
</span></button></p>
                    <div class="hidden js-expiration">
                        <label class="sr-only" for="newexpirationdate"><?php echo __('PollInfo','Expiration date');?>
</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="newexpirationdate" name="expiration_date" size="40" value="<?php echo smarty_modifier_html(smarty_modifier_intl_date_format($_smarty_tpl->tpl_vars['poll']->value->end_date,$_smarty_tpl->tpl_vars['date_format']->value['txt_date']));?>
" />
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-success btn-success-save" name="update_poll_info" value="expiration_date" title="<?php echo __('PollInfo','Save the new expiration date');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Save');?>
</span></button>
                                <button class="btn btn-link btn-cancel" title="<?php echo __('PollInfo','Cancel the expiration date edit');?>
"><span class="glyphicon glyphicon-remove"></span><span class="sr-only"><?php echo __('Generic','Cancel');?>
</span></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="row">
                <div class="col-md-4">
                                        <div id="password-form">
                        <?php if (!empty($_smarty_tpl->tpl_vars['poll']->value->password_hash) && !$_smarty_tpl->tpl_vars['poll']->value->results_publicly_visible) {?>
                            <?php $_smarty_tpl->_assignInScope('password_text', __('PollInfo','Password protected'));?>
                        <?php } elseif (!empty($_smarty_tpl->tpl_vars['poll']->value->password_hash) && $_smarty_tpl->tpl_vars['poll']->value->results_publicly_visible) {?>
                            <?php $_smarty_tpl->_assignInScope('password_text', __('PollInfo','Votes protected by password'));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('password_text', __('PollInfo','No password'));?>
                        <?php }?>
                        <p class=""><span class="glyphicon glyphicon-lock"> </span> <?php echo $_smarty_tpl->tpl_vars['password_text']->value;?>
<button class="btn btn-link btn-sm btn-edit" title="<?php echo __('PollInfo','Edit the poll rules');?>
"><span class="glyphicon glyphicon-pencil"></span><span class="sr-only"><?php echo __('Generic','Edit');?>
</span></button></p>
                        <div class="hidden js-password">
                            <button class="btn btn-link btn-cancel" title="<?php echo __('PollInfo','Cancel the rules edit');?>
"><span class="glyphicon glyphicon-remove"></span><span class="sr-only"><?php echo __('Generic','Cancel');?>
</span></button>
                            <?php if (!empty($_smarty_tpl->tpl_vars['poll']->value->password_hash)) {?>
                                <div class="input-group">
                                    <input type="checkbox" id="removePassword" name="removePassword"/>
                                    <label for="removePassword"><?php echo __('PollInfo','Remove password');?>
</label>
                                    <button type="submit" name="update_poll_info" value="removePassword" class="btn btn-success btn-success-save hidden" title="<?php echo __('PollInfo','Save the new rules');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Remove password.');?>
</span></button>
                                </div>
                            <?php }?>
                            <div id="password_information">
                                <div class="input-group">
                                    <input type="checkbox" id="resultsPubliclyVisible" name="resultsPubliclyVisible" <?php if ($_smarty_tpl->tpl_vars['poll']->value->results_publicly_visible && $_smarty_tpl->tpl_vars['poll']->value->hidden == false && (!empty($_smarty_tpl->tpl_vars['poll']->value->password_hash))) {?>checked="checked" <?php } elseif (($_smarty_tpl->tpl_vars['poll']->value->hidden == true || empty($_smarty_tpl->tpl_vars['poll']->value->password_hash))) {?> disabled="disabled"<?php }?>/>
                                    <label for="resultsPubliclyVisible"><?php echo __('PollInfo','Only votes are protected');?>
</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="password" name="password"/>
                                    <span class="input-group-btn">
                                        <button type="submit" name="update_poll_info" value="password" class="btn btn-success btn-success-save" title="<?php echo __('PollInfo','Save the new rules');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Save');?>
</span></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                                        <div id="poll-hidden-form">
                        <?php if ($_smarty_tpl->tpl_vars['poll']->value->hidden) {?>
                            <?php $_smarty_tpl->_assignInScope('hidden_icon', "glyphicon-eye-close");?>
                            <?php $_smarty_tpl->_assignInScope('hidden_text', __('PollInfo','Results are hidden'));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('hidden_icon', "glyphicon-eye-open");?>
                            <?php $_smarty_tpl->_assignInScope('hidden_text', __('PollInfo','Results are visible'));?>
                        <?php }?>
                        <p class=""><span class="glyphicon <?php echo $_smarty_tpl->tpl_vars['hidden_icon']->value;?>
"> </span> <?php echo $_smarty_tpl->tpl_vars['hidden_text']->value;?>
<button class="btn btn-link btn-sm btn-edit" title="<?php echo __('PollInfo','Edit the poll rules');?>
"><span class="glyphicon glyphicon-pencil"></span><span class="sr-only"><?php echo __('Generic','Edit');?>
</span></button></p>
                        <div class="hidden js-poll-hidden">
                            <div class="input-group">
                                <input type="checkbox" id="hidden" name="hidden" <?php if ($_smarty_tpl->tpl_vars['poll']->value->hidden) {?>checked="checked"<?php }?>/>
                                <label for="hidden"><?php echo __('PollInfo','Results are hidden');?>
</label>
                                <span class="input-group-btn">
                                    <button type="submit" name="update_poll_info" value="hidden" class="btn btn-success btn-success-save" title="<?php echo __('PollInfo','Save the new rules');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Save');?>
</span></button>
                                    <button class="btn btn-link btn-cancel" title="<?php echo __('PollInfo','Cancel the rules edit');?>
"><span class="glyphicon glyphicon-remove"></span><span class="sr-only"><?php echo __('Generic','Cancel');?>
</span></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" >
                                        <div id="poll-rules-form">
                        <?php if ($_smarty_tpl->tpl_vars['poll']->value->active) {?>
                            <?php if ($_smarty_tpl->tpl_vars['poll']->value->editable) {?>
                                <?php if ($_smarty_tpl->tpl_vars['poll']->value->editable == constant("Framadate\Editable::EDITABLE_BY_ALL")) {?>
                                    <?php $_smarty_tpl->_assignInScope('rule_id', 2);?>
                                    <?php $_smarty_tpl->_assignInScope('rule_txt', __('Step 1','All voters can modify any vote'));?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('rule_id', 3);?>
                                    <?php $_smarty_tpl->_assignInScope('rule_txt', __('Step 1','Voters can modify their vote themselves'));?>
                                <?php }?>
                                <?php $_smarty_tpl->_assignInScope('rule_icon', '<span class="glyphicon glyphicon-edit"></span>');?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('rule_id', 1);?>
                                <?php $_smarty_tpl->_assignInScope('rule_icon', '<span class="glyphicon glyphicon-check"></span>');?>
                                <?php $_smarty_tpl->_assignInScope('rule_txt', __('Step 1','Votes cannot be modified'));?>
                            <?php }?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('rule_id', 0);?>
                            <?php $_smarty_tpl->_assignInScope('rule_icon', '<span class="glyphicon glyphicon-lock"></span>');?>
                            <?php $_smarty_tpl->_assignInScope('rule_txt', __('PollInfo','Votes and comments are locked'));?>
                        <?php }?>
                        <p class=""><?php echo $_smarty_tpl->tpl_vars['rule_icon']->value;?>
 <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['rule_txt']->value);?>
 <button class="btn btn-link btn-sm btn-edit" title="<?php echo __('PollInfo','Edit the poll rules');?>
"><span class="glyphicon glyphicon-pencil"></span><span class="sr-only"><?php echo __('Generic','Edit');?>
</span></button></p>
                        <div class="hidden js-poll-rules">
                            <label class="sr-only" for="rules"><?php echo __('PollInfo','Poll rules');?>
</label>
                            <div class="input-group">
                                <select class="form-control" id="rules" name="rules">
                                    <option value="0"<?php if ($_smarty_tpl->tpl_vars['rule_id']->value == 0) {?> selected="selected"<?php }?>><?php echo __('PollInfo','Votes and comments are locked');?>
</option>
                                    <option value="1"<?php if ($_smarty_tpl->tpl_vars['rule_id']->value == 1) {?> selected="selected"<?php }?>><?php echo __('Step 1','Votes cannot be modified');?>
</option>
                                    <option value="3"<?php if ($_smarty_tpl->tpl_vars['rule_id']->value == 3) {?> selected="selected"<?php }?>><?php echo __('Step 1','Voters can modify their vote themselves');?>
</option>
                                    <option value="2"<?php if ($_smarty_tpl->tpl_vars['rule_id']->value == 2) {?> selected="selected"<?php }?>><?php echo __('Step 1','All voters can modify any vote');?>
</option>
                                </select>
                                <span class="input-group-btn">
                                    <button type="submit" name="update_poll_info" value="rules" class="btn btn-success btn-success-save" title="<?php echo __('PollInfo','Save the new rules');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Save');?>
</span></button>
                                    <button class="btn btn-link btn-cancel" title="<?php echo __('PollInfo','Cancel the rules edit');?>
"><span class="glyphicon glyphicon-remove"></span><span class="sr-only"><?php echo __('Generic','Cancel');?>
</span></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                        <div class="row">
                                <div id="valuemax-form" class="form-group col-md-4">
                    <label class="control-label"><?php echo __('Step 1','ValueMax');?>
</label>
                    <p><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->ValueMax);?>
 <button class="btn btn-link btn-sm btn-edit" title="<?php echo __('PollInfo','Edit value');?>
"><span class="glyphicon glyphicon-pencil"></span><span class="sr-only"><?php echo __('Generic','Edit');?>
</span></button></p>
                    <div class="hidden js-valuemax">
                        <label class="sr-only" for="ValueMax"><?php echo __('Step 1','ValueMax');?>
</label>
                        <div class="input-group">
                            <input type="number" min="0" class="form-control" id="ValueMax" name="ValueMax" size="4" value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->ValueMax);?>
" />
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-success btn-success-save" name="update_poll_info" value="ValueMax" title="<?php echo __('PollInfo','Save value');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Save');?>
</span></button>
                                <button class="btn btn-link btn-cancel" title="<?php echo __('PollInfo','Cancel the change');?>
"><span class="glyphicon glyphicon-remove"></span><span class="sr-only"><?php echo __('Generic','Cancel');?>
</span></button>
                            </span>
                        </div>
                    </div>
                </div>
                                <div id="value_max-form" class="form-group col-md-4">
                    <label class="control-label"><?php echo __('Step 1','Value_Max');?>
</label>
                    <p><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->value_max);?>
 <button class="btn btn-link btn-sm btn-edit" title="<?php echo __('PollInfo','Edit value');?>
"><span class="glyphicon glyphicon-pencil"></span><span class="sr-only"><?php echo __('Generic','Edit');?>
</span></button></p>
                    <div class="hidden js-value_max">
                        <label class="sr-only" for="value_max"><?php echo __('Step 1','Value_Max');?>
</label>
                        <div class="input-group">
                            <input type="number" min="0" class="form-control" id="value_max" name="value_max" size="4" value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->value_max);?>
" />
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-success btn-success-save" name="update_poll_info" value="value_max" title="<?php echo __('PollInfo','Save value');?>
"><span class="glyphicon glyphicon-save"></span><span class="sr-only"><?php echo __('Generic','Save');?>
</span></button>
                                <button class="btn btn-link btn-cancel" title="<?php echo __('PollInfo','Cancel the change');?>
"><span class="glyphicon glyphicon-remove"></span><span class="sr-only"><?php echo __('Generic','Cancel');?>
</span></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>

    </div>
<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
</form>
<?php }
}
}
