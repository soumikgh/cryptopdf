	<tr>
		<td class="label"><?php echo $cipher ?> (Key <?php echo $key ?>)</td>
		<td class="label" style="text-align:right">Clue <?php echo $clue_number ?>, Part <?php echo $part ?></td>
	</tr>
	
<?php if( $current_clue_per_page < 5 && !$last_clue ): ?>
	<tr>
		<td class="clue<?php echo ( $last_clue ? ' last' : '' ); ?> <?php echo $cipher_type ?>" colspan="2"><?php echo $clue ?></td>
	</tr>
<?php else: ?>
	<tr>
		<td class="clue<?php echo ( $last_clue ? ' last' : '' ); ?> <?php echo $cipher_type ?>" style="border-bottom:1px dashed black"colspan="2"><?php echo $clue ?></td>
	</tr>
	</table>
	<pagebreak/>
<table style="width:100%;">
	<thead>
		<th style="text-align:left;padding-bottom:10px;vertical-align:bottom"><img src="CryptoLogo.png" alt="Crypto Logo"/> Treasure Hunt</th>
		<th style="text-align:right;padding-bottom: 10px;vertical-align:bottom">Clue <?php echo $clue_number ?></th>
	</thead>
<?php endif ?>