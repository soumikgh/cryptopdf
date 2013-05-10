<div style="height:22px;"></div>
<div style="width:592px; border:4px solid #0044cc;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" id="messageboard">
        <thead>
        <tr class="bg_blue">
            <th class="headerLineLeaderL">
                <a href="#" onclick="return false;" class="verdana_11pxWhiteB">Rank</a>
            </th>
            <th class="headerLineLeaderL">
                <a href="#" onclick="return false;" class="verdana_11pxWhiteB">Codename</a>
            </th>
            <th class="headerLineLeaderR">
                <div class="headerWhite">
                    <a href="#" onclick="return false;" class="verdana_11pxWhiteB">Total Points</a>
                </div>
            </th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($users) && count($users) > 0): ?>
            <?php $i = 1; ?>
            <?php foreach ($users as $userId => $points): ?>
                <?php $user = new User($db, $userId); ?>
                <?php $data = array(    'rank' => $i,
                                        'class' =>  $i%2 ? 'bg_tan' : 'bg_tan2',
                                        'codename' => ( strlen($user->encryptedText) > 0 ? $user->encryptedText . '-' . $user->codenameCounter : $user->codename . '-' . $user->codenameCounter ),
                                        'points' => $points ); ?>
                <?php echo load_view( 'leaderboard/user', $data ) ?>
                <?php $i++; ?>
            <?php endforeach ?>
        <?php else: ?>
            <tr><td colspan="2">No Users</td>/tr>
        <?php endif ?>
        </tbody>
    </table>
</div>
