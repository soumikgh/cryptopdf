
        <?php if ( !empty( $groups ) && count( $groups ) > 0 ): ?>
            <?php foreach ( $groups as $group ): ?>
                <?php if( strlen( $group['group_name'] ) ): ?>
                    <?php echo load_view( 'groups/profile_group', $group ); ?>
                <?php endif ?>
            <?php endforeach ?>
        <?php else: ?>

        <?php endif; ?>