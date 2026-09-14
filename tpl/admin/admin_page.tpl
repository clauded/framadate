{extends 'page.tpl'}

{block 'main'}
    {block 'admin_main'}{/block}
    <div class="row">
        <div class="text-center">
            <a class="btn btn-primary" role="button" href="{'admin'|resource}">
                <span class=" glyphicon glyphicon-arrow-left" aria-hidden="true"></span> {__('Admin', 'Back to administration')}
            </a>
        </div>
    </div>
{/block}
