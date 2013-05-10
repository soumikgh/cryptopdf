<?php 
$ciphers = (string)displayKeys( $clue );
$count = 1;
$eCiphers = explode( ',', $ciphers );
unset( $eCiphers[0] );
echo $clue['2'] .'<br />';
echo implode( ',<br />', $eCiphers );
?>