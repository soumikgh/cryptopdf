<?php if (!$valid): ?>
    <p>You do not have permission to view this page.</p>
<?php else: ?>
    <div class="login_window">
        <div class="login_bg" style="float:left; position:relative; z-index:10;">
            <noscript><strong class="arial18pxRedB">Please Turn JavaScript on in your browser to view this page properly!</strong><br /><br /></noscript>
            <table cellpadding="2" cellspacing="0" border="0">
                <tr>
                    <td align="right"><div class="verdana_12pxTanB" style="margin-bottom:10px;">User ID:</div></td>
                    <td align="left"><div class="verdana_12pxBI" style="margin-bottom:10px;"><?php echo getUserId() ?></div></td>
                </tr>
                <tr>
                    <td align="right"><div class="verdana_12pxTanB">Username:</div></td>
                    <td align="left"><div class="verdana_12pxBI"><?php echo $username ?></div></td>
                </tr>
                <tr>
                    <td align="right"><div class="verdana_12pxTanB" style="margin-bottom:10px; margin-top:10px;">Codename:</div></td>
                    <td align="left"><div class="verdana_12pxBI" style="margin-bottom:10px; margin-top:10px;"><?php echo $codename ?></div></td>
                </tr>
                <tr>
                    <td align="right"><div class="verdana_12pxTanB">Encrypted Codename:</div></td>
                    <td align="left"><div class="verdana_12pxBI"><?php echo $encrypted_codename ?></div></td>
                </tr>
            </table>
        </div>
        <br clear="left" />
        <div class="login_entryB" style="margin-top:-34px; float:left; position:relative; z-index:9;"></div>

    </div>
    <br clear="left" />
    <div style="margin-top:20px; margin-bottom:6px;" class="arial14pxBlackB"><?php echo $username ?>'s Usage Stats:</div>

    <div style="border:3px solid #0044cc; width:894px;">
        <table cellpadding="0" cellspacing="0" border="0" width="894">
            <tr class="bg_blue">
                <th class="headerLineL"><div style="width:1px;"></div></th>
            <?php if (!empty($ciphers) && count($ciphers) > 0): ?>
                <?php foreach ($ciphers as $cipher): ?>
                    <th class="headerLine"><div class="headerWhite"><?php echo $cipher['cipher_name'] ?></div></th>
                <?php endforeach ?>
            <?php endif ?>
            </tr>
            <tr class="bg_tan">
                <td class="columnLineL_done"><div class="arial14pxBlackBI">Message Board</div></td>
                <?php if (!empty($ciphers) && count($ciphers) > 0): ?>
                    <?php foreach ($ciphers as $i => $cipher): ?>
                        <?php if (!empty($messages[$cipher['cipher_name']]['total'])): ?>
                            <td class="columnLine_admin<?php echo ( count($ciphers) - 1 ) <= $i ? 'R' : '' ?>"><?php echo $messages[$cipher['cipher_name']]['total'] ?></td>
                        <?php else: ?>
                            <td class="columnLine_admin<?php echo ( count($ciphers) - 1 ) <= $i ? 'R' : '' ?>">0</td>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>
            </tr>
            <tr class="bg_tan">
                <td class="columnLineL_done"><div class="arial14pxBlackBI">Joke Board</div></td>
                <?php if (!empty($ciphers) && count($ciphers) > 0): ?>

                    <?php foreach ($ciphers as $i => $cipher): ?>
                        <?php if (!empty($jokes[$cipher['cipher_name']]['total'])): ?>
                            <td class="columnLine_admin<?php echo ( count($ciphers) - 1 ) <= $i ? 'R' : '' ?>"><?php echo $jokes[$cipher['cipher_name']]['total'] ?></td>
                        <?php else: ?>
                            <td class="columnLine_admin<?php echo ( count($ciphers) - 1 ) <= $i ? 'R' : '' ?>">0</td>
                        <?php endif ?>

                    <?php endforeach ?>
                <?php endif ?>
            </tr>
            <tr class="bg_tan">
                <td class="columnLineL_done"><div class="arial14pxBlackBI">Cipher Tools</div></td>
                <?php if (!empty($ciphers) && count($ciphers) > 0): ?>
                    <?php foreach ($ciphers as $i => $cipher): ?>
                        <?php if (!empty($tools[$cipher['cipher_name']]['total'])): ?>
                            <td class="columnLine_admin<?php echo ( count($ciphers) - 1 ) <= $i ? 'R' : '' ?>"><?php echo $tools[$cipher['cipher_name']]['total'] ?></td>
                        <?php else: ?>
                            <td class="columnLine_admin<?php echo ( count($ciphers) - 1 ) <= $i ? 'R' : '' ?>">0</td>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>
            </tr>
            <tr class="bg_tan">
                <td class="columnLineL_done"><div class="arial14pxBlackBI">Single Player Game</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">1</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">2</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">0</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">1</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">2</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">1</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">1</div></td>
                <td class="columnLine_adminR"><div class="arial11pxBlack">0</div></td>
            </tr>
            <tr class="bg_tan">
                <td class="columnLineL_done"><div class="arial14pxBlackBI">Multiplayer Game</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">1</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">2</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">0</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">1</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">2</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">1</div></td>
                <td class="columnLine_admin"><div class="arial11pxBlack">1</div></td>
                <td class="columnLine_adminR"><div class="arial11pxBlack">0</div></td>
            </tr>
        </table>
    </div>
<?php endif ?>