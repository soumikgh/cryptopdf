<tr id="row<?php echo $currentRow ?>" class="bg_tan" onmouseover="getRowOver(<?php echo $currentRow ?>); return false;" onmouseout="getRowOut(<?php echo $currentRow ?>); return false;">
    <td class="columnLine"><div id="group_name<?php echo $currentRow ?>"><a href="/groups/?action=viewUser&amp;userId=<?php echo $user_id ?>&amp;groupId=<?php echo $group_id ?>" class="arial_14pxBlueBI"><?php echo $username ?></a></div></td>
    
    <?php $image = is_numeric( $isAdmin) ? 'on' : 'off' ?>

    <?php if( $currentUserIsAdmin ): ?>
        <td class="columnLine">
            <a href="#" class="makeAdmin" rel="<?php echo $user_id ?>">
                <img class="btn_checkmark" name="btn_checkmark<?php echo $currentRow ?>" src="../images/btn_checkmark2_<?php echo $image ?>.gif" width="18" height="19" alt="Checkmark" border="0" />
            </a>
        </td>
        <td class="columnLine">
            <a href="?action=removeUser&amp;userId=<?php echo $user_id ?>&amp;groupId=<?php echo $group_id ?>" class="verdana_12pxBlueB">Remove</a>
        </td>
    <?php endif ?>
</tr>