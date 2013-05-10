
function resetFields()
{
    if (gender=="Female")
    {
        document.formContainer["gender"][0].checked=true;
    }
    else
    {
        document.formContainer["gender"][1].checked=true;
    }
    if( !codename_encrypted ) {
        setNewCodeInstrux(1);
    }
    else {
        setNewCodeInstrux(2);
    }
    setUserToggle(1);
    setUserEmailToggle(1);
    setPasswordToggle(1);
    if (parent_email!="")
    {
        document.getElementById("email_parent").value=parent_email;
    }
    updateNewsletterButton();
}
	
function setUserToggle(num)
{
    if (num==1)
    {
        tempHTML='<div style="padding-top:3px;"><a href="#" onclick="setUserToggle(2); return false;" class="verdana_12pxB"><em>'+user_name+'</em></a></div><div class="comment_padding" style="padding-left:0px;"><em>Click name to change</em></div>';
    }
    else
    {
        tempHTML='<input id="new_user" name="new_user" type="text" maxlength="20" class="input_180px" size="26" value="'+user_name+'" />';
    }
    document.getElementById('user_toggle').innerHTML=tempHTML;
}

function setUserEmailToggle(num)
{
    if (num==1)
    {
        tempHTML='<div style="padding-top:3px;"><a href="#" onclick="setUserEmailToggle(2); return false;" class="verdana_12pxB"><em>'+user_email+'</em></a></div><div class="comment_padding" style="padding-left:0px;"><em>Click email to change</em></div>';
    }
    else
    {
        tempHTML='<input id="new_user_email" name="new_user_email" type="text" class="input_180px" size="26" value="'+user_email+'" />';
    }
    document.getElementById('email_field').innerHTML=tempHTML;
}

function setPasswordToggle(num)
{
    if (num==1)
    {
        addHTML="";
        for (i=1; i<password.length+1; i++)
        {
            addHTML+="&#8226;";
        }
        tempHTML='<div style="padding-top:3px;"><a href="#" onclick="setPasswordToggle(3); return false;" class="verdana_10pxBlackB">'+addHTML+'</a> &#0160; <a href="#" onclick="setPasswordToggle(2); return false;" class="verdana_11pxB">Show</a></div><div class="comment_padding" style="padding-left:0px;"><em>Click password to change</em></div>';
    }
    else if (num==2)
    {
        tempHTML='<div style="padding-top:3px;"><a href="#" onclick="setPasswordToggle(3); return false;" class="verdana_12pxB"><em>'+password+'</em></a> &#0160; <a href="#" onclick="setPasswordToggle(1); return false;" class="verdana_11pxB">Hide</a></div><div class="comment_padding" style="padding-left:0px;"><em>Click password to change</em></div>';
    }
    else
    {
        tempHTML='<input type="text" id="password" name="password" maxlength="20" class="input_180px" size="26" value="'+password+'" />';
        document.formContainer["password_retype"].value="";
        document.getElementById("retype").style.display="block";
    }
    document.getElementById('password_field').innerHTML=tempHTML;
}
	
function setNewCodeInstrux(num)
{
 
    if (num==1)
    {
        codename_encrypted=false;
    }
    else
    {
        codename_encrypted=true;
    }
	
    if (codename_encrypted==false)
    {
        converted_text="";
        tempHTML='	<div class="verdana_12pxB" id="display_codename">'+codenames[curr_codename]+'</div>';
        tempHTML+='	<div id="encrypted_status" class="verdana_11px" style="padding-top:2px;"><em>Not Encrypted Yet</em></div>';
    }
    else
    {
        tempHTML='	<div id="display_codename" class="verdana_12pxB">'+converted_text+'</div>';
        
        tempHTML+='	<div id="encrypted_status" class="verdana_11px" style="padding-top:2px;"><em>Encrypted</em></div>';
    }
    
    tempHTML+='<div class="floatL" style="padding:3px 20px 0px 0px;"><a href="#" onclick="hideEncrypt(); getCodenames(); return false;" onmouseover="changeImages(\'btn_change\', \'images/btn_change_over.gif\'); return true;" onmouseout="changeImages(\'btn_change\', \'images/btn_change.gif\'); return true;"><img id="btn_change" name="btn_change" src="images/btn_change.gif" width="71" height="19" alt="Change" border="0" /></a></div>';
    tempHTML+='<div class="floatL" style="padding:3px 0px 0px 0px;"><a href="#" onclick="encryptCodename(); return false;" onmouseover="changeImages(\'btn_encrypt2\', \'images/btn_encrypt2_over.gif\'); return true;" onmouseout="changeImages(\'btn_encrypt2\', \'images/btn_encrypt2.gif\'); return true;"><img id="btn_encrypt2" name="btn_encrypt2" src="images/btn_encrypt2.gif" width="71" height="19" alt="Encrypt" border="0" /></a></div>';
    
    //add change btn (if all done proper, will reset encrypted to false and add in codename unencrypted) and encrypt btn
    document.getElementById('codename_instrux').innerHTML=tempHTML;
}
	
function acceptCodename()
{
    curr_codename=temp_codename;
    setNewCodeInstrux(1);
    closeCodename();
}

/*
	
function toggleNewsletter()
{
    if (join_newsletter==false)
    {
        join_newsletter=true;
    }
    else
    {
        join_newsletter=false;
    }
    updateNewsletterButton();
}
	*/
function updateNewsletterButton()
{
    if (document.images && preloadFlag==true)
    {
        if (join_newsletter==true)
        {
            document.toggle_newsletter.src="images/btn_checkmark2_on.gif";
        }
        else
        {
            document.toggle_newsletter.src="images/btn_checkmark2_off.gif";
        }
    }
    checkShowParent();
}
	
function checkShowParent()
{
    if (document.getElementById)
    {
        if (join_newsletter==true && user_age<13)
        {
            document.getElementById("parents_email").style.display="block";
        }
        else
        {
            document.getElementById("parents_email").style.display="none";
        }
    }
}

	
function viewLeaderBoards()
{
    alert("Viewing Leaderboards");
}
	
function insertKeyFields(num)
{
    if (num==0)
    {
        //nothing
        tempHTML='';
    }
    else if (num==1)
    {
        //additive
        keyA=0;
        tempHTML='<em><strong>Key&#0160;(0-25)</strong></em> <input type="text" id="key_object1" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onkeyup="checkKey(1); return false;" />';
    }
    else if (num==2)
    {
        //affine
        keyA=0;
        keyB=1;
        tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><em><strong>Multiplicative Key: </strong></em> </td><td><select id="key_object1" onchange="checkKey(2); return false;" class="select_field" style="font-style:normal;"><option value="0" id="key0">Select</option><option value="1" id="key1">1</option><option value="3" id="key2">3</option><option value="5" id="key3">5</option><option value="7" id="key4">7</option><option value="9" id="key5">9</option><option value="11" id="key6">11</option><option value="15" id="key7">15</option><option value="17" id="key8">17</option><option value="19" id="key9">19</option><option value="21" id="key10">21</option><option value="23" id="key11">23</option><option value="25" id="key12">25</option></select></td></tr>';
        tempHTML+='<tr><td align="right"><em><strong>Additive (any number)</strong></em> </td><td><input type="text" id="key_object2" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyB+'" onkeyup="checkKey(2); return false;" /></td></tr></table>';
    }
    else if (num==3)
    {
        //caesar
        keyA=0;
        tempHTML='<em><strong>Key&#0160;(0-25)</strong></em> <input type="text" id="key_object1" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onkeyup="checkKey(3); return false;" />';
    }
    else if (num==4)
    {
        //keyword
        keyA="";
        keyB="";
        tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><em><strong>Keyword</strong></em> </td><td><input type="text" id="key_object1" maxlength="26" class="form_field11px" style="width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onchange="checkKey(4); return false;" onkeyup="checkKey(4); return false;" /></td></tr>';
        tempHTML+='<tr><td align="right"><em><strong>keyletter</strong></em> </td><td align="left"><input type="text" id="key_object2" maxlength="1" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyB+'" onchange="checkKey(4); return false;" onkeyup="checkKey(4); return false;" /></td></tr></table>';
    }
    else if (num==5)
    {
        //letter to number
        tempHTML='';
        keyA=0;
    }
    else if (num==6)
    {
        //multiplicative
        keyA=0;
        tempHTML='<em><strong>Key:</strong></em> <select id="key_object1" onchange="checkKey(6); return false;" class="select_field" style="font-style:normal;"><option value="0" id="key0">Select</option><option value="1" id="key1">1</option><option value="3" id="key2">3</option><option value="5" id="key3">5</option><option value="7" id="key4">7</option><option value="9" id="key5">9</option><option value="11" id="key6">11</option><option value="15" id="key7">15</option><option value="17" id="key8">17</option><option value="19" id="key9">19</option><option value="21" id="key10">21</option><option value="23" id="key11">23</option><option value="25" id="key12">25</option></select>';
    }
    else if (num==7)
    {
        //vigenere
        keyA="";
        tempHTML='<em><strong>Keyword</strong></em> <input type="text" id="key_object1" maxlength="26" class="form_field11px" style="width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onchange="checkKey(7); return false;" onkeyup="checkKey(7); return false;" />';
    }
    else
    {
        //your own
        keyA="";
        tempHTML='<div class="your_message" style="padding-top:0px;">'+codenames[curr_codename]+'</div>';
        tempHTML+='<input id="key_object1" name="key_object1" type="text" maxlength="'+codenames[curr_codename].length+'" onchange="checkKey(8); return false;" onkeyup="checkKey(8); return false;" style="width:200px; height:16px;" size="12" class="form_monospace" value="'+keyA+'" />';
    }
}
	
function checkKey(cipher_num)
{
    if (cipher_num==1)
    {
        //additive
        if (isNaN(document.formContainer['key_object1'].value*1) || (document.formContainer['key_object1'].value*1)>25 || (document.formContainer['key_object1'].value*1)<0)
        {
            keyA=0;
            document.formContainer['key_object1'].value=keyA;
        }
        else
        {
            keyA=document.formContainer['key_object1'].value*1;
            document.formContainer['key_object1'].value=keyA;
        }
    }
    else if (cipher_num==2)
    {
        //affine
        if (document.formContainer['key_object1'].value!=0)
        {
            keyA=document.formContainer['key_object1'].value;
        }
        else
        {
            keyA=0;
        }
			
        if (isNaN(document.formContainer['key_object2'].value*1))
        {
            keyB=1;
            document.formContainer['key_object2'].value=keyB;
        }
        else
        {
            keyB=document.formContainer['key_object2'].value*1;
            document.formContainer['key_object2'].value=keyB;
        }
    }
    else if (cipher_num==3)
    {
        //caesar
        if (isNaN(document.formContainer['key_object1'].value*1) || (document.formContainer['key_object1'].value*1)>25 || (document.formContainer['key_object1'].value*1)<0)
        {
            keyA=0;
            document.formContainer['key_object1'].value=keyA;
        }
        else
        {
            keyA=document.formContainer['key_object1'].value*1;
            document.formContainer['key_object1'].value=keyA;
        }
    }
    else if (cipher_num==4)
    {
        //keyword and keyletter
        document.formContainer['key_object1'].value=document.formContainer['key_object1'].value.toUpperCase();
        tempText=document.formContainer['key_object1'].value;
		
        keyA="";
        for (m=0; m<document.formContainer['key_object1'].value.length; m++)
        {
            if (alpha_chars.toUpperCase().indexOf(tempText.charAt(m))==-1)
            {
                document.formContainer['key_object1'].value=keyA;
                break;
            }
            if (m==document.formContainer['key_object1'].value.length-1)
            {
                if (document.formContainer['key_object1'].value=="")
                {
                    document.formContainer['key_object1'].value=keyA;
                }
                else
                {
                    keyA=document.formContainer['key_object1'].value;
                }
            }
        }
			
        document.formContainer['key_object2'].value=document.formContainer['key_object2'].value.toUpperCase();
        tempText=document.formContainer['key_object2'].value;
		
        keyB="";
        if (document.formContainer['key_object2'].value=="" || alpha_chars.toUpperCase().indexOf(tempText)==-1)
        {
            document.formContainer['key_object2'].value=keyB;
        }
        else
        {
            keyB=document.formContainer['key_object2'].value;
        }
    }
    else if (cipher_num==5)
    {
    //letter to number
    }
    else if (cipher_num==6)
    {
        if (document.formContainer['key_object1'].value!=0)
        {
            keyA=document.formContainer['key_object1'].value;
        }
        else
        {
            keyA=0;
        }
    }
    else if (cipher_num==7)
    {
        document.formContainer['key_object1'].value=document.formContainer['key_object1'].value.toUpperCase();
        tempText=document.formContainer['key_object1'].value;
        keyA="";
        for (m=0; m<document.formContainer['key_object1'].value.length; m++)
        {
            if (alpha_chars.toUpperCase().indexOf(tempText.charAt(m))==-1)
            {
                document.formContainer['key_object1'].value=keyA;
                break;
            }
            if (m==document.formContainer['key_object1'].value.length-1)
            {
                if (document.formContainer['key_object1'].value=="")
                {
                    document.formContainer['key_object1'].value=keyA;
                }
                else
                {
                    keyA=document.formContainer['key_object1'].value;
                }
            }
        }
    }
    else
    {
        //check it against anything???
        if (document.formContainer['key_object1'].value.length==codenames[curr_codename].length)
        {
            keyA=document.formContainer['key_object1'].value;
        }
        else
        {
            keyA="";
        }
    }
}
	
function encryptName()
{
    if (currCipher==1 || currCipher==3 || currCipher==5)
    {
        converted_text=encryptText(codenames[curr_codename]);
    }
    else if (currCipher==2 || currCipher==6 || currCipher==7)
    {
        if (keyA!="")
        {
            converted_text=encryptText(codenames[curr_codename]);
        }
        else
        {
            return;
        }
    }
    else if (currCipher==4)
    {
        if (keyA!="" && keyB!="")
        {
            converted_text=encryptText(codenames[curr_codename]);
        }
        else
        {
            return;
        }
    }
    else
    {
        if (keyA!="")
        {
            converted_text=keyA;
        }
        else
        {
            return;
        }
    }
    setNewCodeInstrux(2);
    document.getElementById( "encrypted_text").value = converted_text;
    document.getElementById( "current_cipher").value = currCipher;
}
	
function useCipher(num)
{
    currCipher=num;
    document.getElementById("cipher").style.display="block";
    insertKeyFields(num);
    if (num!=0)
    {
        tempHTML+='<div style="padding-top:3px;"><a href="#" onclick="encryptName(); return false;" onmouseover="changeImages(\'btn_encrypt\', \'images/btn_encrypt_over.gif\'); return true;" onmouseout="changeImages(\'btn_encrypt\', \'images/btn_encrypt.gif\'); return true;"><img id="btn_encrypt" name="btn_encrypt" src="images/btn_encrypt.gif" width="112" height="34" alt="Encrypt Your Code Name" border="0" /></a></div>';
    }
    else
    {
        tempHTML="";
    }
    document.getElementById('cipher_keys').innerHTML=tempHTML;
    if (num!=0)
    {
        checkKey(currCipher);
    }
}
	
function encryptCodename()
{
    closeCodename();
    if (document.getElementById("encrypt").style.display!="block")
    {
        document.formContainer['cipher_name'].selectedIndex=0;
    }
    document.getElementById("encrypt").style.display="block";
}
function hideEncrypt()
{
    //document.getElementById("encrypt").style.display="none";
    document.getElementById("cipher").style.display="none";
}
	
function encryptText(plaintext)
{
    raw_ciphertext="";
    cipher_text="";
    full_text="";
    if (currCipher<8)
    {
        //KEEP in place. This script may be used elsewhere.
        tempText=plaintext.toUpperCase().split('\n\n').join(' ()');
        tempText=tempText.split('\n').join(' ()');
        tempText=tempText.split('\r').join('');
        tempText=tempText.split('<br />').join('');
        array_plain=tempText.split(' ');
        array_cipher=tempText.split(' ');
    }
		
    if (currCipher==1)
    {
        //additive
        startNum=keyA;
		
        for (j=0; j<array_cipher.length; j++)
        {
            tempText=array_cipher[j];
            temp_string="";
            for (k=0; k<tempText.length; k++)
            {
                stringChar=tempText.charAt(k);
                charLocation=alpha_chars_up.indexOf(stringChar)*1;
                if (charLocation==-1)
                {
                    temp_string+=tempText.charAt(k);
                }
                else
                {
                    charLocation+=startNum;
                    charLocation=charLocation%26;
                    if (charLocation<10)
                    {
                        if (k==0)
                        {
                            temp_string+="0"+charLocation;
                        }
                        else
                        {
                            if (add_num_spaces==true)
                            {
                                temp_string+=" 0"+charLocation;
                            }
                            else
                            {
                                temp_string+="0"+charLocation;
                            }
                        }
                    }
                    else
                    {
                        if (k==0)
                        {
                            temp_string+=charLocation;
                        }
                        else
                        {
                            if (add_num_spaces==true)
                            {
                                temp_string+=" "+charLocation;
                            }
                            else
                            {
                                temp_string+=charLocation;
                            }
                        }
                    }
                }
                if (k==tempText.length-1)
                {
                    array_cipher[j]=temp_string;
                }
            }
        }
        for (j=0; j<array_plain.length; j++)
        {
            tempText=array_plain[j];
            temp_string="";
            for (k=0; k<tempText.length; k++)
            {
                stringChar=tempText.charAt(k);
                charLocation=alpha_chars_up.indexOf(stringChar)*1;
                if (charLocation==-1)
                {
                    temp_string+=tempText.charAt(k);
                }
                else
                {
                    charLocation+=startNum;
                    charLocation=charLocation%26;
                    if (k==0)
                    {
                        temp_string+=" "+tempText.charAt(k);
                    }
                    else
                    {
                        if (add_num_spaces==true)
                        {
                            temp_string+=" &#0160;"+tempText.charAt(k);
                        }
                        else
                        {
                            temp_string+=" "+tempText.charAt(k);
                        }
                    }
                }
                if (k==tempText.length-1)
                {
                    array_plain[j]=temp_string;
                }
            }
        }
    }
    else if (currCipher==2)
    {
        //affine
        mult_num=keyA;
        plus_num=keyB;
		
        for (j=0; j<array_cipher.length; j++)
        {
            tempText=array_cipher[j];
            temp_string="";
            for (k=0; k<tempText.length; k++)
            {
                charLocation=alpha_chars_up.indexOf(tempText.charAt(k));
                if (charLocation!=-1)
                {
                    charLocation=((alpha_chars_up.indexOf(tempText.charAt(k))*mult_num)+plus_num)%26;
                }
					
                if (charLocation==-1)
                {
                    temp_string+=tempText.charAt(k);
                }
                else
                {
                    temp_string+=alpha_chars_up.charAt(charLocation);
                }
                if (k==tempText.length-1)
                {
                    array_cipher[j]=temp_string;
                }
            }
        }
    }
    else if (currCipher==3)
    {
        //caesar
        startNum=keyA;
        for (j=0; j<array_cipher.length; j++)
        {
            tempText=array_cipher[j];
            temp_string="";
            for (k=0; k<tempText.length; k++)
            {
                stringChar=tempText.charAt(k);
                charLocation=alpha_chars_up.indexOf(stringChar)*1;
                if (charLocation!=-1)
                {
                    charLocation+=startNum;
                    charLocation=charLocation%26;
                    temp_string+=alpha_chars_up.charAt(charLocation);
                }
                else
                {
                    temp_string+=stringChar;
                }
                if (k==tempText.length-1)
                {
                    array_cipher[j]=temp_string;
                }
            }
        }
    }
    else if (currCipher==4)
    {
        //keyword with keyletter
        alpha_new="";
        currWord=keyA;
        keyword_string="";
        for (j=0; j<currWord.length; j++)
        {
            charLocation=alpha_chars_up.indexOf(currWord.charAt(j));
            if (keyword_string.length>0)
            {
                for (k=0; k<keyword_string.length; k++)
                {
                    if (alpha_chars_up.indexOf(keyword_string.charAt(k))==charLocation)
                    {
                        break;
                    }
                    if (k==keyword_string.length-1)
                    {
                        keyword_string+=currWord.charAt(j);
                    }
                }
            }
            else
            {
                keyword_string+=currWord.charAt(j);
            }
        }
        currLoc=alpha_chars_up.indexOf(keyB)+1;
        tempNum=0;
        sub_order=[""];
        for (j=1; j<27; j++)
        {
            sub_order[j]="";
        }
        for (j=0; j<keyword_string.length; j++)
        {
            if ((currLoc+j)==27 && tempNum==0)
            {
                tempNum=j;
                sub_order[1]=keyword_string.charAt(j);
            }
            else if (tempNum==0)
            {
                sub_order[currLoc+j]=keyword_string.charAt(j);
            }
            else
            {
                sub_order[j-tempNum+1]=keyword_string.charAt(j);
            }
            if (j==keyword_string.length-1)
            {
                if (tempNum>0)
                {
                    last_entry=j-tempNum+1;
                }
                else
                {
                    last_entry=currLoc+j;
                }
					
                for (k=1; k<alpha_chars_up.length+1; k++)
                {
                    if (keyword_string.indexOf(alpha_chars_up.charAt(k-1))==-1)
                    {
                        last_entry+=1;
                        if (last_entry==27)
                        {
                            last_entry=1;
                        }
                        sub_order[last_entry]=alpha_chars_up.charAt(k-1);
                    }
                }
            }
        }
			
        for (j=0; j<array_cipher.length; j++)
        {
            tempText=array_cipher[j];
            temp_string="";
            for (k=0; k<tempText.length; k++)
            {
                if (alpha_chars_up.indexOf(tempText.charAt(k))!=-1)
                {
                    temp_string+=sub_order[alpha_chars_up.indexOf(tempText.charAt(k))+1];
                }
                else
                {
                    temp_string+=tempText.charAt(k);
                }
                if (k==tempText.length-1)
                {
                    array_cipher[j]=temp_string;
                }
            }
        }
    }
    else if (currCipher==5)
    {
        //letter to number
        startNum=keyA;
		
        for (j=0; j<array_cipher.length; j++)
        {
            tempText=array_cipher[j];
            temp_string="";
            for (k=0; k<tempText.length; k++)
            {
                charLocation=alpha_chars_up.indexOf(tempText.charAt(k));
                if (charLocation!=-1)
                {
                    charLocation=(alpha_chars_up.indexOf(tempText.charAt(k))+startNum)%26;
                }
				
                if (charLocation==-1)
                {
                    temp_string+=tempText.charAt(k);
                }
                else
                {
                    if (charLocation<10)
                    {
                        if (k==0)
                        {
                            temp_string+="0"+charLocation;
                        }
                        else
                        {
                            if (add_num_spaces==true)
                            {
                                temp_string+=" 0"+charLocation;
                            }
                            else
                            {
                                temp_string+="0"+charLocation;
                            }
                        }
                    }
                    else
                    {
                        if (k==0)
                        {
                            temp_string+=charLocation;
                        }
                        else
                        {
                            if (add_num_spaces==true)
                            {
                                temp_string+=" "+charLocation;
                            }
                            else
                            {
                                temp_string+=charLocation;
                            }
                        }
                    }
                }
                if (k==tempText.length-1)
                {
                    array_cipher[j]=temp_string;
                }
            }
        }
        for (j=0; j<array_plain.length; j++)
        {
            tempText=array_plain[j];
            temp_string="";
            for (k=0; k<tempText.length; k++)
            {
                charLocation=alpha_chars_up.indexOf(tempText.charAt(k));
                if (charLocation!=-1)
                {
                    charLocation=(alpha_chars_up.indexOf(tempText.charAt(k))+startNum)%26;
                }
					
                if (charLocation==-1)
                {
                    temp_string+=tempText.charAt(k);
                }
                else
                {
                    if (k==0)
                    {
                        temp_string+=" "+tempText.charAt(k);
                    }
                    else
                    {
                        if (add_num_spaces==true)
                        {
                            temp_string+=" &#0160;"+tempText.charAt(k);
                        }
                        else
                        {
                            temp_string+=" "+tempText.charAt(k);
                        }
                    }
                }
                if (k==tempText.length-1)
                {
                    array_plain[j]=temp_string;
                }
            }
        }
    }
    else if (currCipher==6)
    {
        //multiplicative
        startNum=keyA;
		
        for (j=0; j<array_cipher.length; j++)
        {
            tempText=array_cipher[j];
            temp_string="";
            for (k=0; k<tempText.length; k++)
            {
                charLocation=alpha_chars_up.indexOf(tempText.charAt(k));
                if (charLocation!=-1)
                {
                    charLocation=(alpha_chars_up.indexOf(tempText.charAt(k))*startNum)%26;
                }
					
                if (charLocation==-1)
                {
                    temp_string+=tempText.charAt(k);
                }
                else
                {
                    temp_string+=alpha_chars_up.charAt(charLocation);
                }
                if (k==tempText.length-1)
                {
                    array_cipher[j]=temp_string;
                }
            }
        }
    }
    else if (currCipher==7)
    {
        //vigenere:uses keyword repeated above every character to be encrypted
        currWord=keyA;
        tempNum=-1;
        for (j=0; j<array_cipher.length; j++)
        {
            tempText=array_cipher[j];
            temp_string="";
            for (k=0; k<tempText.length; k++)
            {
                if (alpha_chars_up.indexOf(tempText.charAt(k))!=-1)
                {
                    tempNum+=1;
			
                    if (tempNum>=currWord.length)
                    {
                        tempNum=0;
                    }
                    temp_string+=alpha_chars_up.charAt((alpha_chars_up.indexOf(currWord.charAt(tempNum))+alpha_chars_up.indexOf(tempText.charAt(k)))%26);
                }
                else
                {
                    temp_string+=tempText.charAt(k);
                }
                if (k==tempText.length-1)
                {
                    array_cipher[j]=temp_string;
                }
            }
        }
    }
    else if (currCipher==8)
    {
        //add in user's plain text/cipher text????
        currWord=keyA;
    }
	
	
    if (currCipher==2 || currCipher==3 || currCipher==4 || currCipher==6 || currCipher==7)
    {
        num_added=1;
    }
    else if (currCipher<8)
    {
        num_added=3;
    }
	
    //line breaks correct prior to adding in manual line breaks below
    if (currCipher<8)
    {
        if (add_breaks==true)
        {
            currLoc=array_cipher[0].length;
            for (j=1; j<array_cipher.length; j++)
            {
                loop_continue=true;
                if (array_cipher[j].length>1)
                {
                    if (array_cipher[j].charAt(0)=="(" && array_cipher[j].charAt(1)==")")
                    {
                        currLoc=array_cipher[j].length-2;
                        loop_continue=false;
                    }
                    else
                    {
                        loop_continue=true;
                    }
                }
                else
                {
                    loop_continue=true;
                }
                if (loop_continue==true)
                {
                    if (((currLoc*1)+(array_cipher[j].length*1)+(num_added*1))>currLocMax)
                    {
                        array_cipher[j]="()"+array_cipher[j];
                        array_plain[j]="()"+array_plain[j];
                        currLoc=(array_cipher[j].length*1)-2;
                    }
                    else
                    {
                        currLoc+=(array_cipher[j].length*1)+num_added;
                    }
                }
            }
        }
        plaintext="";
        cipher_text="";
        for (j=0; j<array_cipher.length; j++)
        {
            if (j>0)
            {
                if (array_cipher[j].charAt(0)=="(" && array_cipher[j].charAt(1)==")" && add_breaks==true)
                {
                    //MANUAL break added from above.
                    if (num_added==3)
                    {
                        //tempText3=array_plain[j].split(' ').join('');
                        tempText3=array_plain[j].split('() &#0160;').join('()');
                        tempText3=tempText3.split('()&#0160;').join('()');
                        tempText3=tempText3.split('() ').join('()');
                        plaintext+=tempText3.split('()').join('()&#0160;');
                    }
                    else  
                    {
                        plaintext+=array_plain[j];
                    }
                    cipher_text+=array_cipher[j];
                }
                else
                {
                    //space between words
                    if (add_nobreak_spaces==true)
                    {
                        if (num_added==1)
                        {
                            plaintext+="&#0160;"+array_plain[j];
                            cipher_text+="&#0160;"+array_cipher[j];
                        }
                        else
                        {
                            plaintext+="&#0160;&#0160;&#0160;"+array_plain[j];
                            cipher_text+="&#0160;&#0160;&#0160;"+array_cipher[j];
                        }
                    }
                    else
                    {
                        plaintext+=" "+array_plain[j];
                        cipher_text+=" "+array_cipher[j];
                    }
                }
            }
            else
            {
                if (num_added==3)
                {
                    //tempText3=array_plain[j].split(' &#0160;').join('&#0160;');
                    if (add_nobreak_spaces==true)
                    {
                        tempText3=array_plain[j].split(' ').join('&#0160;');
                    }
                    else
                    {
                        tempText3=array_plain[j];
                    }
                    plaintext+=tempText3;
                }
                else
                {
                    plaintext+=array_plain[j];
                }
                cipher_text+=array_cipher[j];
            }
        }
			
    /*
                array1=plaintext.split('()');
                array2=cipher_text.split('()');
                for (j=0; j<array2.length; j++)
                    {
                    if (j>0)
                        {
                        full_text+='<br /><br />'+array1[j].toLowerCase()+'<br />'+array2[j];
                        }
                    else
                        {
                        full_text+=array1[j].toLowerCase()+'<br />'+array2[j];
                        }
                    }
                     */
    }
    temp_ciphertext=cipher_text.split('()').join('\n');
    raw_ciphertext=temp_ciphertext.split('&#0160;').join(' ');
	
    return temp_ciphertext;
}

function checkSubmit()
{
    tempAlert="";
    issueNum=0;
	
    if (document.formContainer["new_user"]!=undefined)
    {
        if (document.formContainer["new_user"].value=="" || document.formContainer["new_user"].value==" ")
        {
            issueNum+=1;
            tempAlert+="--Username\n";
        }
    }
    if (document.formContainer["password"]!=undefined)
    {
        if (document.formContainer["password"].value=="" || document.formContainer["password"].value==" ")
        {
            issueNum+=1;
            tempAlert+="--Password\n";
        }
		
        if (document.formContainer["password_retype"].value!=document.formContainer["password"].value)
        {
            issueNum+=1;
            tempAlert+="--Retype Password\n";
        }
    }
    if (user_age<13 && join_newsletter==true && (document.formContainer["email_parent"].value.indexOf("@")==-1 || document.formContainer["email_parent"].value.indexOf(".")==-1 || document.formContainer["email_parent"].value.length<6))
    {
        issueNum+=1;
        tempAlert+="--Parent's Email Address\n";
    }
	
    if (issueNum>0)
    {
        alert("Please fill in the following fields:\n"+tempAlert);
    }
    else
    {
        document.formContainer.submit();
        //send (if updated): username above, password above, join_newsletter above, parents email if needed, codename number (if changed), and converted_text (encrypted codename)
        //done button should nullify anything currently being worked on
        // prevPage();
        //closeCodename();
        //tb_show("submit_popup","popup_submit.html?placeValuesBeforeTB_=savedValues&TB_iframe=true&width=299&height=158&modal=true");
    }
}
	
window.onresize=function()
{
    document.getElementById("codename_choose").style.display="none";
}