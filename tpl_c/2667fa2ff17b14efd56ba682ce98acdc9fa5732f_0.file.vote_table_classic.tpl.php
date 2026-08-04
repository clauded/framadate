<?php
/* Smarty version 4.3.0, created on 2026-06-09 01:23:23
  from '/home/sporte2/public_html/framadate/tpl/part/vote_table_classic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6a276b0b91d0c5_68360912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2667fa2ff17b14efd56ba682ce98acdc9fa5732f' => 
    array (
      0 => '/home/sporte2/public_html/framadate/tpl/part/vote_table_classic.tpl',
      1 => 1780967864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:part/scroll_left_right.tpl' => 1,
  ),
),false)) {
function content_6a276b0b91d0c5_68360912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sporte2/public_html/framadate/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
if (!is_array($_smarty_tpl->tpl_vars['best_choices']->value) || empty($_smarty_tpl->tpl_vars['best_choices']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('best_choices', array(0));
}?>

<!--
<h5 id="top" style="text-align:left; margin-top:0px; margin-bottom:0px; margin-left:5px;">
    <a href="#bottom">
        <button class="btn btn-default btn-sm btn-cancel" title="<?php echo __('Generic','Down');?>
">
            <i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i><span class="sr-only"><?php echo __('Generic','Down');?>
</span>
        </button>
    </a>
</h5>
-->

<?php $_smarty_tpl->_subTemplateRender('file:part/scroll_left_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="tableContainer" class="tableContainer">
    <form action="<?php if ($_smarty_tpl->tpl_vars['admin']->value) {
echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['admin_poll_id']->value,'admin'=>true),$_smarty_tpl);
} else {
echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['poll_id']->value),$_smarty_tpl);
}?>" method="POST" id="poll_form">
        <input type="hidden" name="control" value="<?php echo $_smarty_tpl->tpl_vars['slots_hash']->value;?>
"/>
        <table class="results">
            <caption class="sr-only"><?php echo __('Poll results','Votes of the poll');?>
 <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['poll']->value->title);?>
</caption>
            <thead>
                        <?php if ($_smarty_tpl->tpl_vars['admin']->value && !$_smarty_tpl->tpl_vars['expired']->value) {?>
                <tr class="hidden-print">
                    <th role="presentation"></th>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot', false, 'id');
$_smarty_tpl->tpl_vars['slot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->do_else = false;
?>
                        <td headers="C<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                            <a href="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['admin_poll_id']->value,'admin'=>true,'action'=>'delete_column','action_value'=>$_smarty_tpl->tpl_vars['slot']->value->title),$_smarty_tpl);?>
"
                               data-remove-confirmation="<?php echo __('adminstuds','Confirm removal of the column.');?>
"
                               class="btn btn-link btn-sm remove-column" title="<?php echo __('adminstuds','Remove the column');?>
 <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['slot']->value->title);?>
">
                                <i class="glyphicon glyphicon-remove text-danger"></i><span class="sr-only"><?php echo __('Generic','Remove');?>
</span>
                            </a>
                        </td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <td>
                        <a href="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['admin_poll_id']->value,'admin'=>true,'action'=>'add_column'),$_smarty_tpl);?>
" class="btn btn-link btn-sm" title="<?php echo __('adminstuds','Add a column');?>
">
                            <i class="glyphicon glyphicon-plus text-success"></i><span class="sr-only"><?php echo __('Poll results','Add a column');?>
</span>
                        </a>
                    </td>
                </tr>
            <?php }?>
                <tr>
                    <th role="presentation"></th>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot', false, 'id');
$_smarty_tpl->tpl_vars['slot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->do_else = false;
?>
                        <th class="bg-info" id="C<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo smarty_modifier_markdown($_smarty_tpl->tpl_vars['slot']->value->title,true);?>
"><?php echo smarty_modifier_markdown($_smarty_tpl->tpl_vars['slot']->value->title);?>
</th>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                        <?php if (!$_smarty_tpl->tpl_vars['hidden']->value) {?>
                <?php $_smarty_tpl->_assignInScope('count_bests', 0);?>
                <?php $_smarty_tpl->_assignInScope('max', max($_smarty_tpl->tpl_vars['best_choices']->value['y']));?>
                <?php if ($_smarty_tpl->tpl_vars['max']->value > 0) {?>
                    <tr id="total">
                        <td style="text-align:left">
                                                        <?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['votes']->value);?>
 <?php if ((smarty_modifier_count($_smarty_tpl->tpl_vars['votes']->value)) == 1) {
echo __('Poll results','polled user');
} else {
echo __('Poll results','polled users');
}
if ($_smarty_tpl->tpl_vars['poll']->value->ValueMax != NULL && (smarty_modifier_count($_smarty_tpl->tpl_vars['votes']->value)) >= $_smarty_tpl->tpl_vars['poll']->value->ValueMax) {?> (<?php echo __('Generic','maximum voters reached');?>
!)<?php } elseif ($_smarty_tpl->tpl_vars['poll']->value->ValueMax != NULL && $_smarty_tpl->tpl_vars['poll']->value->ValueMax > 0) {?> (<?php echo __('Generic','maximum');?>
: <?php echo $_smarty_tpl->tpl_vars['poll']->value->ValueMax;?>
)<?php }?>
                        </td>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['best_choices']->value['y'], 'best_choice', false, 'i');
$_smarty_tpl->tpl_vars['best_choice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['best_choice']->value) {
$_smarty_tpl->tpl_vars['best_choice']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['max']->value == $_smarty_tpl->tpl_vars['best_choice']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('count_bests', $_smarty_tpl->tpl_vars['count_bests']->value+1);?>
                                <td>
                                    <span class="yes-count" style="font-weight:600;"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['best_choice']->value);?>
</span>
                                    <?php if ($_smarty_tpl->tpl_vars['best_choices']->value['inb'][$_smarty_tpl->tpl_vars['i']->value] > 0) {?><br/><span class="small text-muted">(+<span class="inb-count"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['best_choices']->value['inb'][$_smarty_tpl->tpl_vars['i']->value]);?>
</span>)</span><?php }?>
                                </td>
                            <?php } elseif ($_smarty_tpl->tpl_vars['best_choice']->value > 0) {?>
                                <td>
                                    <span class="yes-count"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['best_choice']->value);?>
</span>
                                    <?php if ($_smarty_tpl->tpl_vars['best_choices']->value['inb'][$_smarty_tpl->tpl_vars['i']->value] > 0) {?><br/><span class="small text-muted">(+<span class="inb-count"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['best_choices']->value['inb'][$_smarty_tpl->tpl_vars['i']->value]);?>
</span>)</span><?php }?>
                                </td>
                            <?php } elseif ($_smarty_tpl->tpl_vars['best_choices']->value['inb'][$_smarty_tpl->tpl_vars['i']->value] > 0) {?>
                                <td>
                                    <br/><span class="small text-muted">(+<span class="inb-count"><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['best_choices']->value['inb'][$_smarty_tpl->tpl_vars['i']->value]);?>
</span>)</span>
                                </td>
                            <?php } else { ?>
                                <td></td>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tr>
                <?php }?>
            <?php }?>
            
                        <?php if ($_smarty_tpl->tpl_vars['active']->value && $_smarty_tpl->tpl_vars['editingVoteId']->value === 0 && !$_smarty_tpl->tpl_vars['expired']->value && $_smarty_tpl->tpl_vars['accessGranted']->value) {?>
                				<?php if ($_smarty_tpl->tpl_vars['poll']->value->ValueMax == NULL || smarty_modifier_count($_smarty_tpl->tpl_vars['votes']->value) < $_smarty_tpl->tpl_vars['poll']->value->ValueMax) {?>
                    <tr id="vote-form" class="hidden-print">
                                                <td class="bg-info" class="btn-edit">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" id="name" name="name" class="form-control" title="<?php echo __('Generic','Your name');?>
" placeholder="<?php echo __('Generic','Your name');?>
" autocomplete="name" />
                            </div>
                        </td>
                    
                        					    <?php $_smarty_tpl->_assignInScope('id', 0);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot', false, 'id');
$_smarty_tpl->tpl_vars['slot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->do_else = false;
?>
                            <td class="bg-info" headers="C<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                <ul id="vote-choice-add" class="list-unstyled choice">
    							            	    					<?php if ($_smarty_tpl->tpl_vars['poll']->value->value_max == NULL || $_smarty_tpl->tpl_vars['best_choices']->value['y'][$_smarty_tpl->tpl_vars['id']->value] < $_smarty_tpl->tpl_vars['poll']->value->value_max) {
$_smarty_tpl->_assignInScope('class', 'yes');
} else {
$_smarty_tpl->_assignInScope('class', 'hidden');
}?>
                               		<li class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                                    	<input type="radio" id="y-choice-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="choices[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value="2"
                                    		<?php echo !(isset($_smarty_tpl->tpl_vars['selectedNewVotes']->value[$_smarty_tpl->tpl_vars['id']->value])) || ("2" !== $_smarty_tpl->tpl_vars['selectedNewVotes']->value[$_smarty_tpl->tpl_vars['id']->value]) ? '' : " checked";?>

                                    	/>
                                    	<label class="btn btn-default btn-xs" for="y-choice-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo smarty_modifier_html(__('Poll results','Vote yes for'));?>
 <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['slot']->value->title);?>
">
                                       		<i class="glyphicon glyphicon-ok"></i><span class="sr-only"><?php echo __('Generic','Yes');?>
</span>
                                    	</label>
                                	</li>
    							        	    						<?php if ($_smarty_tpl->tpl_vars['poll']->value->value_max == NULL || $_smarty_tpl->tpl_vars['best_choices']->value['y'][$_smarty_tpl->tpl_vars['id']->value] < $_smarty_tpl->tpl_vars['poll']->value->value_max) {
$_smarty_tpl->_assignInScope('class', 'no');
} else {
$_smarty_tpl->_assignInScope('class', 'hidden');
}?>
                                    <li class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                                   	 	                                        <input type="radio" id="n-choice-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="choices[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value=" "
                                    		<?php echo !(isset($_smarty_tpl->tpl_vars['selectedNewVotes']->value[$_smarty_tpl->tpl_vars['id']->value])) || ('' !== $_smarty_tpl->tpl_vars['selectedNewVotes']->value[$_smarty_tpl->tpl_vars['id']->value]) ? '' : " checked";?>

                                    	/>
                                        <label class="btn btn-default btn-xs <?php echo !(isset($_smarty_tpl->tpl_vars['selectedNewVotes']->value[$_smarty_tpl->tpl_vars['id']->value])) || ("0" !== $_smarty_tpl->tpl_vars['selectedNewVotes']->value[$_smarty_tpl->tpl_vars['id']->value]) ? "startunchecked" : '';?>
" for="n-choice-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo smarty_modifier_html(__('Poll results','Vote no for'));?>
 <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['slot']->value->title);?>
">
                                            <i class="glyphicon glyphicon-remove"></i><span class="sr-only"><?php echo __('Generic','No');?>
</span>
                                        </label>
                                    </li>
                                    <li class="hide">
                                        <input type="radio" id="r-choice-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="choices[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value=" " 
                                            <?php echo (isset($_smarty_tpl->tpl_vars['selectedNewVotes']->value[$_smarty_tpl->tpl_vars['id']->value])) && ('' !== $_smarty_tpl->tpl_vars['selectedNewVotes']->value[$_smarty_tpl->tpl_vars['id']->value]) ? '' : " checked";?>
 
                                        />
                                    </li>
                                </ul>
                            </td>
						<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['id']->value+1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <td>
                            <button type="submit" class="btn btn-default btn-xs btn-success" name="save" title="<?php echo __('Poll results','Save the choices');?>
">
                                <i class="glyphicon glyphicon-save" aria-hidden="true"></i>
                                <span class="sr-only"><?php echo __('Generic','Save');?>
</span>
                            </button>
                        </td>
                </tr>
                <?php }?>
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['votes']->value, 'vote');
$_smarty_tpl->tpl_vars['vote']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vote']->value) {
$_smarty_tpl->tpl_vars['vote']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['editingVoteId']->value === $_smarty_tpl->tpl_vars['vote']->value->uniqId && !$_smarty_tpl->tpl_vars['expired']->value) {?>
                    <tr id="edited-line" class="hidden-print">
                                                <td class="bg-info btn-edit">
                            <div class="input-group input-group-sm" id="edit">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="hidden" name="edited_vote" value="<?php echo $_smarty_tpl->tpl_vars['vote']->value->uniqId;?>
"/>
                                <input type="text" id="name" name="name" value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['vote']->value->name);?>
" class="form-control" title="<?php echo __('Generic','Your name');?>
" placeholder="<?php echo __('Generic','Your name');?>
" autocomplete="name" readonly/>
                            </div>
                        </td>

                                        <?php $_smarty_tpl->_assignInScope('id', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
$_smarty_tpl->tpl_vars['slot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('choice', $_smarty_tpl->tpl_vars['vote']->value->choices[$_smarty_tpl->tpl_vars['id']->value]);?>
                        <td class="bg-info" headers="C<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                            <ul id="vote-choice" class="list-unstyled choice">
    								    						<?php if ($_smarty_tpl->tpl_vars['poll']->value->value_max == NULL || $_smarty_tpl->tpl_vars['best_choices']->value['y'][$_smarty_tpl->tpl_vars['id']->value] < $_smarty_tpl->tpl_vars['poll']->value->value_max || $_smarty_tpl->tpl_vars['choice']->value == '2') {
$_smarty_tpl->_assignInScope('class', 'yes');
} else {
$_smarty_tpl->_assignInScope('class', 'hidden');
}?>
                                <li class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                                    <input type="radio" id="y-choice-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="choices[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value="2" <?php if ($_smarty_tpl->tpl_vars['choice']->value == '2') {?>checked <?php }?>/>
                                    <label class="btn btn-default btn-xs" for="y-choice-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo smarty_modifier_html(__('Poll results','Vote yes for'));?>
 <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['slots']->value[$_smarty_tpl->tpl_vars['id']->value]->title);?>
">
                                        <i class="glyphicon glyphicon-ok"></i><span class="sr-only"><?php echo __('Generic','Yes');?>
</span>
                                    </label>
                                </li>
    								    						<?php if ($_smarty_tpl->tpl_vars['poll']->value->value_max == NULL || $_smarty_tpl->tpl_vars['best_choices']->value['y'][$_smarty_tpl->tpl_vars['id']->value] < $_smarty_tpl->tpl_vars['poll']->value->value_max || $_smarty_tpl->tpl_vars['choice']->value == '2') {
$_smarty_tpl->_assignInScope('class', 'no');
} else {
$_smarty_tpl->_assignInScope('class', 'hidden');
}?>
                                <li class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                                    <input type="radio" id="n-choice-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="choices[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value="0" <?php if ($_smarty_tpl->tpl_vars['choice']->value == '0') {?>checked <?php }?>/>
                                    <label class="btn btn-default btn-xs" for="n-choice-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo smarty_modifier_html(__('Poll results','Vote no for'));?>
 <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['slots']->value[$_smarty_tpl->tpl_vars['id']->value]->title);?>
">
                                        <i class="glyphicon glyphicon-remove"></i>
                                        <span class="sr-only"><?php echo __('Generic','No');?>
</span>
                                    </label>
                                </li>
                                <li class="hide">
                                    <input type="radio" id="r-choice-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="choices[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value=" " <?php if ($_smarty_tpl->tpl_vars['choice']->value != '2' && $_smarty_tpl->tpl_vars['choice']->value != '0') {?>checked <?php }?>/>
                                </li>
                            </ul>
                        </td>
                        <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['id']->value+1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        <td>
                        <button type="submit" class="btn btn-default btn-xs btn-success" name="save" value="<?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['vote']->value->id);?>
" title="<?php echo __('Poll results','Save the choices');?>
 <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['vote']->value->name);?>
">
                            <i class="glyphicon glyphicon-save" aria-hidden="true"></i>
                            <span class="sr-only"><?php echo __('Generic','Save');?>
</span>
                        </button>
                    </td>
                    <td>
                       <a href="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['poll_id']->value,'admin'=>false,'action'=>'delete_vote','action_value'=>$_smarty_tpl->tpl_vars['vote']->value->id),$_smarty_tpl);?>
" class="btn btn-default btn-sm btn-danger" title="<?php echo __('Poll results','Remove the line:');?>
 <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['vote']->value->name);?>
">
                         <i class="glyphicon glyphicon-trash" style="font-size:1.3em;" aria-hidden="true"></i>
                         <span class="sr-only"><?php echo __('Generic','Remove');?>
</span>
                       </a>
                    </td>
                    <td>
                       <a href="javascript:history.go(-1)" class="btn btn-default btn-sm btn-cancel" style="margin-left:5px" title="<?php echo __('Generic','Cancel');?>
">
                         <i class="glyphicon glyphicon-remove" style="font-size:1.3em;" aria-hidden="true"></i>
                         <span class="sr-only"><?php echo __('Generic','Cancel');?>
</span>
                       </a>
                    </td>
                </tr>
                
                                <?php } elseif (!$_smarty_tpl->tpl_vars['hidden']->value) {?> 
                    <tr id="voted-line">
                                                <th class="bg-info">
                            <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['vote']->value->name);?>

    					</th>
    					                        <?php $_smarty_tpl->_assignInScope('id', 0);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
$_smarty_tpl->tpl_vars['slot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('choice', $_smarty_tpl->tpl_vars['vote']->value->choices[$_smarty_tpl->tpl_vars['id']->value]);?>
                            <?php if ($_smarty_tpl->tpl_vars['choice']->value == '2') {?>
                                <td class="bg-success text-success" headers="C<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    <span class="sr-only"><?php echo __('Generic','Yes');?>
</span>
                                </td>
                            <?php } elseif ($_smarty_tpl->tpl_vars['choice']->value == '0') {?>
                                <td class="bg-danger text-danger" headers="C<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                    <i class="glyphicon glyphicon-remove"></i>
                                    <span class="sr-only"><?php echo __('Generic','No');?>
</span>
                                </td>
                            <?php } else { ?>
                                <td class="bg-info" headers="C<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                    <span class="sr-only"><?php echo __('Generic','Unknown');?>
</span>
                                </td>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['id']->value+1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
                                                <?php if ($_smarty_tpl->tpl_vars['active']->value && !$_smarty_tpl->tpl_vars['expired']->value && $_smarty_tpl->tpl_vars['accessGranted']->value && ($_smarty_tpl->tpl_vars['poll']->value->editable == constant('Framadate\Editable::EDITABLE_BY_ALL') || $_smarty_tpl->tpl_vars['admin']->value || ($_smarty_tpl->tpl_vars['poll']->value->editable == constant('Framadate\Editable::EDITABLE_BY_OWN') && $_smarty_tpl->tpl_vars['editedVoteUniqueId']->value == $_smarty_tpl->tpl_vars['vote']->value->uniqId))) {?>
                            <td class="hidden-print">
                                <a href="<?php if ($_smarty_tpl->tpl_vars['admin']->value) {
echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['poll']->value->admin_id,'vote_id'=>$_smarty_tpl->tpl_vars['vote']->value->uniqId,'admin'=>true),$_smarty_tpl);
} else {
echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['poll']->value->id,'vote_id'=>$_smarty_tpl->tpl_vars['vote']->value->uniqId),$_smarty_tpl);
}?>" class="btn btn-default btn-sm" title="<?php echo smarty_modifier_html(__f('Poll results','Edit the line: %s',$_smarty_tpl->tpl_vars['vote']->value->name));?>
">
                                    <i class="glyphicon glyphicon-edit" style="font-size:1em;"></i><span class="sr-only"><?php echo __('Generic','Edit');?>
</span>
                                </a>
                                <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                                    <a href="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['poll']->value->id,'vote_id'=>$_smarty_tpl->tpl_vars['vote']->value->uniqId),$_smarty_tpl);?>
" class="btn btn-default btn-sm clipboard-url" data-toggle="popover" data-trigger="manual" title="<?php echo __('Poll results','Link to edit this particular line');?>
" data-content="<?php echo __('Poll results','Link to edit this particular line has been copied inside the clipboard!');?>
">
                                        <span class="btn-link glyphicon glyphicon-link"></span>
                                    </a>
                                    <a href="<?php echo smarty_function_poll_url(array('id'=>$_smarty_tpl->tpl_vars['admin_poll_id']->value,'admin'=>true,'action'=>'delete_vote','action_value'=>$_smarty_tpl->tpl_vars['vote']->value->id),$_smarty_tpl);?>
" class="btn btn-default btn-sm" title="<?php echo __('Poll results','Remove the line:');?>
 <?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['vote']->value->name);?>
">
                                        <i class="glyphicon glyphicon-trash text-danger"></i>
                                        <span class="sr-only"><?php echo __('Generic','Remove');?>
</span>
                                    </a>
    
                                <?php }?>
                            </td>
                        <?php } else { ?>
                            <td>&nbsp;</td>
                        <?php }?>
                    </tr>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
            
            <tfoot>
                <tr>
                    <th role="presentation"></th>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot', false, 'id');
$_smarty_tpl->tpl_vars['slot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->do_else = false;
?>
                        <th class="bg-info" id="C<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo smarty_modifier_markdown($_smarty_tpl->tpl_vars['slot']->value->title,true);?>
"><?php echo smarty_modifier_markdown($_smarty_tpl->tpl_vars['slot']->value->title);?>
</th>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <th></th>
                </tr>
            </tfoot>
            
        </table>
    </form>
</div>

<!--
<h5 id="bottom" style="text-align:left; margin-top:0px; margin-bottom:0px; margin-left:5px;">
    <a href="#top">
        <button class="btn btn-default btn-sm btn-cancel" title="<?php echo __('Generic','Up');?>
">
            <i class="glyphicon glyphicon-chevron-up" aria-hidden="true"></i><span class="sr-only"><?php echo __('Generic','Up');?>
</span>
        </button>
    </a>
</h5>
-->

<?php $_smarty_tpl->_assignInScope('hidden', true);?>

<?php if (!$_smarty_tpl->tpl_vars['hidden']->value && $_smarty_tpl->tpl_vars['max']->value > 0) {?>
        <div class="row" aria-hidden="true">
        <div class="col-xs-12">
            <p class="text-center" id="showChart">
                <button class="btn btn-lg btn-default">
                    <span class="fa fa-fw fa-bar-chart"></span> <?php echo __('Poll results','Display the chart of the results');?>

                </button>
            </p>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('#showChart').on('click', function() {
                $('#showChart')
                .after("<h3><?php echo __('Poll results','Chart');?>
</h3><canvas id=\"Chart\"></canvas>")
                .remove();

                var resIfneedbe = [];
                var resYes = [];

                $('#addition').find('td').each(function () {
                    var inbCountText = $(this).find('.inb-count').text();
                    if(inbCountText != '' && inbCountText != undefined) {
                        resIfneedbe.push($(this).find('.inb-count').html())
                    } else {
                        resIfneedbe.push(0);
                    }

                    var yesCountText = $(this).find('.yes-count').text();
                    if(yesCountText != '' && yesCountText != undefined) {
                        resYes.push($(this).find('.yes-count').html())
                    } else {
                        resYes.push(0);
                    }
                });
                var cols = [
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot', false, 'id');
$_smarty_tpl->tpl_vars['slot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->do_else = false;
?>
                    "<?php echo smarty_modifier_addslashes(smarty_modifier_markdown($_smarty_tpl->tpl_vars['slot']->value->title,true));?>
",
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ];

                resIfneedbe.shift();
                resYes.shift();

                var barChartData = {
                    labels : cols,
                    datasets : [
                    {
                        label: "<?php echo __('Generic','Ifneedbe');?>
",
                        fillColor : "rgba(255,207,79,0.8)",
                        highlightFill: "rgba(255,207,79,1)",
                        barShowStroke : false,
                        data : resIfneedbe
                    },
                    {
                        label: "<?php echo __('Generic','Yes');?>
",
                        fillColor : "rgba(103,120,53,0.8)",
                        highlightFill : "rgba(103,120,53,1)",
                        barShowStroke : false,
                        data : resYes
                    }
                    ]
                };

                var ctx = document.getElementById("Chart").getContext("2d");
                window.myBar = new Chart(ctx).StackedBar(barChartData, {
                    responsive : true
                });
                return false;
            });
        });
    <?php echo '</script'; ?>
>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hidden']->value) {?>
        <?php $_smarty_tpl->_assignInScope('max', max($_smarty_tpl->tpl_vars['best_choices']->value['y']));?>
    <?php if ($_smarty_tpl->tpl_vars['max']->value > 0) {?>
        <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['count_bests']->value == 1) {?>
                <div class="col-sm-12"><h3><?php echo __('Poll results','Best choice');?>
</h3></div>
                <div class="col-sm-6 col-sm-offset-3 alert alert-info">
                    <p><i class="glyphicon glyphicon-star text-info"></i> <?php echo __('Poll results','The best choice at this time is:');?>
</p>
            <?php } elseif ($_smarty_tpl->tpl_vars['count_bests']->value > 1) {?>
                <div class="col-sm-12"><h3><?php echo __('Poll results','Best choices');?>
</h3></div>
                <div class="col-sm-6 col-sm-offset-3 alert alert-info">
                    <p><i class="glyphicon glyphicon-star text-info"></i> <?php echo __('Poll results','The bests choices at this time are:');?>
</p>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('i', 0);?>
                    <ul class="list-unstyled">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value, 'slot');
$_smarty_tpl->tpl_vars['slot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['best_choices']->value['y'][$_smarty_tpl->tpl_vars['i']->value] == $_smarty_tpl->tpl_vars['max']->value) {?>
                            <li><strong><?php echo smarty_modifier_markdown($_smarty_tpl->tpl_vars['slot']->value->title,true);?>
</strong></li>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <p><?php echo __('Generic','with');?>
 <b><?php echo smarty_modifier_html($_smarty_tpl->tpl_vars['max']->value);?>
</b> <?php if ($_smarty_tpl->tpl_vars['max']->value == 1) {
echo __('Generic','vote');
} else {
echo __('Generic','votes');
}?>.</p>
                </div>
        </div>
    <?php }
}
}
}
