{extends 'admin/admin_page.tpl'}

{block 'main'}
<!-- Le text-center force les éléments en ligne (le tableau) à se positionner au centre -->
<div class="text-center w-100" style="text-align: center; width: 100%;">

    <!-- Le style text-align: left remet les textes à gauche à l'intérieur de la boîte -->
    <table class="table table-borderless" style="border: none; width: max-content !important; display: inline-table !important; text-align: left; margin: 0 auto;">
        <tbody>
            <tr>
                <!-- Première colonne -->
                <td class="align-top" style="border: none; padding: 15px; width: max-content; white-space: nowrap;">
                    <div class="mb-3">
                        <a href="../create_poll.php?type=autre"><h2 class="admin-menu-title">{__('Homepage', 'Make a classic poll')}</h2></a>
                    </div>
                    <div class="mb-3">
                        <a href="../create_poll.php?type=date"><h2 class="admin-menu-title">{__('Homepage', 'Schedule an event')}</h2></a>
                    </div>
                    <div class="mb-3">
                        <a href="./polls.php"><h2 class="admin-menu-title">{__('Admin', 'Polls')}</h2></a>
                    </div>
                </td>

                <!-- Deuxième colonne -->
                <td class="align-top" style="border: none; padding: 15px; width: max-content; white-space: nowrap;">
                    <!--
                    <div class="mb-3">
                        <a href="./migration.php"><h2 class="admin-menu-title">{__('Admin', 'Migration')}</h2></a>
                    </div>
                    -->
                    <div class="mb-3">
                        <a href="./purge.php"><h2 class="admin-menu-title">{__('Admin', 'Purge')}</h2></a>
                    </div>
                    <div class="mb-3">
                        <a href="./check.php"><h2 class="admin-menu-title">{__('Check', 'Installation checking')}</h2></a>
                    </div>
{if $logsAreReadable}
                    <div class="mb-3">
                        <a href="./logs.php"><h2 class="admin-menu-title">{__('Admin', 'Logs')}</h2></a>
                    </div>
{/if}
                </td>
            </tr>
        </tbody>
    </table>

</div>

{/block}
