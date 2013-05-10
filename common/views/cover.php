<?php 
//require '../header.php';
?>
<table>
    <tr valign="top">
        <td><img src="/images/logo_crypto.gif" alt="Crypto Club Logo" /></td>
        <td><div style="padding-left:10px; font-size:22px;"><strong>[User Title]</strong></div></td>
    </tr>
</table>
<div style="font-size:18px;"><br /><strong>Directions For Setting Up Your Treasure Hunt</strong></div>
<ol style="font-size:16px; margin-top:4px;">
    <li><span style="color:blue;">Print</span> one copy of each clue page for each group.</li>
    <li><span style="color:blue">Prepare clue envelopes</span> for each clue:
        <ol style="font-size:10px;" style="list-style-type:lower-alpha">
            <li>Cut each copy of the clue into parts along the dotted lines and staple all the parts together to make a packet&#8212;one packet for each group.</li>
            <li>Put the identical clue packets into an envelope.</li>
            <li>Write the clue number on the envelope and also write the location where the clue should be hidden.</li>
        </ol>
    </li>
    <li><span style="color:blue;">Hide the clue envelopes</span> in the locations written on the envelopes.
		<span style="color:blue;">Hide the treasure</span> in the location described by the last clue.</li>
    <li><span style="color:blue;">Divide students into groups.</span> Try to put the same number of students per group as there are parts to your clues, so that every
		student can have a part to work on.</li>
    <li><span style="color:blue;">Begin the hunt</span> by opening the first clue envelope and distributing its packets to the groups.</li>
</ol>

<h3>Clue Summary</h3>

<table style="border:1px solid black;">
    <tr>
        <th style="border:1px solid black;width:55px;">Clue #</th>
        <th style="border:1px solid black;">Location to<br />Hide Clue</th>
        <th style="border:1px solid black;width:75px">Location Described</th>
        <th style="border:1px solid black;width:245px;">Clue (Plaintext and CIPHERTEXT)</th>
        <th style="border:1px solid black;">Cipher</th>
        <th style="border:1px solid black;width:60px">Is Key<br />Printed?</th>
    </tr>
    <?php if( !empty( $clues ) && count( $clues ) > 0 ): ?>
        <?php $lastHidingPlace = 'You don\'t need to hide this clue.'; ?>
        <?php foreach( $clues as $key => $clue ): ?>
            <tr>
                <td style="border:1px solid black"><?php echo $key ?></td>
                <td style="border:1px solid black"><?php echo $lastHidingPlace ?></td>
                <td style="border:1px solid black"><?php echo $clue['0'] ?></td>
                <td style="border:1px solid black"><?php echo $clue['1'] ?></td>
                <td style="border:1px solid black"><?php echo load_view( 'cover_cipher', array( 'clue' => $clue ) ) ?></td>
                <td style="border:1px solid black"><?php echo $clue['5'] == 'true' ? 'Yes' : 'No' ?></td>
            </tr>
            <?php $lastHidingPlace = $clue['0']; ?>
        <?php endforeach ?>
    <?php endif ?>
    <tr>
        <td style="border:1px solid black">Treasure</td>
        <td style="border:1px solid black"><?php echo $lastHidingPlace ?></td>
        <td style="border:1px solid black" colspan="4">The treasure can be snacks or other prizes, such as chocolate "gold coins" that match the treasure theme.</td>
    </tr>
</table>