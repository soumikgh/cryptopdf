<?php if( !empty( $currentUserIsAdmin ) ): ?>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="groups_own">
    <thead>
        
        <?php if( $group->isAdmin( getUserId() ) || $group->isOwner( getUserId() ) ): ?>
         <tr class="bg_blue">
            <th class="headerLineL"><div class="headerWhite">&nbsp;</div></th>
            <th class="headerLine"><div class="headerWhite">Enable auto-approve for new members</div></th>
            <th class="headerLineR">
            <div class="headerWhite">
                <a href="#">
                    <?php if ( $group->autoApprove ): ?>
                        <img id="auto_approve" width="18" border="0" height="19" alt="Checkmark" src="../images/btn_checkmark2_on.gif" />
                    <?php else: ?>
                        <img id="auto_approve" width="18" border="0" height="19" alt="Checkmark" src="../images/btn_checkmark2_off.gif" />
                    <?php endif ?>
                </a>
            </div>
            </th>
        </tr>
        <tr class="bg_blue">
            <th class="headerLineL"><div class="headerWhite">&nbsp;</div></th>
            <th class="headerLine"><div class="headerWhite">Allow all members to post messages</div></th>
            <th class="headerLineR">
            <div class="headerWhite">
                <a href="#">
                    <?php if ( $group->allowEditing ): ?>
                        <img id="allow_editing" width="18" border="0" height="19" alt="Checkmark" src="../images/btn_checkmark2_on.gif" />
                    <?php else: ?>
                        <img id="allow_editing" width="18" border="0" height="19" alt="Checkmark" src="../images/btn_checkmark2_off.gif" />
                    <?php endif ?>
                </a>
            </div>
            </th>
        </tr>
        <?php endif ?>
        <tr class="bg_blue">
            <th class="headerLineL"><div class="headerWhite">Username</div></th>
            <?php if( $currentUserIsAdmin ): ?>
                <th class="headerLine"><div class="headerWhite">Make Admin</div></th>
                <th class="headerLineR"><div class="headerWhite">Remove User</div></th>
            <?php endif ?>
        </tr>
    </thead>
<tbody>
    <?php $i = 1; ?>
    <?php if ( is_array( $users ) && count( $users ) > 0 ): ?>
        <?php foreach ( $users as $user ): ?>
            <?php $user['currentRow'] = $i; ?>
            <?php $user['currentUserIsAdmin'] = $currentUserIsAdmin; ?>
            <?php echo load_view( 'groups/user', $user ) ?>
            <?php $i++ ?>
        <?php endforeach ?>
    <?php else: ?>
        <tr><td colspan="2">No users</td></tr>
    <?php endif ?>
</tbody>
</table>
<?php else: ?>

<p>You do not have permission to view this page</p>
<?php endif; ?>
