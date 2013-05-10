<?php

$header = array();
$header['title'] = 'CryptoClub Usage Stats';
$header['css'][] = '/css/admin.css';
$header['css'][] = '/css/chosen.css';

$footer = array();
$footer['js'][] = '/js/chosen.jquery.min.js';

echo load_view('admin/admin_header', $header);
echo load_view('admin/navigation');
?>
<div class="row">
    <p>Download usage data for all or selected data.</p>

    <p>
    <div class="row">
        <div class="btn-group btn-group-vertical span2">
            <button class="btn selectAll" rel="all">Select All</button>
            <button class="btn deselectAll" rel="all">Deselect All</button>
            <button class="btn download">Download CSV</button>
        </div>

        <div class="span4">
            Group Filter <select data-placeholder="Type or Choose a Group ..." class="chzn-select">
                <?php if( !empty( $groups ) ): ?>
                    <?php foreach( $groups as $group ): ?>
                        <option><?php echo $group['group_name'] ?></option>
                    <?php endforeach ?>
                <?php endif ?>
            </select> <button class="btn">Filter</button>
        </div>
    </div>
</p>

</div>
<div class="row">
    <?php echo load_view('admin/fields_form') ?>
</div>

<?php echo load_view('admin/admin_footer', $footer ); ?>