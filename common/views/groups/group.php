<tr id="row<?php echo $currentRow ?>" class="bg_tan" onmouseover="getRowOver(<?php echo $currentRow ?>); return false;" onmouseout="getRowOut(<?php echo $currentRow ?>); return false;">
    <td class="columnLine"><div id="group_name-<?php echo $id ?>" class="arial11pxBlack edit"><?php echo $group_name ?></td>
    <td class="columnLine"><div class="arial11pxBlack"><?php echo $id ?></div></td>
    <td class="columnLine"><div class="arial11pxBlack edit" id="password-<?php echo $id ?>"><?php echo rc4( base64_decode( $password ) ) ?></div></td>
    <td class="columnLine"><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/groups/?action=joinGroup&amp;groupId=<?php echo $id ?>" onclick="return false;" class="verdana_12pxBlueB">Copy URL</a>
    </td>
    <td class="columnLine">
        <?php echo load_view( 'groups/actions', array( 'id' => $id ) ) ?>
        </td>
    <td class="columnLine">
        
    <?php if ( !empty( $fname ) ): ?>
            <a href="/challenges/group_message_board.php?groupId=<?php echo $id ?>" class="verdana_12pxBlueBLH13">Message Board</a><br /><br />
            <a href="/challenges/admin_group_message_board.php?groupId=<?php echo $id ?>" class="verdana_12pxBlueBLH13">Board Admin Page</a><br /><br />
            <a href="/groups/?action=viewUsers&groupId=<?php echo $id ?>" class="verdana_12pxBlueBLH13">Group Member List</a>
        <?php else: ?>
            <a href="?action=activate&amp;groupId=<?php echo $id ?>">Activate Board</a>
        <?php endif ?>
            </td>
    <td class="columnLineR"><a href="/leaderboards.php?groupId=<?php echo $id ?>" class="verdana_9pxBlueBLH11">Go to<br />Leaderboard</a></td>
</tr>