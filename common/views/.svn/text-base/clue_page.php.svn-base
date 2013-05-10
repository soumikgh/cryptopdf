<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Conforming XHTML 1.0 Transitional Template</title>
		<style type="text/css">
			* {font-family:courier}
			.clue {font-size:18px;padding-top:78px;padding-bottom:32px}
			.letter { letter-spacing: 13px; text-align:justify;text-justify: distribute; text-align-last: justify }
			.number { letter-spacing:1.75px;  text-align:justify;text-justify: distribute; text-align-last: justify}
			.label {font-size:13px;width:50%;border-top:1px dashed black; font-family: serif;padding-top:5px }
			.right {text-align:right}
			.last {border-bottom:1px dashed black;}
			.break {page-break-after:always}
			.page {padding-top:55px}
			td{width:100%}
		</style>
		<metahttp-equiv="content-type" content="text/html; charset=utf-8"/>
	</head>
	
	<body>
		<?php if ( !empty( $clues ) && is_array( $clues ) ): ?>
			<?php $i = 0; ?>
			<?php $totalClues = count( $clues ); ?>
		
			<?php foreach ( $clues as $clue ): ?>
		
				<?php $i++; ?>
				
				<table style="width:100%;">
					<thead>
						<tr>
							<th style="text-align:left;padding-bottom:10px;vertical-align:bottom"><img src="CryptoLogo.png" alt="Crypto Logo"/> Treasure Hunt</th>
							<th style="text-align:right;padding-bottom: 10px;vertical-align:bottom">Clue <?php echo $i ?></th>
						</tr>
					</thead>
					<tbody>
						<?php if ( !empty( $clue['clue_parts'] ) && is_array( $clue['clue_parts'] ) ): ?>
							<?php $j = 0; ?>
							<?php $cluePartCounter = 0; ?>
							<?php $totalClueParts = count( $clue['clue_parts'] ); ?>
							<?php foreach ( $clue['clue_parts'] as $clue_part ): ?>
								<?php $lastClue = ( $j == $totalClueParts ? true : false ); ?>
								<?php $j++; ?>
								<?php $cluePartCounter++ ?>
								<?php echo load_view( 'clue', array( 'cipher_type' => $clue['cipher_type'], 'last_clue' => $lastClue, 'clue_number' => $i,'part' => $j, 'current_clue_per_page' => $cluePartCounter, 'cipher' => $clue['cipher'], 'key' => $clue['key'], 'clue' => $clue_part, 'page_break' => $pageBreak ) ) ?>
								<?php $cluePartCounter = $cluePartCounter == 5 ? 0 : $cluePartCounter; ?>
							<?php endforeach ?>

						<?php else: ?>
							<tr><td></td></tr>
						<?php endif ?>
					</tbody>
				</table>
				
				<?php if( $i < ( $totalClues -1 ) ): ?>
					<pagebreak/>
				<?php endif ?>
				
				<?php $j = 0; ?>
			<?php endforeach ?>
		<?php endif ?>
	</body>
</html>