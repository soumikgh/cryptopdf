<?php if( !empty( $ciphers) && count( $ciphers ) > 0 ): ?>
    <option value="0">Choose Cipher </option>
    <?php foreach( $ciphers as $key => $cipher ): ?>
        <?php if( strlen( $cipher['cipher_name'] ) ): ?>
    <option id="option_cipher<?php echo $key ?>" value="<?php echo $cipher['id'] ?>"><?php echo html_entity_decode( $cipher['cipher_name'] ) ?></option>
        <?php endif ?>
    <?php endforeach ?>
<?php else: ?>
        <option>No ciphers found</option>
<?php endif ?>