<table cellpadding="0" cellspacing="0" border="0" width="100%" id="messageboard">
    <tr class="bg_blue">
        <th class="headerLineL"><div class="headerWhite">Published?</div></th>
<th class="headerLine"><div class="headerWhite">Actions</div></th>
<th class="headerLine"><div class="headerWhite">Message<br />Number</div></th>
<th class="headerLine"><div class="headerWhite">Theme</div></th>
<th class="headerLine"><div class="headerWhite">Cipher</div></th>
<th class="headerLine"><div class="headerWhite">Difficulty</div></th>
<th class="headerLineR"><div class="headerWhite">Decrypted By</div></th>
</tr>

<?php if( !empty( $messages ) && count( $messages ) > 0 ): ?>
    <?php foreach( $messages as $message ): ?>
        <?php echo load_view( 'boards/message', $message ) ?>
    <?php endforeach ?>
<?php else: ?>
    <tr><td colspan="7">No Messages yet</td></tr>
<?php endif ?>
</table>