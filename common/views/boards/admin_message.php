<tr id="row'+i+'" class="bg_tan" onmouseover="getRowOver('+i+'); return false;" onmouseout="getRowOut('+i+'); return false;">
    <td class="columnLine_adminL" id="published_td'+i+'"><div class="arial14pxBlackI" id="published'+i+'"><?php echo $published == 1 ? 'Yes' : 'No' ?></div></td>
    <td class="columnLine_admin"><div class="arial11pxBlack"><a href="#" onclick="editRow('+i+'); return false;" class="verdana_9pxBlueBLH13">Edit</a><br />
            <a href="#" onclick="publishRow('+i+'); return false;" class="verdana_9pxBlueBLH13">Publish</a><br />
            <a href="#" onclick="unpublishRow('+i+'); return false;" class="verdana_9pxBlueBLH13">Unpublish</a><br />
            <a href="#" onclick="deleteRow('+i+'); return false;" class="verdana_9pxBlueBLH13">Delete</a></div></td>
    <td class="columnLine_admin"><div class="arial14pxBlackLH18" id="message'+i+'"><?php echo base_convert( $id, 10, 8 ) ?></div></td>
    <td class="columnLine_admin"><div class="arial14pxBlackILH18" id="theme'+i+'"></div></td>
    <td class="columnLine_admin"><div class="arial11pxBlack" id="cipher'+i+'"></div></td>
    <td class="columnLine_admin"><div class="arial11pxBlack" id="difficulty'+i+'"></div></td>
    <td class="columnLine_adminR"><div class="arial11pxBlack" id="admin_id'+i+'"></div></td>
</tr>