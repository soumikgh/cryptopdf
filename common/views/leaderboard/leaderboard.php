<ul>
    <?php if( !empty( $users) && count( $users ) > 0 ): ?>
        <?php foreach( $users as $userId => $points ): ?>
            <?php $user = new User( $db, $userId ); ?>
            <?php $codename = strlen( $user->encryptedText ) > 0 ? $user->encryptedText .'-'. $user->codenameCounter : $user->codename . '-' . $user->codenameCounter; ?>
            <?php $gap = 100 - strlen( $user->username . $points ); ?>
            <li><?php echo str_pad( $codename . ' ', $gap, '.' ) ?> <?php echo $points ?></li>
        <?php endforeach ?>
    <?php else: ?>
        <li>No users</li>
    <?php endif ?>
</ul>