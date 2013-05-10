<div id="content_messageboard2" style="margin-top:35px;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" id="groups_belong">
        <thead>
            <tr class="bg_blue">
                <th class="headerLineL" width="220"><div class="headerWhite14px">Groups I Belong To</div></th>
                <th class="headerLine"><div class="headerWhite">Access ID</div></th>
                <th class="headerLine"><div class="headerWhite">Password</div></th>
                <th class="headerLine"><div class="headerWhite">Message Board</div></th>
                <th class="headerLineR"><div class="headerWhite">Leaderboards</div></th>
            </tr>
        </thead>
        <tbody>
            <?php if( !empty( $groups ) && count( $groups ) > 0 ): ?>
                <?php $i = 1; ?>
                <?php foreach( $groups as $group ): ?>
                    <?php $group['currentRow'] = $i; ?>
                    <?php echo load_view( 'groups/belong_group', $group ); ?>
                    <?php $i++ ?>
                <?php endforeach ?>
            <?php else: ?>
                <tr><td colspan="5" style="text-align:center;padding:5px;">No groups</td></tr>
            <?php endif ?>
        </tbody>
    </table>
</div>