{if !is_array($best_choices) || empty($best_choices)}
    {$best_choices = [0]}
{/if}

{* down navigation *}
<!--
<h5 id="top" style="text-align:left; margin-top:0px; margin-bottom:0px; margin-left:5px;">
    <a href="#bottom">
        <button class="btn btn-default btn-sm btn-cancel" title="{__('Generic', 'Down')}">
            <i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i><span class="sr-only">{__('Generic', 'Down')}</span>
        </button>
    </a>
</h5>
-->

{* Left-Right navigation *}
{include 'part/scroll_left_right.tpl'}

<div id="tableContainer" class="tableContainer">
    <form action="{if $admin}{poll_url id=$admin_poll_id admin=true}{else}{poll_url id=$poll_id}{/if}" method="POST" id="poll_form">
        <input type="hidden" name="control" value="{$slots_hash}"/>
        <table class="results">
            <caption class="sr-only">{__('Poll results', 'Votes of the poll')} {$poll->title|html}</caption>
            <thead>
            {* admin edit - add/remove columns *}
            {if $admin && !$expired}
                <tr class="hidden-print">
                    <th role="presentation"></th>
                    {foreach $slots as $id=>$slot}
                        <td headers="C{$id}">
                            <a href="{poll_url id=$admin_poll_id admin=true action='delete_column' action_value=$slot->title}"
                               data-remove-confirmation="{__('adminstuds', 'Confirm removal of the column.')}"
                               class="btn btn-link btn-sm remove-column" title="{__('adminstuds', 'Remove the column')} {$slot->title|html}">
                                <i class="glyphicon glyphicon-remove text-danger"></i><span class="sr-only">{__('Generic', 'Remove')}</span>
                            </a>
                        </td>
                    {/foreach}
                    <td>
                        <a href="{poll_url id=$admin_poll_id admin=true action='add_column'}" class="btn btn-link btn-sm" title="{__('adminstuds', 'Add a column')}">
                            <i class="glyphicon glyphicon-plus text-success"></i><span class="sr-only">{__('Poll results', 'Add a column')}</span>
                        </a>
                    </td>
                </tr>
            {/if}
                <tr>
                    <th role="presentation"></th>
                    {* column titles *}
                    {foreach $slots as $id=>$slot}
                        <th class="bg-info" id="C{$id}" title="{$slot->title|markdown:true}">{$slot->title|markdown}</th>
                    {/foreach}
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
            {* Line displaying votes summary *}
            {if !$hidden}
                {$count_bests = 0}
                {if $best_choices['y']|count > 0}{$max = max($best_choices['y'])}{else}{$max = 0}{/if}
                {if $max > 0}
                    <tr id="total">
                        <td class="text-left">
                            {* Total number of votes *}
                            {$votes|count} {if ($votes|count)==1}{__('Poll results', 'polled user')}{else}{__('Poll results', 'polled users')}{/if}{if $poll->ValueMax ne NULL && ($votes|count)>=$poll->ValueMax} ({__('Generic', 'maximum voters reached')}!){elseif $poll->ValueMax ne NULL && $poll->ValueMax > 0} ({__('Generic', 'maximum')}: {$poll->ValueMax}){/if}
                        </td>
                        {* Total number of votes by choice *}
                        {foreach $best_choices['y'] as $i=>$best_choice}
                            {if $max == $best_choice}
                                {$count_bests = $count_bests +1}
                                <td>
                                    <span class="yes-count yes-count-best">{$best_choice|html}</span>
                                    {if $best_choices['inb'][$i]>0}<br/><span class="small text-muted">(+<span class="inb-count">{$best_choices['inb'][$i]|html}</span>)</span>{/if}
                                </td>
                            {elseif $best_choice > 0}
                                <td>
                                    <span class="yes-count">{$best_choice|html}</span>
                                    {if $best_choices['inb'][$i]>0}<br/><span class="small text-muted">(+<span class="inb-count">{$best_choices['inb'][$i]|html}</span>)</span>{/if}
                                </td>
                            {elseif $best_choices['inb'][$i]>0}
                                <td>
                                    <br/><span class="small text-muted">(+<span class="inb-count">{$best_choices['inb'][$i]|html}</span>)</span>
                                </td>
                            {else}
                                <td></td>
                            {/if}
                        {/foreach}
                    </tr>
                {/if}
            {/if}
            
            {* Line to add a new vote *}
            {if $active && $editingVoteId === 0 && !$expired && $accessGranted}
                {* Hide line to add new votes if maximum voters reached *}
				{if $poll->ValueMax eq NULL || $votes|count lt $poll->ValueMax}
                    <tr id="vote-form" class="hidden-print">
                        {* name field *}
                        <td class="bg-info" class="btn-edit">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" id="name" name="name" class="form-control" title="{__('Generic', 'Your name')}" placeholder="{__('Generic', 'Your name')}" autocomplete="name" />
                            </div>
                        </td>
                    
                        {* columns *}
					    {$id = 0}
                        {foreach $slots as $id=>$slot}
                            <td class="bg-info" headers="C{$id}">
                                <ul id="vote-choice-add" class="list-unstyled choice">
    							    {* Hide if maximum votes per choice reached *}
        	    					{if $poll->value_max eq NULL || $best_choices['y'][$id] lt $poll->value_max}{$class = 'yes'}{else}{$class = 'hidden'}{/if}
                               		<li class="{$class}">
                                    	<input type="radio" id="y-choice-{$id}" name="choices[{$id}]" value="2"
                                    		{(!isset($selectedNewVotes[$id]) || ("2" !== $selectedNewVotes[$id])) ? "" : " checked"}
                                    	/>
                                    	<label class="btn btn-default btn-xs" for="y-choice-{$id}" title="{__('Poll results', 'Vote yes for')|html} {$slot->title|html}">
                                       		<i class="glyphicon glyphicon-ok"></i><span class="sr-only">{__('Generic', 'Yes')}</span>
                                    	</label>
                                	</li>
    							    {* Hide if maximum votes per choice reached *}
    	    						{if $poll->value_max eq NULL || $best_choices['y'][$id] lt $poll->value_max}{$class = 'no'}{else}{$class = 'hidden'}{/if}
                                    <li class="{$class}">
                                   	 	{* the no choice on new entry will not be saved *}
                                        <input type="radio" id="n-choice-{$id}" name="choices[{$id}]" value=" "
                                    		{(!isset($selectedNewVotes[$id]) || ("" !== $selectedNewVotes[$id])) ? "" : " checked"}
                                    	/>
                                        <label class="btn btn-default btn-xs {(!isset($selectedNewVotes[$id]) || ("0" !== $selectedNewVotes[$id])) ? "startunchecked" : ""}" for="n-choice-{$id}" title="{__('Poll results', 'Vote no for')|html} {$slot->title|html}">
                                            <i class="glyphicon glyphicon-remove"></i><span class="sr-only">{__('Generic', 'No')}</span>
                                        </label>
                                    </li>
                                    <li class="hide">
                                        <input type="radio" id="r-choice-{$id}" name="choices[{$id}]" value=" " 
                                            {(isset($selectedNewVotes[$id]) && ("" !== $selectedNewVotes[$id])) ? "" : " checked"} 
                                        />
                                    </li>
                                </ul>
                            </td>
						{$id = $id+1}
                        {/foreach}

                        <td>
                            <button type="submit" class="btn btn-default btn-xs btn-success" name="save" title="{__('Poll results', 'Save the choices')}">
                                <i class="glyphicon glyphicon-save" aria-hidden="true"></i>
                                <span class="sr-only">{__('Generic', 'Save')}</span>
                            </button>
                        </td>
                </tr>
                {/if}
            {/if}

            {foreach $votes as $vote}
                {* Edited line *}
                {if $editingVoteId === $vote->uniqId && !$expired}
                    <tr id="edited-line" class="hidden-print">
                        {* name field *}
                        <td class="bg-info btn-edit">
                            <div class="input-group input-group-sm" id="edit">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="hidden" name="edited_vote" value="{$vote->uniqId}"/>
                                <input type="text" id="name" name="name" value="{$vote->name|html}" class="form-control" title="{__('Generic', 'Your name')}" placeholder="{__('Generic', 'Your name')}" autocomplete="name" readonly/>
                            </div>
                        </td>

                    {* columns *}
                    {$id=0}
                    {foreach $slots as $slot}
                        {$choice=$vote->choices[$id]}
                        <td class="bg-info" headers="C{$id}">
                            <ul id="vote-choice" class="list-unstyled choice">
    							{* Hide if maximum votes per choice reached *}
	    						{if $poll->value_max eq NULL || $best_choices['y'][$id] lt $poll->value_max || $choice=='2'}{$class = 'yes'}{else}{$class = 'hidden'}{/if}
                                <li class="{$class}">
                                    <input type="radio" id="y-choice-{$id}" name="choices[{$id}]" value="2" {if $choice=='2'}checked {/if}/>
                                    <label class="btn btn-default btn-xs" for="y-choice-{$id}" title="{__('Poll results', 'Vote yes for')|html} {$slots[$id]->title|html}">
                                        <i class="glyphicon glyphicon-ok"></i><span class="sr-only">{__('Generic', 'Yes')}</span>
                                    </label>
                                </li>
    							{* Hide if maximum votes per choice reached *}
	    						{if $poll->value_max eq NULL || $best_choices['y'][$id] lt $poll->value_max || $choice=='2'}{$class = 'no'}{else}{$class = 'hidden'}{/if}
                                <li class="{$class}">
                                    <input type="radio" id="n-choice-{$id}" name="choices[{$id}]" value="0" {if $choice=='0'}checked {/if}/>
                                    <label class="btn btn-default btn-xs" for="n-choice-{$id}" title="{__('Poll results', 'Vote no for')|html} {$slots[$id]->title|html}">
                                        <i class="glyphicon glyphicon-remove"></i>
                                        <span class="sr-only">{__('Generic', 'No')}</span>
                                    </label>
                                </li>
                                <li class="hide">
                                    <input type="radio" id="r-choice-{$id}" name="choices[{$id}]" value=" " {if $choice!='2' && $choice!='0'}checked {/if}/>
                                </li>
                            </ul>
                        </td>
                        {$id=$id + 1}
                    {/foreach}

                    {* Save, Delete and Cancel buttons *}
                    <td>
                        <button type="submit" class="btn btn-default btn-xs btn-success" name="save" value="{$vote->id|html}" title="{__('Poll results', 'Save the choices')} {$vote->name|html}">
                            <i class="glyphicon glyphicon-save" aria-hidden="true"></i>
                            <span class="sr-only">{__('Generic', 'Save')}</span>
                        </button>
                    </td>
                    <td>
                       <a href="{poll_url id=$poll_id admin=false action='delete_vote' action_value=$vote->id}" class="btn btn-default btn-sm btn-danger" title="{__('Poll results', 'Remove the line:')} {$vote->name|html}">
                         <i class="glyphicon glyphicon-trash icon-large" aria-hidden="true"></i>
                         <span class="sr-only">{__('Generic', 'Remove')}</span>
                       </a>
                    </td>
                    <td>
                       <a href="javascript:history.go(-1)" class="btn btn-default btn-sm btn-cancel ml-5" title="{__('Generic', 'Cancel')}">
                         <i class="glyphicon glyphicon-remove icon-large" aria-hidden="true"></i>
                         <span class="sr-only">{__('Generic', 'Cancel')}</span>
                       </a>
                    </td>
                </tr>
                
                {* Voted line *}
                {elseif !$hidden} 
                    <tr id="voted-line">
                        {* name field *}
                        <th class="bg-info">
                            {$vote->name|html}
    					</th>
    					{* Columns *}
                        {$id=0}
                        {foreach $slots as $slot}
                            {$choice=$vote->choices[$id]}
                            {if $choice=='2'}
                                <td class="bg-success text-success" headers="C{$id}">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    <span class="sr-only">{__('Generic', 'Yes')}</span>
                                </td>
                            {elseif $choice=='0'}
                                <td class="bg-danger text-danger" headers="C{$id}">
                                    <i class="glyphicon glyphicon-remove"></i>
                                    <span class="sr-only">{__('Generic', 'No')}</span>
                                </td>
                            {else}
                                <td class="bg-info" headers="C{$id}">
                                    <span class="sr-only">{__('Generic', 'Unknown')}</span>
                                </td>
                            {/if}
                            {$id=$id + 1}
                        {/foreach}
                        
                        {* Edit and Remove buttons *}
                        {if $active && !$expired && $accessGranted &&
                            (
                             $poll->editable == constant('Framadate\Editable::EDITABLE_BY_ALL')
                             or $admin
                             or ($poll->editable == constant('Framadate\Editable::EDITABLE_BY_OWN') && $editedVoteUniqueId == $vote->uniqId)
                            )
                        }
                            <td class="hidden-print">
                                <a href="{if $admin}{poll_url id=$poll->admin_id vote_id=$vote->uniqId admin=true}{else}{poll_url id=$poll->id vote_id=$vote->uniqId}{/if}" class="btn btn-default btn-sm" title="{__f('Poll results', 'Edit the line: %s', $vote->name)|html}">
                                    <i class="glyphicon glyphicon-edit"></i><span class="sr-only">{__('Generic', 'Edit')}</span>
                                </a>
                                {if $admin}
                                    <a href="{poll_url id=$poll->id vote_id=$vote->uniqId}" class="btn btn-default btn-sm clipboard-url" data-toggle="popover" data-trigger="manual" title="{__('Poll results', 'Link to edit this particular line')}" data-content="{__('Poll results', 'Link to edit this particular line has been copied inside the clipboard!')}">
                                        <span class="btn-link glyphicon glyphicon-link"></span>
                                    </a>
                                    <a href="{poll_url id=$admin_poll_id admin=true action='delete_vote' action_value=$vote->id}" class="btn btn-default btn-sm" title="{__('Poll results', 'Remove the line:')} {$vote->name|html}">
                                        <i class="glyphicon glyphicon-trash text-danger"></i>
                                        <span class="sr-only">{__('Generic', 'Remove')}</span>
                                    </a>
    
                                {/if}
                            </td>
                        {else}
                            <td>&nbsp;</td>
                        {/if}
                    </tr>
                {/if}
            {/foreach}
            </tbody>
            
            <tfoot>
                <tr>
                    <th role="presentation"></th>
                    {* column titles *}
                    {foreach $slots as $id=>$slot}
                        <th class="bg-info" id="C{$id}" title="{$slot->title|markdown:true}">{$slot->title|markdown}</th>
                    {/foreach}
                    <th></th>
                </tr>
            </tfoot>
            
        </table>
    </form>
</div>

{* up navigation *}
<!--
<h5 id="bottom" style="text-align:left; margin-top:0px; margin-bottom:0px; margin-left:5px;">
    <a href="#top">
        <button class="btn btn-default btn-sm btn-cancel" title="{__('Generic', 'Up')}">
            <i class="glyphicon glyphicon-chevron-up" aria-hidden="true"></i><span class="sr-only">{__('Generic', 'Up')}</span>
        </button>
    </a>
</h5>
-->

{* sections below not used *}
{$hidden = true}

{if !$hidden && $max > 0}
    {* chart of results *}
    <div class="row" aria-hidden="true">
        <div class="col-xs-12">
            <p class="text-center" id="showChart">
                <button class="btn btn-lg btn-default">
                    <span class="fa fa-fw fa-bar-chart"></span> {__('Poll results', 'Display the chart of the results')}
                </button>
            </p>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#showChart').on('click', function() {
                $('#showChart')
                .after("<h3>{__('Poll results', 'Chart')}</h3><canvas id=\"Chart\"></canvas>")
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
                {foreach $slots as $id=>$slot}
                    "{$slot->title|markdown:true|addslashes}",
                {/foreach}
                ];

                resIfneedbe.shift();
                resYes.shift();

                var barChartData = {
                    labels : cols,
                    datasets : [
                    {
                        label: "{__('Generic', 'Ifneedbe')}",
                        fillColor : "rgba(255,207,79,0.8)",
                        highlightFill: "rgba(255,207,79,1)",
                        barShowStroke : false,
                        data : resIfneedbe
                    },
                    {
                        label: "{__('Generic', 'Yes')}",
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
    </script>

{/if}

{if !$hidden}
    {* Best votes listing *}
    {if $best_choices['y']|count > 0}{$max = max($best_choices['y'])}{else}{$max = 0}{/if}
    {if $max > 0}
        <div class="row">
            {if $count_bests == 1}
                <div class="col-sm-12"><h3>{__('Poll results', 'Best choice')}</h3></div>
                <div class="col-sm-6 col-sm-offset-3 alert alert-info">
                    <p><i class="glyphicon glyphicon-star text-info"></i> {__('Poll results', 'The best choice at this time is:')}</p>
            {elseif $count_bests > 1}
                <div class="col-sm-12"><h3>{__('Poll results', 'Best choices')}</h3></div>
                <div class="col-sm-6 col-sm-offset-3 alert alert-info">
                    <p><i class="glyphicon glyphicon-star text-info"></i> {__('Poll results', 'The bests choices at this time are:')}</p>
            {/if}
            {$i = 0}
                    <ul class="list-unstyled">
                    {foreach $slots as $slot}
                        {if $best_choices['y'][$i] == $max}
                            <li><strong>{$slot->title|markdown:true}</strong></li>
                        {/if}
                        {$i = $i+1}
                    {/foreach}
                    </ul>
                    <p>{__('Generic', 'with')} <b>{$max|html}</b> {if $max==1}{__('Generic', 'vote')}{else}{__('Generic', 'votes')}{/if}.</p>
                </div>
        </div>
    {/if}
{/if}
