<table cellpadding="0" cellspacing="0" border="0" width="100%" id="messageboard">
    <thead>
    <tr class="bg_blue">
        <th class="headerLineL" width="158">
            <div class="headerWhite">Actions</div>
        </th>
        <th class="headerLine">
            <div class="headerWhite"><a class="headerWhite" href="<?php echo sort_url( 'id' ) ?>">Message<br/>Number</a></div>
        </th>
        <th class="headerLine">
            <div class="headerWhite"><a class="headerWhite" href="<?php echo sort_url( 'theme' ) ?>">Theme</a></div>
        </th>
        <th class="headerLine">
            <div class="headerWhite"><a class="headerWhite" href="<?php echo sort_url( 'cipher' ) ?>">Cipher</a></div>
        </th>
        <th class="headerLine">
            <div class="headerWhite"><a class="headerWhite" href="<?php echo sort_url( "difficulty" ) ?>">Difficulty</a></div>
        </th>
        <th class="headerLineR">
            <div class="headerWhite"><a class="headerWhite" href="<?php echo sort_url( "decrypted" ) ?>">Cracked By</a></div>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($messages) && count($messages) > 0): ?>
        <?php $i = 1; ?>
        <?php foreach ($messages as $message): ?>
            <?php $message['row'] = $i ?>
            <?php echo load_view('boards/message', $message); ?>
            <?php $i++ ?>
            <?php endforeach ?>
        <?php else: ?>
    <tr>
        <td colspan="7" style="text-align:center;padding:5px">No Messages to crack</td>
    </tr>
        <?php endif ?>
    </tbody>
</table>