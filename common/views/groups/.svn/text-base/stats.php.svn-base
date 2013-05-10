<table style="width:100%;">
    <thead>
    <tr class="bg_blue">
        <th></th>
        <th>Codename</th>
        <th colspan="<?php echo count($ciphers) ?>">Message Board</th>
        <th colspan="<?php echo count($ciphers) ?>">Joke Board</th>
        <th colspan="<?php echo count($ciphers) ?>">Cipher Board</th>
        <th colspan="<?php echo count($ciphers) ?>">Single Player Game</th>
        <th colspan="<?php echo count($ciphers) ?>">Multiplayer Game</th>
    </tr>
    <tr class="bg_blue">
        <td></td>
        <td></td>
        <?php for ($i = 0; $i < 5; $i++): ?>
        <?php foreach ($ciphers as $cipher): ?>
            <th class="vertical"><?php echo $cipher['cipher_name'] ?></th>
            <?php endforeach ?>
        <?php endfor ?>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($users) && count($users) > 0): ?>

        <?php foreach ($users as $user): ?>
        <tr class="bg_tan">
            <td><?php echo $user['user_id'] ?></td>
            <td><?php echo $user['codename'] ?>-<?php echo $user['codename_counter'] ?></td>
            <?php $i = 0; ?>
            <?php foreach ($user['messages'] as $key => $message): ?>
            <td><?php echo $message['total'] ?></td>
            <?php $i++ ?>
            <?php endforeach ?>
            <?php for ($j = $i; $j < count($ciphers); $j++): ?>
            <td>0</td>
            <?php endfor ?>

            <?php $i = 0; ?>
            <?php foreach ($user['jokes'] as $key => $message): ?>
            <td><?php echo $message['total'] ?></td>
            <?php $i++ ?>
            <?php endforeach ?>
            <?php for ($j = $i; $j < count($ciphers); $j++): ?>
            <td>0</td>
            <?php endfor ?>

            <?php $i = 0; ?>
            <?php foreach ($user['tools'] as $key => $message): ?>
            <td><?php echo $message['total'] ?></td>
            <?php $i++ ?>
            <?php endforeach ?>
            <?php for ($j = $i; $j < count($ciphers); $j++): ?>
            <td>0</td>
            <?php endfor ?>
        </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>