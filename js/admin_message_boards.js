var admin_id=["",11,12,13];
var alpha_chars="abcdefghijklmnopqrstuvwxyz";
var alpha_chars_up=alpha_chars.toUpperCase();
var alpha_new="";
var array_cipher=[""];
var array_plain=[""];
var charLocation;
var ciphers=[0,3,1,2];
var cipher_num=0;
var cipher_text="";
var ciphertext=["","GERC S KSI XIVO IRCSY MO SAA. SY LXEAK CSA YHXLI CH LIR RCS LMAA. MUIOFUOID FLKUA, ULIAFDSFF MJUDO, FDOS UF O MIUDF JI MOFJD IJ NIUDO. 1","GERC S KSI XIVO IRCSY MO SAA. SY LXEAK CSA YHXLI CH LIR RCS LMAA. MUIOFUOID FLKUA, ULIAFDSFF MJUDO, FDOS UF O MIUDF JI MOFJD IJ NIUDO. 2","GERC S KSI XIVO IRCSY MO SAA. SY LXEAK CSA YHXLI CH LIR RCS LMAA. MUIOFUOID FLKUA, ULIAFDSFF MJUDO, FDOS UF O MIUDF JI MOFJD IJ NIUDO. 3"];
var curr_keyword_letter=0;
var currLoc=0;
var currRow=0;
var currWord="";
var difficulty=[0,1,2,3];
var keyA="";
var keyB="";
//if cipher is 2 or 6, keysA refers to option number selected
var keysA=["",2,8,11];
var keysB=["","","",12];
var keyword_string="";
var last_entry=0;
var message_id=["",1210,1211,1212];
var message_published=["","Yes","No","No"];
var message_text=["","message text 1","message text 2","message text 3"];
var mult_num=0;
var num_added=0;
var object_id="";
var plus_num=0;
var possible_ciphers=["","Additive","Affine","Caesar","Keyword","Multiplicative","Vigen&egrave;re"];
var possible_diff=["","Easy","Medium","Difficult"];
var possible_themes=["","1776 Declaration","Lincoln Address","Presidential Joke","Monticello Home","This is a longer theme for testing."];
var saved_keyword="";
var startNum=0;
var stringChar;
var sub_order=[""];
var temp_ciphertext="";
var temp_string="";
var tempHTML="";
var tempNum=0;
var tempText="";
var theme=[0,3,2,1];
	
function newMessageToCrack()
{
    admin_id[admin_id.length]=22;
    ciphers[ciphers.length]=0;
    ciphertext[ciphertext.length]="";
    difficulty[difficulty.length]=0;
    keysA[keysA.length]="";
    keysB[keysB.length]="";
    message_id[message_id.length]=message_id[message_id.length-1]+1;
    message_published[message_published.length]="No";
    message_text[message_text.length]="";
    theme[theme.length]=0;
    currRow=admin_id.length-1;
}
newMessageToCrack();

function updateBoard()
{
    tempHTML='<table cellpadding="0" cellspacing="0" border="0" width="100%" id="messageboard">';
    tempHTML+='		<tr class="bg_blue">';
    tempHTML+='			<th class="headerLineL"><div class="headerWhite">Published?</div></th>';
    tempHTML+='			<th class="headerLine"><div class="headerWhite">Actions</div></th>';
    tempHTML+='			<th class="headerLine"><div class="headerWhite">Message<br />Number</div></th>';
    tempHTML+='			<th class="headerLine"><div class="headerWhite">Theme</div></th>';
    tempHTML+='			<th class="headerLine"><div class="headerWhite">Cipher</div></th>';
    tempHTML+='			<th class="headerLine"><div class="headerWhite">Difficulty</div></th>';
    tempHTML+='			<th class="headerLineR"><div class="headerWhite">Decrypted By</div></th>';
    tempHTML+='		</tr>';
    for (i=1; i<ciphers.length-1; i++)
    {
        tempHTML+='<tr id="row'+i+'" class="bg_tan" onmouseover="getRowOver('+i+'); return false;" onmouseout="getRowOut('+i+'); return false;">';
        tempHTML+='		<td class="columnLine_adminL" id="published_td'+i+'"><div class="arial14pxBlackI" id="published'+i+'"></div></td>';
        tempHTML+='		<td class="columnLine_admin"><div class="arial11pxBlack"><a href="#" onclick="editRow('+i+'); return false;" class="verdana_9pxBlueBLH13">Edit</a><br />';
        tempHTML+='			<a href="#" onclick="publishRow('+i+'); return false;" class="verdana_9pxBlueBLH13">Publish</a><br />';
        tempHTML+='			<a href="#" onclick="unpublishRow('+i+'); return false;" class="verdana_9pxBlueBLH13">Unpublish</a><br />';
        tempHTML+='			<a href="#" onclick="deleteRow('+i+'); return false;" class="verdana_9pxBlueBLH13">Delete</a></div></td>';
        tempHTML+='		<td class="columnLine_admin"><div class="arial14pxBlackLH18" id="message'+i+'"></div></td>';
        tempHTML+='		<td class="columnLine_admin"><div class="arial14pxBlackILH18" id="theme'+i+'"></div></td>';
        tempHTML+='		<td class="columnLine_admin"><div class="arial11pxBlack" id="cipher'+i+'"></div></td>';
        tempHTML+='		<td class="columnLine_admin"><div class="arial11pxBlack" id="difficulty'+i+'"></div></td>';
        tempHTML+='		<td class="columnLine_adminR"><div class="arial11pxBlack" id="admin_id'+i+'"></div></td>';
        tempHTML+='</tr>';
    }
    tempHTML+='</table>';
    document.getElementById('content_messageboard').innerHTML=tempHTML;
	
    for (i=1; i<message_published.length-1; i++)
    {
        updateRow(i);
    }
    addThemeOptions();
}
	
function deleteRow(num)
{
    admin_id.splice(num,1);
    ciphers.splice(num,1);
    ciphertext.splice(num,1);
    difficulty.splice(num,1);
    keysA.splice(num,1);
    keysB.splice(num,1);
    message_id.splice(num,1);
    message_published.splice(num,1);
    message_text.splice(num,1);
    theme.splice(num,1);
    currRow=admin_id.length-1;
    updateBoard();
}
	
function updateRow(num)
{
    if (document.getElementById)
    {
        document.getElementById('published'+num).innerHTML=message_published[num];
        document.getElementById('message'+num).innerHTML=message_id[num];
        document.getElementById('theme'+num).innerHTML=possible_themes[theme[num]];
        document.getElementById('cipher'+num).innerHTML=possible_ciphers[ciphers[num]];
        document.getElementById('difficulty'+num).innerHTML=possible_diff[difficulty[num]];
        document.getElementById('admin_id'+num).innerHTML=admin_id[num];
        if (message_published[num]=="No")
        {
            document.getElementById('published_td'+num).setAttribute("class","columnLine_adminL");
            document.getElementById('published_td'+num).setAttribute("className","columnLine_adminL");
            document.getElementById('published'+num).setAttribute("class","arial14pxBlackI");
            document.getElementById('published'+num).setAttribute("className","arial14pxBlackI");
        }
        else
        {
            document.getElementById('published_td'+num).setAttribute("class","columnLine_adminL_done");
            document.getElementById('published_td'+num).setAttribute("className","columnLine_adminL_done");
            document.getElementById('published'+num).setAttribute("class","arial14pxBlackBI");
            document.getElementById('published'+num).setAttribute("className","arial14pxBlackBI");
        }
    }
}
	
function publishRow(num)
{
    message_published[num]="Yes";
    updateRow(num);
}
	
function unpublishRow(num)
{
    message_published[num]="No";
    updateRow(num);
}
	
function editRow(num)
{
    if (document.getElementById)
    {
        if (num!=0)
        {
            currRow=num;
        }
        else
        {
            currRow=ciphers.length-1;
        }
        keyA=keysA[num];
        keyB=keysB[num];
        document.formContainer['message_text'].value=message_text[num];
			
        document.getElementById('select_theme').selectedIndex=theme[num];
        document.getElementById('option_theme'+theme[num]).selected=true;
		
        document.getElementById("theme_text").style.display="none";
			
        document.getElementById('select_cipher').selectedIndex=ciphers[num];
        document.getElementById('option_cipher'+ciphers[num]).selected=true;
        //alert('passed cipher updater');
			
        document.getElementById('select_difficulty').selectedIndex=difficulty[num];
        document.getElementById('option_diff'+difficulty[num]).selected=true;
        //alert('passed difficulty updater');
		
        if (num>0)
        {
            cipherKeyFields(ciphers[num],1);
        }
        else
        {
            cipherKeyFields(ciphers[num],0);
        }
    }
}
	
function checkSubmit()
{
    if (document.formContainer['message_text'].value=="" || document.formContainer['message_text'].value==" ")
    {
        return;
    }
		
    if (document.getElementById('select_theme').selectedIndex==0)
    {
        return;
    }
    else if (document.getElementById('select_theme').selectedIndex==possible_themes.length)
    {
        if (document.formContainer['theme_input'].value=="" || document.formContainer['theme_input'].value==" ")
        {
            return;
        }
    }
		
    if (cipher_num==1)
    {
        if (keyA!="")
        {
        //tempHTML+='Key = '+keyA;
        }
        else
        {
            return;
        }
    }
    else if (cipher_num==2)
    {
        if (keyA!=0)
        {
        //tempHTML+='Multiplicative<br />Key = '+keyA+'<br /><br />';
        }
        else
        {
            return;
        }
        if (keyB!="")
        {
        //tempHTML+='Additive = '+keyB;
        }
        else
        {
            return;
        }
    }
    else if (cipher_num==3)
    {
        if (keyA!="")
        {
        //tempHTML+='Key = '+keyA;
        }
        else
        {
            return;
        }
    }
    else if (cipher_num==4)
    {
        if (keyA!="" && keyB!="")
        {
        //tempHTML+='Keyword = '+keyA+'<br /><br />';
        //tempHTML+='keyletter = '+keyB;
        }
        else
        {
            return;
        }
    }
    else if (cipher_num==5)
    {
    //tempHTML+='Key = '+keyA;
    }
    else if (cipher_num==6)
    {
        if (keyA!=0)
        {
        //tempHTML+='Key = '+keyA;
        }
        else
        {
            return;
        }
    }
    else if (cipher_num==7)
    {
        if (keyA!="")
        {
        //tempHTML+='Keyword = '+keyA;
        }
        else
        {
            return;
        }
    }
    else
    {
        return;
    }
	
    if (document.getElementById('select_difficulty').selectedIndex==0)
    {
        return;
    }
		
    encryptText(document.formContainer['message_text'].value,cipher_num);
    //alert(cipher_text);
		
    //temp: add message to crack to arrays
    ciphers[currRow]=cipher_num;
    ciphertext[currRow]=cipher_text;
    difficulty[currRow]=document.getElementById('select_difficulty').selectedIndex;
    keysA[currRow]=keyA;
    keysB[currRow]=keyB;
    message_text[currRow]=document.formContainer['message_text'].value;
                
    
    if (document.getElementById('select_theme').selectedIndex==possible_themes.length)
    {
        //add new theme
        possible_themes[possible_themes.length]=document.formContainer['theme_input'].value;
        theme[currRow]=possible_themes.length-1;
        addThemeOptions();
    }
    else
    {
        theme[currRow]=document.getElementById('select_theme').selectedIndex;
    }
    
    $.post( '/challenges/save.php', { action:'save',message: message_text[currRow], cipher: ciphers[currRow], cipher_text:ciphertext[currRow], keya: keysA[currRow], keyb: keysB[currRow], difficulty: difficulty[currRow], theme: theme[currRow] }, function() {
        
    });
		
    //temp: add default data to arrays for next message to crack
    if (currRow==(ciphers.length-1))
    {
        newMessageToCrack();
    }
    updateBoard();
	
    //temp: reset all edit fields. will likely need to reload page with new data.
    editRow(0);
}