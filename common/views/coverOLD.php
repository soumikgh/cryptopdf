<?php 
//require '../header.php';
?>
<table>
    <tr>
        <td><img src="/images/logo_crypto.gif" alt="Crypto Club Logo" /></td>
        <td style="font-size:18px">
            [User Title]<br /><br /><br />Directions for Setting Up Your Treasure Hunt
        </td>
    </tr>
    <tr>
        <td></td>
        <td style="font-size:18px;vertical-alignmnet:middle"></td>
    </tr>
</table>

<ol style="font-size:16px;">
    <li><span style="color:black;">&nbsp;</span><span style="font-style: italic;color:blue">Prepare clue envelopes</span> by doing the following for each clue:
        <ul style="font-size:10px;">
            <li>&nbsp;</li>
            <li>
                Print one copy of the clue for each group. 
            </li>
            <li>
                Cut each copy into parts along the dotted lines and staple the parts together to make a packet.
            </li>
            <li>
                Put identical clue packets into an envelope, one packet for each group. 
            </li>
            <li>
                Write on the envelope the clue number and the location where the clue should be hidden. 
            </li>
        </ul>
    </li>
    
    <li>
        <span style="color:blue;font-style: italic">Hide the clue envelopes</span> in the locations described on the envelopes.
    </li>
    <li>
        <span style="color:blue;font-style: italic">Hide the treasure</span> in the location described by the last clue.
    </li>
    <li>
        <span style="color:blue;font-style: italic">Divide students into groups.</span> It is recommended to put the same number of students per group as there are parts to your clues, so that every student can have a part to work on. 
    </li>
    <li>
        <span style="color:blue;font-style: italic">Begin the hunt</span> by opening the first clue envelope and distributing its packets to the groups. 
    </li>
</ul>

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