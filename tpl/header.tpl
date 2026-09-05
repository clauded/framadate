<header class="frama-header clearfix">

{if count($langs)>1}
    <form method="post" class="hidden-print">
        <div class="input-group input-group-sm pull-right col-xs-12 col-sm-2">
            <select name="lang" class="form-control" title="{__('Language selector', 'Select the language')}" >
    {foreach $langs as $lang_key=>$lang_value}
                <option lang="{substr($lang_key, 0, 2)}" {if substr($lang_key, 0, 2)==$locale}selected{/if} value="{$lang_key|html}">{$lang_value|html}</option>
    {/foreach}
            </select>
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default btn-sm" title="{__('Language selector', 'Change the language')}">OK</button>
            </span>
        </div>
    </form>
{/if}
    <span class="frama-set row col-xs-12 col-sm-10">
        Framadate SET
    </span>
{if !empty($title)}
    <span class="frama-lead col-xs-12">{$title|html}</span>
{/if}
</header>

<main>
