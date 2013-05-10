<table class="data">
    <thead>
        <?php echo load_view( 'debug/headers', array( 'data' => $data ) ) ?>
    </thead>
    <tbody>
        <?php if( is_array( $data ) ): ?>
            <?php foreach( $data as $values ): ?>
                <?php echo load_view( 'debug/rows', array( 'row' => $values ) ) ?>
            <?php endforeach ?>
        <?php else: ?>
        
        <?php endif ?>
    </tbody>
</table>