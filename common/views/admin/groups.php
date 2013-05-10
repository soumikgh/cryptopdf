<table id="messageboard">
    <thead>
        <tr class="bg_blue">
            <th class="headerLineL headerWhite">Group Name</th>
            <th class="headerLine">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php if (is_array($groups)): ?>
            <?php foreach ($groups as $group): ?>
                <?php echo load_view('admin/group', $group); ?>
            <?php endforeach ?>
        <?php endif; ?>
    </tbody>
</table>