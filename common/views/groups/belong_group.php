<tr id="group_row<?php echo $currentRow ?>" class="bg_tan" onmouseover="getRowOver2(<?php echo $currentRow ?>); return false;" onmouseout="getRowOut2(<?php echo $currentRow ?>); return false;">
    <td class="columnLine"><div id="group_name1"><a href="/challenges/group_message_board.php?groupId=<?php echo $id ?>" class="arial_14pxBlueBI"><?php echo $group_name ?></a></div></td>
    <td class="columnLine"><div class="arial11pxBlack"><?php echo $id ?></div></td>
    <td class="columnLine"><div class="arial11pxBlack"><?php echo rc4( base64_decode( $password ) ) ?></div></td>
    <td class="columnLine"><a href="/challenges/group_message_board.php?groupId=<?php echo $id ?>" class="verdana_9pxBlueBLH13">Student Board</a>
    
    <?php if( isset( $isAdmin ) && !empty( $isAdmin ) ): ?>
        <br />
        <a href="/challenges/admin_group_message_board.php?groupId=<?php echo $id ?>" class="verdana_9pxBlueBLH13">Board Admin Page</a>
    <?php endif ?>
        </td>
    <td class="columnLineR"><a href="/leaderboards.php?groupId=<?php echo $id ?>" class="verdana_9pxBlueBLH11">Go to<br />Leaderboard</a></td>
</tr>