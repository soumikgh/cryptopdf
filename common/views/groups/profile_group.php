<div class="group_entry">
    <div class="group_id"><?php echo $group_name ?></div>
    <div class="group_name">
        <a class="verdana_10pxTanB" href="/leaderboards.php?groupId=<?php echo $id ?>">Leaderboards</a>
    </div>

    <div class="group_board">
        <?php if( !empty( $fname ) ): ?>
            <a class="verdana_10pxTanB" href="/challenges/group_message_board.php?groupId=<?php echo $id ?>">Message Board</a>
        <?php else: ?>
            <em>Board not activated yet</em>
        <?php endif ?>
    </div>
    <div class="group_board">
        <?php if( !empty( $fname ) && !empty( $isAdmin ) ): ?>
        <a class="verdana_10pxTanB" href="/challenges/admin_group_message_board.php?groupId=<?php echo $id ?>">Admin Msg Board</a>
        <?php endif ?>
    </div>
    <div class="group_board">
        <?php if( !empty( $fname )  && !empty( $isAdmin ) ): ?>
        <a class="verdana_10pxTanB" href="/groups?action=viewUsers&amp;groupId=<?php echo $id ?>">User Admin </a>
        <?php endif ?>
    </div>
    <div class="clear_left"></div>
</div>