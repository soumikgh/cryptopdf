<div class="arial14pxBlackB" style="padding-top:42px;" align="center">Your Stats:</div>
<div class="verdana_11px" align="center" style="padding-bottom:6px;"><em>Total Points: <strong><?php echo $totalPoints ?></strong></em></div>

<div class="verdana10pxBlackI" style="float:left; width:106px; margin-left:166px;" align="center">Completed</div>
<div class="verdana10pxBlackI" style="float:left; width:67px;" align="right">Points</div>
<br clear="left"/>

<div class="stat_header" onclick="toggleEntry(1); return false;" style="margin-top:3px;">
    <div id="stat_arrow1" class="stat_arrow"></div>
    <div class="stat_type">
        <div class="verdana12pxWhiteB">Games</div>
    </div>
    <div class="stat_completed">
        <div class="verdana11pxWhiteBIC"><?php echo $games['totalCompleted'] ?></div>
    </div>
    <div class="stat_points">
        <div class="verdana11pxWhiteBIR"><?php echo $games['totalPoints'] ?></div>
    </div>
    <br clear="left"/>
</div>
<div class="stat_entries" id="stat_entries1">
    <?php if (is_array($games)): ?>
    <?php $i = 1; ?>
    <?php foreach ($games as $game): ?>
        <div class="stat_entry<?php echo $i > 1 ? $i : '' ?>">
            <div class="stat_entry_type">
                <div class="verdana11pxBI"><?php echo $game['game_name'] ?></div>
            </div>
            <div class="stat_entry_completedNum">
                <div class="verdana11pxC"><?php echo $game['total'] ?></div>
            </div>
            <div class="stat_entry_points">
                <div class="verdana11pxR"><?php echo $game['points'] ?></div>
            </div>
            <div class="clear_left"></div>
        </div>
        <?php $i++ ?>
        <?php endforeach ?>
    <?php endif ?>
</div>

<div class="stat_header" onclick="toggleEntry(2); return false;">
    <div id="stat_arrow2" class="stat_arrow"></div>
    <div class="stat_type">
        <div class="verdana12pxWhiteB">Message Boards</div>
    </div>
    <div class="stat_completed">
        <div class="verdana11pxWhiteBIC"><?php echo $messages['totalCompleted'] ?></div>
    </div>
    <div class="stat_points">
        <div class="verdana11pxWhiteBIR"><?php echo $messages['totalPoints'] ?></div>
    </div>
    <br clear="left"/>
</div>
<div class="stat_entries" id="stat_entries2">
    <?php foreach ($messages as $cipherName => $message): ?>
    <?php if ($cipherName != 'totalCompleted' && $cipherName != 'totalPoints'): ?>
        <div class="stat_entry">
            <div class="stat_entry_type">
                <div class="verdana11pxBI"><?php echo $cipherName ?></div>
            </div>
            <div class="stat_entry_completed">
                <div class="verdana_11px"><?php echo $message['easy']['total'] ?> Easy<br/>
                    <?php echo $message['medium']['total'] ?> Medium<br/>
                    <?php echo $message['hard']['total'] ?> Hard<br/>
                    <?php echo $message['expert']['total'] ?> Expert<br/>
                    <?php echo $message['insane']['total'] ?> Insane
                </div>
            </div>
            <div class="stat_entry_points">
                <div class="verdana11pxR"><?php echo $message['easy']['points'] ?><br/>
                    <?php echo $message['medium']['points'] ?><br/>
                    <?php echo $message['hard']['points'] ?><br/>
                    <?php echo $message['expert']['points'] ?><br/>
                    <?php echo $message['insane']['points'] ?>
                </div>
            </div>
            <div class="clear_left"></div>
        </div>
        <?php endif ?>
    <?php endforeach ?>
</div>

<div class="stat_header" onclick="toggleEntry(3); return false;">
    <div id="stat_arrow3" class="stat_arrow"></div>
    <div class="stat_type">
        <div class="verdana12pxWhiteB">Jokeboard</div>
    </div>
    <div class="stat_completed">
        <div class="verdana11pxWhiteBIC"><?php echo $jokes['totalCompleted'] ?></div>
    </div>
    <div class="stat_points">
        <div class="verdana11pxWhiteBIR"><?php echo $jokes['totalPoints'] ?></div>
    </div>
    <br clear="left"/>
</div>
<div class="stat_entries" id="stat_entries3">
    <?php $i = 0; ?>
    <?php foreach ($jokes as $cipherName => $joke): ?>
    <?php if ( !in_array( $cipherName, array ( 'totalPoints','totalCompleted', 'points' ) ) ): ?>
        <div class="stat_entry<?php echo ($i > 1 ? '2' : '') ?>">
            <div class="stat_entry_type">
                <div class="verdana11pxBI"><?php echo $cipherName ?></div>
            </div>
            <div class="stat_entry_completedNum">
                <div class="verdana11pxC"><?php echo $joke['total'] ?></div>
            </div>
            <div class="stat_entry_points">
                <div class="verdana11pxR"><?php echo $joke['points'] ?></div>
            </div>
            <div class="clear_left"></div>
        </div>
        <?php endif ?>
    <?php endforeach ?>
</div>

<div class="stat_header" onclick="toggleEntry(4); return false;">
    <div id="stat_arrow4" class="stat_arrow"></div>
    <div class="stat_type">
        <div class="verdana12pxWhiteB">Cipher Tools</div>
    </div>
    <div class="stat_completed">
        <div class="verdana11pxWhiteBIC"><?php echo $tools['totalCompleted'] ?></div>
    </div>
    <div class="stat_points">
        <div class="verdana11pxWhiteBIR"><?php echo $tools['totalPoints'] ?></div>
    </div>
    <br clear="left"/>
</div>
<div class="stat_entries" id="stat_entries4">
    <?php $i = 1; ?>
    <?php foreach( $tools as $cipherName => $tool ): ?>
        <?php if( !in_array( $cipherName, array( 'totalPoints', 'totalCompleted') ) ): ?>
        <div class="stat_entry<?php echo $i > 1 ? '2' : '' ?>">
            <div class="stat_entry_type">
                <div class="verdana11pxBI"><?php echo $cipherName ?></div>
            </div>
            <div class="stat_entry_completed">
                <div class="verdana11pxC"><?php echo $tool['encrypt']['total'] ?> Encryptions<br/>
                    <?php echo $tool['decrypt']['total'] ?> Decryptions
                </div>
            </div>
            <div class="stat_entry_points">
                <div class="verdana11pxR"><?php echo $tool['encrypt']['points'] ?><br/>
                    <?php echo $tool['decrypt']['points'] ?>
                </div>
            </div>
            <div class="clear_left"></div>
        </div>
    <?php $i++ ?>
        <?php endif ?>
    <?php endforeach ?>

</div>