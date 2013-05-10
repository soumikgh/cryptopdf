<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Crypto Club: For Teachers: Treasure Hunt Clue Generator</title>
        <meta name="title" content="Crypto Club: For Teachers: Treasure Hunt Clue Generator" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="NEED KEYWORDS" />
        <meta name="description" content="NEED DESCRIPTION" />
        <meta http-equiv="expires" content="0" />
        <script language="javascript" type="text/javascript" src="../jquery-1.6.1.min.js"></script>
        <script language="javascript" type="text/javascript" src="../thickbox.js"></script>
        <script language="javascript" type="text/javascript" src="../teachers/pdf.js"></script>
        <script language="javascript" type="text/javascript" src="../scripts.js"></script>
        <script language="javascript" type="text/javascript">
            <!--
            var i=0;
            var j=0;
            var k=0;
            var alpha_chars="abcdefghijklmnopqrstuvwxyz";
            var alpha_chars_up=alpha_chars.toUpperCase();
            var alpha_new="";
            var array_cipher=[""];
            var array_plain=[""];
            var array1=[""];
            var array2=[""];
            var charLocation;
            var cipher_names=["","Additive","Affine","Caesar","Keyword","Letter-&gt; Number","Multiplicative","Vigen&egrave;re","Your Own Cipher"];
            var cipher_num=[""];
            var cipher_text="";
            var clues=[""];
            var converted_text="";
            var converted_text_paper="";
            var currChar=0;
            var currField=0;
            var currLoc=0;
            var currLocMax=26;
            var currMenu=0;
            var currWord="";
            var descriptions_done=false;
            var full_text="";
            var generator_title="";
            var keyA=[""];
            var keyB=[""];
            var key_selected4=false;
            var keyword_string="";
            var last4Space=0;
            var last_entry=0;
            var last_loc=0;
            var locations_done=false;
            var loop_continue=false;
            var mult_num=0;
            var new_order=[""];
            var newHeight=0;
            var num_added=0;
            var raw_plaintext="";
            var plus_num=0;
            var prev_loc=0;
            var prime_nums=["",1,3,5,7,11,13,17,19,23];
            //var prime_multiplicative_nums=["",1,3,5,7,9,11,15,17,19,21,23,25];
            var print_keys=[""];
            var show_step=false;
            var startNum=0;
            var step1_descriptions=[""];
            var step1_descriptions_updated=[""];
            var step1_locations=[""];
            var step2_done=false;
            var stringChar;
            var sub_order=[""];
            var temp_cipher_num=[""];
            var temp_ciphertext="";
            var temp_keyA=[""];
            var temp_keyB=[""];
            var temp_own_name=["","","","","","","","",""];
            var temp_own_key=["","","","","","","","",""];
            var temp_own_ciphertext=["","","","","","","","",""];
            var temp_print_keys=[""];
            var temp_string="";
            var temp_string3="";
            var temp_value="";
            var tempArray=[""];
            var tempArray2=[""];
            var tempHTML="";
            var tempMenu=0;
            var tempMessage="SAMPLE";
            var tempNum="";
            var tempSample="";
            var tempString="";
            var tempString2="";
            var tempText="";
            var tempText2="";
            var title_selected=false;
            var title_selected4=false;
            var total_fields=0;
            var vig_asked=false;
            var your_own_name=["","","","","","","","",""];
            var your_own_key=["","","","","","","","",""];
            var your_own_ciphertext=["","","","","","","","",""];
            var your_own_type="type your encryption here";
            /* This script and many more are available free online at
        The JavaScript Source!! http://javascript.internet.com
        Created by: Ilya Gerasimenko | http://www.gerasimenko.com/ */
            // clean lines
            cleanUpLine=function(str,limit)
            {
                // clean string
                //var clean_pass1=str.replace(/\W/g, ' ');	//replace punctuation with spaces
                var clean_pass1=str;
                var clean_pass2=clean_pass1.replace(/\s{2,}/g, ' ');		// compact multiple whitespaces
                var clean_pass3=clean_pass2.replace(/^\s+|\s+$/g, '');	// trim whitespaces from beginning or end of string
                //var clean_pass4=clean_pass3.substring(0,limit);			// trim string
                var clean_pass4=clean_pass3;
                return clean_pass4;
            }
            // number of keywords and keyword length validation
            function cleanUpList(fld)
            {
                var charLimit=26;
                var lineLimit=20;
                var cleanList=[];
                var newString="";
                var re1=/\S/;// all non-space characters
                var re2=/[\n\r]/;// all line breaks
                var tempList=fld.value.split('\n');
                for (var i=0; i<tempList.length; i++)
                {
                    if (re1.test(tempList[i]))
                    {
                        // store filtered lines in an array
                        var cleanS=cleanUpLine(tempList[i],charLimit);
                        cleanList.push(cleanS);
                    }
                }
                /*for (var j=0; j<tempList.length; j++)
                        {
                        if (tempList[j].length>charLimit && !re2.test(tempList[j].charAt(charLimit)))
                                {
                                // make sure that last char is not a line break - for IE compatibility
                                fld.value=cleanList.join('\n'); // restore from array
                                }
                        }*/
                for (var i=0; i<cleanList.length; i++)
                {
                    newString=cleanList[i];
                    if (cleanList[i].charAt(0)==" ")
                    {
                        cleanList[i]=cleanList[i].slice(1);
                    }
                    cleanList[i]=newString;
                }
		
                if (cleanList.length>lineLimit)
                {
                    cleanList.pop();	// remove last line
                    fld.value=cleanList.join('\n'); // restore from array
                }
	
                fld.onblur=function()
                {
                    //alert(this.value);
                    this.value=cleanList.join('\n');
                } // onblur - restore from array*/
            }
            function cleanTextarea(object_id)
            {
                //alert(object_id);
                cleanUpList(object_id);
	
                object_id.style.height='auto'; 
                newHeight=(object_id.scrollHeight>26 ? object_id.scrollHeight:26); 
                if (newHeight<50)
                {
                    object_id.style.height=50+'px';
                }
                else
                {
                    object_id.style.height=newHeight.toString()+'px';
                }
            }
	
            function setVig(num)
            {
                if (num==2)
                {
                    for (i=1; i<total_fields+1; i++)
                    {
                        if (cipher_num[i]==7)
                        {
                            printKey(i);
                        }
                    }
                }
                updateStep(tempMenu);
            }

            function updateStep(num)
            {
                tempMenu=num;
	
                if (currMenu==4)
                {
                    if (your_own_name[currField]=="" || your_own_key[currField]=="")
                    {
                        keyA[currField]="";
                        document.formContainer['step2_cipher'+currField].options[0].selected=true;
                        document.getElementById('key_type'+currField).innerHTML="&#0160;";
                    }
                }
	
                step2_done=true;
                for (n=1; n<cipher_num.length; n++)
                {
                    if (cipher_num[n]*1==0)
                    {
                        step2_done=false;
                        break;
                    }
                }
		
                if (num==0 || currMenu>1 || (currMenu==0 && num==1))
                {
                    if (num==3 && step2_done==false)
                    {
                        show_step=false;
                    }
                    else
                    {
                        show_step=true;
                    }
                }
                else if (title_selected==true && document.formContainer['step1_name'].value!="" && currMenu==1 && total_fields>0)
                {
                    saveStep1();
                    if (locations_done==true && descriptions_done==true)
                    {
                        if (num==3 && step2_done==false)
                        {
                            show_step=false;
                        }
                        else
                        {
                            show_step=true;
                        }
                    }
                    else
                    {
                        show_step=false;
                    }
                }
                else
                {
                    show_step=false;
                }
                if (num==2 && show_step==false)
                {
                    popupWait();
                }
		
                if (show_step==true)
                {
                    currMenu=num;
                    clues=[""];
		
                    if (currMenu>1)
                    {
                        //update clue text.
                        for (i=1; i<total_fields+1; i++)
                        {
                            tempText="";
                            //break words longer than 26 characters prior to doing anything else.
                            step1_descriptions_updated=step1_descriptions[i].split(' ');
                            step1_descriptions_updated.splice(0,0,"");
				
                            for (j=1; j<step1_descriptions_updated.length; j++)
                            {
                                if (step1_descriptions_updated[j].length>currLocMax)
                                {
                                    //split soft returns
                                    var step1_descriptions_updated2=step1_descriptions_updated[j].split('\r\n').join('|||').split('\r').join('|||').split('\n').join('|||');
                                    step1_descriptions_updated2=step1_descriptions_updated2.split('|||');
                                    step1_descriptions_updated2.splice(0,0,"");
                                    for (k=1; k<step1_descriptions_updated2.length; k++)
                                    {
                                        if (step1_descriptions_updated2[k].length>currLocMax)
                                        {
                                            step1_descriptions_updated2[k]=step1_descriptions_updated2[k].substring(0,currLocMax)+" "+step1_descriptions_updated2[k].substring(currLocMax,step1_descriptions_updated2[k].length); 
                                        }
                                        if (k>1)
                                        {
                                            step1_descriptions_updated[j]+='\n'+step1_descriptions_updated2[k];
                                        }
                                        else
                                        {
                                            step1_descriptions_updated[j]=step1_descriptions_updated2[k];
                                        }
                                    }
                                }
                            }
                            for (j=1; j<step1_descriptions_updated.length; j++)
                            {
                                if (j>1)
                                {
                                    tempText+=" "+step1_descriptions_updated[j];
                                }
                                else
                                {
                                    tempText+=step1_descriptions_updated[j];
                                }
                            }
                            step1_descriptions[i]=tempText;
				
                            currLoc=1;
                            tempText="";
                            prev_loc=0;
                            step1_descriptions_updated=step1_descriptions[i].split('');
                            step1_descriptions_updated.splice(0,0,"");
                            for (j=1; j<step1_descriptions_updated.length; j++)
                            {
                                if (step1_descriptions_updated[j]=="\n" || step1_descriptions_updated[j]=="\r\n" || step1_descriptions_updated[j]=="\r")
                                {
                                    currLoc=1;
                                }
                                else if (currLoc>currLocMax)
                                {
                                    //check if in-between word
                                    for (k=j-1; k>prev_loc; k--)
                                    {
                                        if (step1_descriptions_updated[k]==" ")
                                        {
                                            step1_descriptions_updated[k]="\n";
                                            currLoc=j-k;
                                            prev_loc=k;
                                            //alert(step1_descriptions_updated[k-1]+' and '+step1_descriptions_updated[k+1]);
                                            break;
                                        }
                                    }
                                }
                                else
                                {
                                    currLoc+=1;
                                }
                            }
				
                            for (j=1; j<step1_descriptions_updated.length; j++)
                            {
                                tempText+=step1_descriptions_updated[j];
                            }
                            step1_descriptions[i]=tempText;
                            document.formContainer['step1_description'+i].value=tempText;
                        }
                    }
		
                    if (currMenu==2)
                    {
                        //update step 2 fields
                        if (title_selected==false || document.formContainer["step1_name"].value=="")
                        {
                            document.getElementById('hunt_title').innerHTML="Treasure Hunt title appears here";
                        }
                        else
                        {
                            document.getElementById('hunt_title').innerHTML="Clue Summary: "+document.formContainer["step1_name"].value;
                        }
                        for (i=1; i<total_fields+1; i++)
                        {
                            document.getElementById('step2_location'+i).innerHTML='<em>'+step1_locations[i]+'</em>';
                            tempText2=step1_descriptions[i].split('\n').join('<br />');
                            document.getElementById('step2_description'+i).innerHTML=tempText2;
                        }
                    }
                    else if (currMenu==3)
                    {
                        raw_ciphertext="";
			
                        tempHTML='<table cellpadding="0" cellspacing="0" border="0" width="100%" class="border_table">';
                        tempHTML+='	<tr>';
                        if (title_selected==false || document.formContainer["step1_name"].value=="")
                        {
                            tempHTML+='		<th colspan="5" align="center" id="bg_treasure_title"><div id="hunt_title">Treasure Hunt title appears here</div></td>';
                            generator_title="Treasure Hunt title appears here";
                        }
                        else
                        {
                            tempHTML+='		<th colspan="5" align="center" id="bg_treasure_title"><div id="hunt_title">Clue Summary: '+document.formContainer["step1_name"].value+'</div></td>';
                            generator_title=document.formContainer["step1_name"].value;
                        }
                        tempHTML+='	</tr>';
                        tempHTML+='	<tr>';
                        tempHTML+='		<td class="header_step2"><div class="helvetica11pxTanB">Clue #</div></td>';
                        tempHTML+='		<td class="header_step2R"><div class="helvetica11pxTanB">Location<br />Described</div></td>';
                        tempHTML+='		<td class="header_step2R" width="540" style="width:540px;"><div class="helvetica11pxTanB" style="width:540px;">Clue (Plaintext and CIPHERTEXT)</div></td>';
                        tempHTML+='		<td class="header_step2R"><div class="helvetica11pxTanB">Cipher</div></td>';
                        tempHTML+='		<td class="header_step2R"><div class="helvetica11pxTanB">Is key<br />printed?</div></td>';
                        tempHTML+='	</tr>';
			
			
                        for (i=1; i<total_fields+1; i++)
                        {
                            if (cipher_num[i]==7 && print_keys[i]==false && vig_asked==false)
                            {
                                vig_asked=true;
                                popupVigenere();
                                return;
                            }
                        }
			
                        for (i=1; i<total_fields+1; i++)
                        {
                            //alert(cipher_num[i]);
                            if (cipher_num[i]!=8)
                            {
                                converted_text=encryptText(step1_descriptions[i],cipher_num[i],i);
                            }
				
                            tempHTML+='	<tr>';
                            tempHTML+='		<td class="col_step" align="center"><div class="arial14pxBlack">'+i+'</div></td>';
                            tempHTML+='		<td class="col_stepR" align="center"><div class="arial14pxBlack"><em>'+step1_locations[i]+'</em></div></td>';
                            if (cipher_num[i]!=8)
                            {
                                tempHTML+='		<td class="col_stepR"><div class="clue_text">'+converted_text+'</div></td>';
                                tempHTML+='		<td class="col_stepR" align="center"><div class="arial14pxBlack">'+cipher_names[cipher_num[i]]+'</div><div>';
                            }
                            else
                            {
                                tempString=step1_descriptions[i].toString();
                                tempArray=tempString.split(/\r\n|\r|\n/);
					
                                tempString2=your_own_ciphertext[i].toString();
                                tempArray2=tempString2.split(/\r\n|\r|\n/);
					
                                tempHTML+='		<td class="col_stepR"><div class="clue_text">';
                                for (j=0; j<tempArray.length; j++)
                                {
                                    if (tempArray2[j]==undefined)
                                    {
                                        tempArray2[j]="";
                                    }
					
                                    if (j==0)
                                    {
                                        tempHTML+=tempArray[j]+'<br />'+tempArray2[j];
                                    }
                                    else
                                    {
                                        tempHTML+='<br /><br />'+tempArray[j]+'<br />'+tempArray2[j];
                                    }
                                }
                                tempHTML+='</div></td>';
                                tempHTML+='		<td class="col_stepR" align="center"><div class="arial14pxBlack">'+your_own_name[i]+'</div><div>';
                            }
				
                            if (cipher_num[i]==1)
                            {
                                if (keyA[i]!="")
                                {
                                    tempHTML+='Key = '+keyA[i];
                                }
                                else
                                {
                                    return;
                                }
                            }
                            else if (cipher_num[i]==2)
                            {
                                if (keyA[i]!=0)
                                {
                                    tempHTML+='Multiplicative<br />Key = '+keyA[i]+'<br /><br />';
                                }
                                else
                                {
                                    return;
                                }
                                if (keyB[i]!="")
                                {
                                    tempHTML+='Additive = '+keyB[i];
                                }
                                else
                                {
                                    return;
                                }
                            }
                            else if (cipher_num[i]==3)
                            {
                                if (keyA[i]!="")
                                {
                                    tempHTML+='Key = '+keyA[i];
                                }
                                else
                                {
                                    return;
                                }
                            }
                            else if (cipher_num[i]==4)
                            {
                                if (keyA[i]!="" && keyB[i]!="")
                                {
                                    tempHTML+='Keyword = '+keyA[i]+'<br /><br />';
                                    tempHTML+='keyletter = '+keyB[i];
                                }
                                else
                                {
                                    return;
                                }
                            }
                            else if (cipher_num[i]==5)
                            {
                                //tempHTML+='Key = '+keyA[i];
                            }
                            else if (cipher_num[i]==6)
                            {
                                if (keyA[i]!=0)
                                {
                                    tempHTML+='Key = '+keyA[i];
                                }
                                else
                                {
                                    return;
                                }
                            }
                            else if (cipher_num[i]==7)
                            {
                                if (keyA[i]!="")
                                {
                                    tempHTML+='Keyword = '+keyA[i];
                                }
                                else
                                {
                                    return;
                                }
                            }
                            else if (cipher_num[i]==8)
                            {
                                //your cipher
                                if (keyA[i]!="")
                                {
                                    tempHTML+='Keyword or Other<br />info to Display:<br />'+keyA[i];
                                }
                                else
                                {
                                    return;
                                }
                            }
				
                            tempHTML+='		</div></td>';
                            if (print_keys[i]==true)
                            {
                                tempHTML+='		<td class="col_stepR" align="center"><div class="arial14pxBlack">Yes</div></td>';
                            }
                            else
                            {
                                tempHTML+='		<td class="col_stepR" align="center"><div class="arial14pxBlack">No</div></td>';
                            }
                            tempHTML+='	</tr>';
				
                            //SAVE DATA
                            clues[i-1]=new Array();
                            clues[i-1][0]=step1_locations[i];
                            clues[i-1][1]=converted_text;
                            if (cipher_num[i]!=8)
                            {
                                clues[i-1][2]=cipher_names[cipher_num[i]];
                            }
                            else
                            {
                                clues[i-1][2]=your_own_name[i];
                            }
                            clues[i-1][3]=keyA[i];
                            if (cipher_num[i]==2 || cipher_num[i]==4)
                            {
                                clues[i-1][4]=keyB[i];
                            }
                            else
                            {
                                clues[i-1][4]='none';
                            }
                            clues[i-1][5]=print_keys[i];
                            clues[i-1][6]=step1_descriptions[i];
                            clues[i-1][7]=raw_ciphertext;
                        }
                        tempHTML+='</table>';
			
                        document.getElementById('step3_table').innerHTML=tempHTML;
                    }
                    else if (currMenu==4)
                    {
                        raw_ciphertext="";
			
                        for (i=1; i<total_fields+1; i++)
                        {
                            if (currField!=i)
                            {
                                if (cipher_num[i]!=8)
                                {
                                    converted_text=encryptText(step1_descriptions[i],cipher_num[i],i);
                                }
					
                                clues[i-1]=new Array();
                                clues[i-1][0]=step1_locations[i];
                                clues[i-1][1]=converted_text;
                                if (cipher_num[i]!=8)
                                {
                                    clues[i-1][2]=cipher_names[cipher_num[i]];
                                }
                                else
                                {
                                    clues[i-1][2]=your_own_name[i];
                                }
                                clues[i-1][3]=keyA[i];
                                if (cipher_num[i]==2 || cipher_num[i]==4)
                                {
                                    clues[i-1][4]=keyB[i];
                                }
                                else
                                {
                                    clues[i-1][4]='none';
                                }
                                clues[i-1][5]=print_keys[i];
                                clues[i-1][6]=step1_descriptions[i];
                                clues[i-1][7]=raw_ciphertext;
                            }
                        }
				
                        tempString=step1_descriptions[currField].toString();
                        tempArray=tempString.split(/\r\n|\r|\n/);
			
                        if (your_own_ciphertext[currField].length>0)
                        {
                            tempString2=your_own_ciphertext[currField].toString();
                            tempArray2=tempString2.split(/\r\n|\r|\n/);
                        }
			
                        if (your_own_name[currField]!="")
                        {
                            document.formContainer.step4_name.value=your_own_name[currField];
                        }
                        else
                        {
                            document.formContainer.step4_name.value="";
                        }
                        if (your_own_key[currField]!="")
                        {
                            document.formContainer.step4_key.value=your_own_key[currField];
                        }
                        else
                        {
                            document.formContainer.step4_key.value="";
                        }
			
                        tempHTML="";
                        for (i=0; i<tempArray.length; i++)
                        {
                            tempHTML+='<div class="your_message">'+tempArray[i]+'</div>';
                            if (tempArray2[i]==undefined)
                            {
                                tempArray2[i]="";
                            }
                            if (your_own_ciphertext[currField].length>0)
                            {
                                tempHTML+='<input id="step4_line'+(i+1)+'" name="step4_line'+(i+1)+'" type="text" maxlength="'+tempArray[i].length+'" style="width:200px; height:16px;" size="12" class="form_monospace" value="'+tempArray2[i]+'" />';
                            }
                            else
                            {
                                if (i==0)
                                {
                                    temp_value=your_own_type;
                                }
                                else
                                {
                                    temp_value="";
                                }
                                tempHTML+='<input id="step4_line'+(i+1)+'" name="step4_line'+(i+1)+'" type="text" maxlength="35" style="width:200px; height:16px;" size="12" onfocus="updateYourValue(this,'+tempArray[i].length+'); return false;" class="form_monospace" value="'+temp_value+'" />';
                            }
                        }
                        document.getElementById('your_own_message').innerHTML=tempHTML;
                    }
		
                    if (document.images && (preloadFlag==true))
                    {
                        for (var i=0; i<4; i+=1)
                        {
                            if (i==2 && currMenu==4)
                            {
                                document["btn_step"+i].src="../images/btn_step"+i+"_over.jpg";
                                hideIt("content_step"+i);
                            }
                            else if (i!=currMenu)
                            {
                                document["btn_step"+i].src="../images/btn_step"+i+".jpg";
                                hideIt("content_step"+i);
                            }
                            else
                            {
                                document["btn_step"+i].src="../images/btn_step"+i+"_over.jpg";
                                showIt("content_step"+i);
                            }
                        }
                        hideIt("step0_sample");
                        if (currMenu!=4)
                        {
                            hideIt("content_step4");
                        }
                        else
                        {
                            showIt("content_step4");
                        }
                    }
                }
            }
	
            function encryptText(plaintext,cipher,obj_id)
            {
                raw_ciphertext="";
                cipher_text="";
                full_text="";
                if (cipher<8)
                {
                    tempText=plaintext.toUpperCase().split('\n\n').join(' ()');
                    tempText=tempText.split('\n').join(' ()');
                    tempText=tempText.split('\r').join('');
                    tempText=tempText.split('<br />').join('');
                    array_plain=tempText.split(' ');
                    array_cipher=tempText.split(' ');
                }
                if (cipher==1)
                {
                    //additive
                    startNum=keyA[obj_id];
		
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
                                        temp_string+=" 0"+charLocation;
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
                                        temp_string+=" "+charLocation;
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
                                    temp_string+=" &#0160;"+tempText.charAt(k);
                                }
                            }
                            if (k==tempText.length-1)
                            {
                                array_plain[j]=temp_string;
                            }
                        }
                    }
                }
                else if (cipher==2)
                {
                    //affine
                    mult_num=keyA[obj_id];
                    plus_num=keyB[obj_id];
		
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
                else if (cipher==3)
                {
                    //caesar
                    startNum=keyA[obj_id]*1;
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
                else if (cipher==4)
                {
                    //keyword with keyletter
                    alpha_new="";
                    currWord=keyA[obj_id];
                    keyword_string="";
                    for (j=0; j<currWord.length; j++)
                    {
                        charLocation=alpha_chars_up.indexOf(currWord.charAt(j));
                        if (keyword_string.length>0)
                        {
                            for (r=0; r<keyword_string.length; r++)
                            {
                                if (alpha_chars_up.indexOf(keyword_string.charAt(r))==charLocation)
                                {
                                    //duplicate
                                    break;
                                }
                                if (r==keyword_string.length-1)
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
                    currLoc=alpha_chars_up.indexOf(keyB[obj_id])+1;
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
                else if (cipher==5)
                {
                    //letter to number
                    startNum=keyA[obj_id];
		
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
                                        temp_string+=" 0"+charLocation;
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
                                        temp_string+=" "+charLocation;
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
                                    temp_string+=" &#0160;"+tempText.charAt(k);
                                }
                            }
                            if (k==tempText.length-1)
                            {
                                array_plain[j]=temp_string;
                            }
                        }
                    }
                }
                else if (cipher==6)
                {
                    //multiplicative
                    startNum=keyA[obj_id];
		
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
                else if (cipher==7)
                {
                    //vigenere:uses keyword repeated above every character to be encrypted
                    saved_keyword=keyA[obj_id];
                    curr_keyword_letter=-1;
                    for (j=0; j<array_cipher.length; j++)
                    {
                        tempText=array_cipher[j];
                        temp_string="";
                        for (k=0; k<tempText.length; k++)
                        {
                            if (alpha_chars_up.indexOf(tempText.charAt(k))!=-1)
                            {
                                curr_keyword_letter+=1;
			
                                if (curr_keyword_letter>=saved_keyword.length)
                                {
                                    curr_keyword_letter=0;
                                }
                                temp_string+=alpha_chars_up.charAt((alpha_chars_up.indexOf(saved_keyword.charAt(curr_keyword_letter))+alpha_chars_up.indexOf(tempText.charAt(k)))%26);
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
                else if (cipher==8)
                {
                    //add in user's plain text/cipher text
                    saved_keyword=keyA[obj_id];
                }
		
                if (cipher==2 || cipher==3 || cipher==4 || cipher==6 || cipher==7)
                {
                    num_added=1;
                }
                else if (cipher<8)
                {
                    num_added=3;
                }
	
                //line breaks correct prior to adding in manual line breaks below
                if (cipher<8)
                {
                    /*
                        currLoc=array_plain[0].length;
                        for (j=1; j<array_plain.length; j++)
                                {
                                loop_continue=true;
                                if (array_plain[j].length>1)
                                        {
                                        if (array_plain[j].charAt(0)=="(" && array_plain[j].charAt(1)==")")
                                                {
                                                currLoc=array_plain[j].length-2;
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
                                        if (((currLoc*1)+(array_plain[j].length*1)+(num_added*1))>currLocMax)
                                                {
                                                array_cipher[j]="()"+array_cipher[j];
                                                array_plain[j]="()"+array_plain[j];
                                                currLoc=(array_plain[j].length*1)-2;
                                                }
                                        else
                                                {
                                                currLoc+=(array_plain[j].length*1)+num_added;
                                                }
                                        }
                                }
                     */
                    plaintext="";
                    cipher_text="";
                    for (j=0; j<array_cipher.length; j++)
                    {
                        if (j>0)
                        {
                            if (array_cipher[j].charAt(0)=="(" && array_cipher[j].charAt(1)==")")
                            {
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
                                if (num_added==1)
                                {
                                    plaintext+="&#0160;"+array_plain[j];
                                    cipher_text+="&#0160;"+array_cipher[j];
                                }
                                else
                                {
                                    plaintext+="&#0160;&#0160;&#0160;&#0160;"+array_plain[j];
                                    cipher_text+="&#0160;&#0160;&#0160;&#0160;"+array_cipher[j];
                                }
                            }
                        }
                        else
                        {
                            if (num_added==3)
                            {
                                //tempText3=array_plain[j].split(' &#0160;').join('&#0160;');
                                tempText3=array_plain[j].split(' ').join('&#0160;');
                                plaintext+=tempText3;
                            }
                            else
                            {
                                plaintext+=array_plain[j];
                            }
                            cipher_text+=array_cipher[j];
                        }
                    }
			
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
                }
                temp_ciphertext=cipher_text.split('()').join('\n');
                raw_ciphertext=temp_ciphertext.split('&#0160;').join(' ');
                return full_text;
            }
	
            function updateMenu()
            {
                if (document.images && (preloadFlag==true) && updateMenu.arguments[0].split("btn_step").join('')!=currMenu && !(updateMenu.arguments[0].split("btn_step").join('')==2 && currMenu==4))
                {
                    for (var i=0; i<updateMenu.arguments.length; i+=2)
                    {
                        document[updateMenu.arguments[i]].src = updateMenu.arguments[i+1];
                    }
                }
            }
	
            function updateCipher(object_id,num,reset_obj)
            {
                //first line to be used only for your own cipher--if user selects it:
                currField=object_id*1;
	
                if (cipher_num[currField]==8 && num!=8)
                {
                    your_own_name[object_id]="";
                    your_own_key[object_id]="";
                    your_own_ciphertext[object_id]="";
                    document.formContainer["step4_name"].value="";
                    document.formContainer["step4_key"].value="";
                    reset_obj=true;
                }
                else if (cipher_num[currField]==8 && num==8)
                {
                    reset_obj=false;
                }
                else
                {
                    if (reset_obj==1)
                    {
                        reset_obj=true;
                    }
                }
                cipher_num[object_id]=num;
                //change key type.
	
                if (num==1)
                {
                    //0-25
                    //change letter to number, add encryption key (two characters?), reduce mod 26
                    //additive: use a:number
                    if (reset_obj==true)
                    {
                        keyA[object_id]="";
                    }
                    tempHTML='<em><strong>Key&#0160;(0-25)</strong></em> <input type="text" id="step2_keyA'+object_id+'" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onchange="checkKey('+object_id+'); return false;" onkeyup="checkKey('+object_id+'); return false;" />';
                }
                else if (num==2)
                {
                    //a-z: 0-25
                    //number a is 1-25 and divisible only by 1
                    //number b is any one/two digit number
                    //a*lettertonumber+b(mod26)
                    //affine: use a:number and b:number
                    if (reset_obj==true)
                    {
                        keyA[object_id]=0;
                        keyB[object_id]="";
                    }
                    alert("updateCipher keyB[object_id]: "+keyB[object_id]);
                    //(1,3,5,7,9,11,15,17,19,21,23,25)
                    //tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><em><strong>Multiplicative Key: </strong></em> </td><td><input type="text" id="step2_keyA'+object_id+'" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" /></td></tr>';
                    tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><em><strong>Multiplicative Key: </strong></em></td><td align="left"><select id="step2_keyA'+object_id+'" onchange="checkKey('+object_id+'); return false;" class="select_field" style="font-style:normal;"><option value="0" id="step2_key0">Select</option><option value="1" id="step2_key1">1</option><option value="3" id="step2_key2">3</option><option value="5" id="step2_key3">5</option><option value="7" id="step2_key4">7</option><option value="9" id="step2_key5">9</option><option value="11" id="step2_key6">11</option><option value="15" id="step2_key7">15</option><option value="17" id="step2_key8">17</option><option value="19" id="step2_key9">19</option><option value="21" id="step2_key10">21</option><option value="23" id="step2_key11">23</option><option value="25" id="step2_key12">25</option></select></td></tr>';
                    tempHTML+='<tr><td align="right"><em><strong>Additive (any number)</strong></em></td><td align="left"><input type="text" id="step2_keyB'+object_id+'" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyB[object_id]+'" onchange="checkKey('+object_id+'); return false;" onkeyup="checkKey('+object_id+'); return false;" /></td></tr></table>';
                }
                else if (num==3)
                {
                    //0-25 key num a=A with 0 a=B with 1
                    //caesar: use a:number
                    if (reset_obj==true)
                    {
                        keyA[object_id]="";
                    }
                    tempHTML='<em><strong>Key&#0160;(0-25)</strong></em> <input type="text" id="step2_keyA'+object_id+'" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onchange="checkKey('+object_id+'); return false;" onkeyup="checkKey('+object_id+'); return false;" />';
                }
                else if (num==4)
                {
                    //keyword: use a:word and b:letter
                    //start adding in keyword to alphabet at letter specified, rest of unused letters fill in after keyword
                    if (reset_obj==true)
                    {
                        keyA[object_id]="";
                        keyB[object_id]="";
                    }
                    tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><em><strong>Keyword</strong></em> </td><td><input type="text" id="step2_keyA'+object_id+'" maxlength="26" class="form_field11px" style="width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onchange="checkKey('+object_id+'); return false;" onkeyup="checkKey('+object_id+'); return false;" /></td></tr>';
                    tempHTML+='<tr><td align="right"><em><strong>keyletter</strong></em> </td><td align="left"><input type="text" id="step2_keyB'+object_id+'" maxlength="1" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyB[object_id]+'" onchange="checkKey('+object_id+'); return false;" onkeyup="checkKey('+object_id+'); return false;" /></td></tr></table>';
                }
                else if (num==5)
                {
                    //a-z=0-25 or a-z=1-26
                    //letter to number: a:number (0 or 1)
                    if (reset_obj==true)
                    {
                        keyA[object_id]="0";
                    }
                    tempHTML="&#0160;";
                    //tempHTML='<em><strong>Key (0-25)</strong></em> <input type="text" id="step2_keyA'+object_id+'" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" />';
                }
                else if (num==6)
                {
                    //multiplicative: a:number
                    if (reset_obj==true)
                    {
                        keyA[object_id]=0;
                    }
			
                    //(1,3,5,7,9,11,15,17,19,21,23,25)
                    tempHTML='<em><strong>Key:</strong></em> <select id="step2_keyA'+object_id+'" onchange="checkKey('+object_id+'); return false;" class="select_field" style="font-style:normal;"><option value="0" id="step2_key0">Select</option><option value="1" id="step2_key1">1</option><option value="3" id="step2_key2">3</option><option value="5" id="step2_key3">5</option><option value="7" id="step2_key4">7</option><option value="9" id="step2_key5">9</option><option value="11" id="step2_key6">11</option><option value="15" id="step2_key7">15</option><option value="17" id="step2_key8">17</option><option value="19" id="step2_key9">19</option><option value="21" id="step2_key10">21</option><option value="23" id="step2_key11">23</option><option value="25" id="step2_key12">25</option></select>';
                }
                else if (num==7)
                {
                    //vigenere: use a:word--26 letters or less
                    //keyword characters repeated above message to encrypt--check swf for details
                    if (reset_obj==true)
                    {
                        keyA[object_id]="";
                    }
                    tempHTML='<em><strong>Keyword</strong></em> <input type="text" id="step2_keyA'+object_id+'" maxlength="26" class="form_field11px" style="width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onchange="checkKey('+object_id+'); return false;" onkeyup="checkKey('+object_id+'); return false;" />';
                }
                else if (num==8)
                {
                    //your_own_message
                    //keyA[object_id]=your_own_key[object_id];
                    tempHTML='<div style="padding-top:2px; padding-bottom:2px;"><em><strong>Keyword or Other<br />info to Display:</strong></em><br /><input type="text" id="step2_keyA'+object_id+'" readonly="readonly" maxlength="26" class="form_field11px" style="margin-top:2px; margin-bottom:2px; width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" /><br /><a href="#" onclick="getStep(4,'+object_id+'); return false;">Make Changes</a></div>';
                }
                else
                {
                    tempHTML='&#0160;';
                }
                document.getElementById('key_type'+object_id).innerHTML=tempHTML;
	
                if (num==2 || num==6)
                {
                    for (i=1; i<document.formContainer['step2_keyA'+object_id].options.length; i++)
                    {
                        if (document.formContainer['step2_keyA'+object_id].options[i].value==keyA[object_id])
                        {
                            document.formContainer['step2_keyA'+object_id].options[i].selected=true;
                            break;
                        }
                    }
                }
	
                if (num==8 && currMenu==2)
                {
                    updateStep(4);
                }
            }
	
            function getStep(num,num2)
            {
                object_id=num2;
                currField=object_id;
                if (your_own_name[object_id]!="")
                {
                    document.formContainer.step4_name.value=your_own_name[object_id];
                }
                else
                {
                    document.formContainer.step4_name.value="";
                }
                if (your_own_key[object_id]!="")
                {
                    document.formContainer.step4_key.value=your_own_key[object_id];
                }
                else
                {
                    document.formContainer.step4_key.value="";
                }
                updateStep(num);
            }
	
            function updateName(object_id)
            {
                if (title_selected==false)
                {
                    object_id.value="";
                    title_selected=true;
                }
            }
	
            function updateYourValue(object_id,num)
            {
                if (object_id.value==your_own_type)
                {
                    object_id.value="";
                }
                object_id.maxLength=num;
            }
	
            function updateName4(object_id)
            {
                if (your_own_name[currField]=="")
                {
                    title_selected4=false;
                }
                else
                {
                    title_selected4=true;
                }
                if (title_selected4==false)
                {
                    object_id.value="";
                    title_selected4=true;
                }
            }
	
            function updateKey4(object_id)
            {
                if (your_own_key[currField]=="")
                {
                    key_selected4=false;
                }
                else
                {
                    key_selected4=true;
                }
                if (key_selected4==false)
                {
                    object_id.value="";
                    key_selected4=true;
                }
            }
	
            function checkClueNum(object_id)
            {
                if (isNaN(object_id.value*1) || (object_id.value*1==0) || (object_id.value*1>total_fields))
                {
                    object_id.value=1;
                }
                else
                {
                    object_id.value=object_id.value*1;
                }
            }
	
            function checkKey(object_id)
            {
                /*if (cipher_num[object_id]!=8)
                        {
                        your_own_name[currField]="";
                        your_own_key[currField]="";
                        }*/
                if (cipher_num[object_id]==1)
                {
                    //additive
                    if (isNaN(document.formContainer['step2_keyA'+object_id].value*1) || (document.formContainer['step2_keyA'+object_id].value*1)>25 || (document.formContainer['step2_keyA'+object_id].value*1)<0)
                    {
                        keyA[object_id]="";
                        document.formContainer['step2_keyA'+object_id].value="";
                    }
                    else
                    {
                        document.formContainer['step2_keyA'+object_id].value=document.formContainer['step2_keyA'+object_id].value*1;
                        keyA[object_id]=document.formContainer['step2_keyA'+object_id].value;
                    }
                }
                else if (cipher_num[object_id]==2)
                {
                    //affine
                    if (document.formContainer['step2_keyA'+object_id].value!=0)
                    {
                        keyA[object_id]=document.formContainer['step2_keyA'+object_id].value;
                    }
                    else
                    {
                        keyA[object_id]=0;
                    }
			
                    if (isNaN(document.formContainer['step2_keyB'+object_id].value*1) || document.formContainer['step2_keyB'+object_id].value=="")
                    {
                        keyB[object_id]="";
                        document.formContainer['step2_keyB'+object_id].value=keyB[object_id];
                    }
                    else
                    {
                        document.formContainer['step2_keyB'+object_id].value=document.formContainer['step2_keyB'+object_id].value*1;
                        keyB[object_id]=document.formContainer['step2_keyB'+object_id].value;
                    }
                }
                else if (cipher_num[object_id]==3)
                {
                    //caesar
                    if (isNaN(document.formContainer['step2_keyA'+object_id].value*1) || (document.formContainer['step2_keyA'+object_id].value*1)>25 || (document.formContainer['step2_keyA'+object_id].value*1)<0)
                    {
                        keyA[object_id]="";
                        document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                    }
                    else
                    {
                        document.formContainer['step2_keyA'+object_id].value=document.formContainer['step2_keyA'+object_id].value*1;
                        keyA[object_id]=document.formContainer['step2_keyA'+object_id].value;
                    }
                }
                else if (cipher_num[object_id]==4)
                {
                    //keyword and keyletter
                    document.formContainer['step2_keyA'+object_id].value=document.formContainer['step2_keyA'+object_id].value.toUpperCase();
                    tempText=document.formContainer['step2_keyA'+object_id].value;
		
                    keyA[object_id]="";
                    for (m=0; m<document.formContainer['step2_keyA'+object_id].value.length; m++)
                    {
                        if (alpha_chars.toUpperCase().indexOf(tempText.charAt(m))==-1)
                        {
                            //numbers/special characters not allowed
                            document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                            break;
                        }
                        if (m==document.formContainer['step2_keyA'+object_id].value.length-1)
                        {
                            if (document.formContainer['step2_keyA'+object_id].value=="")
                            {
                                document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                            }
                            else
                            {
                                keyA[object_id]=document.formContainer['step2_keyA'+object_id].value;
                            }
                        }
                    }
			
                    document.formContainer['step2_keyB'+object_id].value=document.formContainer['step2_keyB'+object_id].value.toUpperCase();
                    tempText=document.formContainer['step2_keyB'+object_id].value;
		
                    keyB[object_id]="";
                    if (document.formContainer['step2_keyB'+object_id].value=="" || alpha_chars.toUpperCase().indexOf(tempText)==-1)
                    {
                        document.formContainer['step2_keyB'+object_id].value=keyB[object_id];
                    }
                    else
                    {
                        keyB[object_id]=document.formContainer['step2_keyB'+object_id].value;
                    }
                    //alert(keyA[object_id]+", "+keyB[object_id]);
                    //checks only if typed in. deleting does not launch it.
                }
                else if (cipher_num[object_id]==5)
                {
                    //letter to number
                    if (isNaN(document.formContainer['step2_keyA'+object_id].value*1) || (document.formContainer['step2_keyA'+object_id].value*1)>25 || (document.formContainer['step2_keyA'+object_id].value*1)<0)
                    {
                        keyA[object_id]=0;
                        document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                    }
                    else
                    {
                        document.formContainer['step2_keyA'+object_id].value=document.formContainer['step2_keyA'+object_id].value*1;
                        keyA[object_id]=document.formContainer['step2_keyA'+object_id].value*1;
                    }
                }
                else if (cipher_num[object_id]==6)
                {
                    if (document.formContainer['step2_keyA'+object_id].value!=0)
                    {
                        keyA[object_id]=document.formContainer['step2_keyA'+object_id].value;
                    }
                    else
                    {
                        keyA[object_id]=0;
                    }
                }
                else if (cipher_num[object_id]==7)
                {
                    document.formContainer['step2_keyA'+object_id].value=document.formContainer['step2_keyA'+object_id].value.toUpperCase();
                    tempText=document.formContainer['step2_keyA'+object_id].value;
                    keyA[object_id]="";
                    for (m=0; m<document.formContainer['step2_keyA'+object_id].value.length; m++)
                    {
                        if (alpha_chars.toUpperCase().indexOf(tempText.charAt(m))==-1)
                        {
                            //numbers/special characters not allowed
                            document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                            break;
                        }
                        if (m==document.formContainer['step2_keyA'+object_id].value.length-1)
                        {
                            if (document.formContainer['step2_keyA'+object_id].value=="")
                            {
                                document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                            }
                            else
                            {
                                keyA[object_id]=document.formContainer['step2_keyA'+object_id].value;
                            }
                        }
                    }
                    //alert(keyA[object_id]);
                    //checks only if typed in. deleting does not launch it.
                }
                else if (cipher_num[object_id]==8)
                {
                    //your own cipher
                    keyA[object_id]=document.formContainer['step2_keyA'+object_id].value;
                }
            }
	
            function saveStep1()
            {
                locations_done=true;
                descriptions_done=true;
                for (j=1; j<total_fields+1; j++)
                {
                    step1_locations[j]=document.formContainer['step1_location'+j].value;
                    step1_descriptions[j]=document.formContainer['step1_description'+j].value;
                    if (step1_locations[j]=="")
                    {
                        locations_done=false;
                    }
                    if (step1_descriptions[j]=="")
                    {
                        descriptions_done=false;
                    }
                }
            }
	
            function reorderList()
            {
                saveStep1();
                for (j=1; j<total_fields+1; j++)
                {
                    if (isNaN(document.formContainer['step1_clue'+j].value*1) || (document.formContainer['step1_clue'+j].value*1==0) || (document.formContainer['step1_clue'+j].value*1>total_fields))
                    {
                        document.formContainer['step1_clue'+j].value=1;
                    }
                }
	
                new_order=[""];
                for (j=1; j<total_fields+1; j++)
                {
                    for (k=1; k<total_fields+1; k++)
                    {
                        if (document.formContainer['step1_clue'+k].value==j)
                        {
                            new_order[new_order.length]=k;
                        }
                    }
                }
                for (j=1; j<new_order.length; j++)
                {
                    document.formContainer['step1_clue'+j].value=j;
                    document.formContainer['step1_location'+j].value=step1_locations[new_order[j]];
                    document.formContainer['step1_description'+j].value=step1_descriptions[new_order[j]];
                }
		
                temp_keyA=[""];
                temp_keyB=[""];
                temp_print_keys=[""];
                temp_cipher_num=[""];
	
                temp_own_name=[""];
                temp_own_key=[""];
                temp_own_ciphertext=[""];
                for (i=1; i<your_own_name.length; i++)
                {
                    temp_own_name[i]=your_own_name[i];
                    temp_own_key[i]=your_own_key[i];
                    temp_own_ciphertext[i]=your_own_ciphertext[i];
                    your_own_name[i]="";
                    your_own_key[i]="";
                    your_own_ciphertext[i]="";
                }
		
                for (i=1; i<total_fields+1; i++)
                {
                    if (document.formContainer['step2_keyA'+new_order[i]])
                    {
                        temp_keyA[i]=document.formContainer['step2_keyA'+new_order[i]].value;
                    }
                    else
                    {
                        temp_keyA[i]=0;
                    }
                    if (document.formContainer['step2_keyB'+new_order[i]])
                    {
                        temp_keyB[i]=document.formContainer['step2_keyB'+new_order[i]].value;
                    }
                    else
                    {
                        temp_keyB[i]=0;
                    }
		
                    temp_print_keys[i]=print_keys[new_order[i]];
                    temp_cipher_num[i]=cipher_num[new_order[i]];
                }
		
                for (a=1; a<total_fields+1; a++)
                {
                    cipher_num[a]=temp_cipher_num[a];
                    keyA[a]=temp_keyA[a];
                    keyB[a]=temp_keyB[a];
                    updateCipher(a,cipher_num[a],0);
		
                    if (cipher_num[a]==8)
                    {
                        your_own_name[a]=temp_own_name[new_order[a]];
                        your_own_key[a]=temp_own_key[new_order[a]];
                        your_own_ciphertext[a]=temp_own_ciphertext[new_order[a]];
                    }
		
                    print_keys[a]=temp_print_keys[a];
                    if (document.images && (preloadFlag==true))
                    {
                        if (print_keys[a]==true)
                        {
                            document["step2_checkmark"+a].src="../images/btn_checkmark_on.gif";
                        }
                        else
                        {
                            document["step2_checkmark"+a].src="../images/btn_checkmark_off.gif";
                        }
                    }
                    //swap select fields "selected" around in step 2
                    document.formContainer['step2_cipher'+a].options[cipher_num[a]].selected=true;
                }
                saveStep1();
                reordered=true;
            }
            function updateList(num)
            {
                if (num!=0)
                {
                    saveStep1();
		
                    total_fields=num*1;
                    if ((step1_locations.length-1)<total_fields)
                    {
                        for (i=step1_locations.length; i<total_fields+1; i++)
                        {
                            step1_locations[i]="";
                            step1_descriptions[i]="";
                            print_keys[i]=true;
                            cipher_num[i]=0;
                            keyA[i]=0;
                            keyB[i]=0;
                            your_own_name[i]="";
                            your_own_key[i]="";
                            your_own_ciphertext[i]="";
                        }
                    }
                    else if ((step1_locations.length-1)>total_fields)
                    {
                        step1_locations.splice(total_fields+1,step1_locations.length-1);
                        step1_descriptions.splice(total_fields+1,step1_descriptions.length-1);
                        print_keys.splice(total_fields+1,print_keys.length-1);
                        cipher_num.splice(total_fields+1,cipher_num.length-1);
                        keyA.splice(total_fields+1,keyA.length-1);
                        keyB.splice(total_fields+1,keyB.length-1);
                        for (i=your_own_name.length-1; i>total_fields; i--)
                        {
                            your_own_name[i]="";
                            your_own_key[i]="";
                            your_own_ciphertext[i]="";
                        }
                    }
		
                    tempHTML='<div class="arial14pxBlackB">Now choose your hiding places and make plaintext clues to describe them.</div>';
                    tempHTML+='	<div style="border:2px solid #806b00; width:522px; margin-top:4px;">';
                    tempHTML+='		<table cellpadding="0" cellspacing="0" border="0" width="100%">';
                    tempHTML+='			<tr>';
                    tempHTML+='				<td class="header_step1"><div class="helvetica11pxTanB">Clue #</div></td>';
                    tempHTML+='				<td class="header_step1R"><div class="helvetica11pxTanB">Location Described</div></td>';
                    tempHTML+='				<td class="header_step1R"><div class="helvetica11pxTanB">Clue (Plaintext)</div></td>';
                    tempHTML+='			</tr>';
		
                    for (i=1; i<total_fields+1; i++)
                    {
                        tempHTML+='			<tr>';
                        tempHTML+='				<td class="col_step" align="center"><input id="step1_clue'+i+'" name="step1_clue'+i+'" type="text" value="'+i+'" style="width:34px; height:16px; text-align:right; color:#000000;" class="form_field" onkeyup="checkClueNum(this); return false;" maxlength="'+total_fields.toString.length+'" /></td>';
                        tempHTML+='				<td class="col_stepR" align="center"><input id="step1_location'+i+'" name="step1_location'+i+'" type="text" maxlength="50" style="width:160px; height:16px;" size="12" class="form_field" value="'+step1_locations[i]+'" /></td>';
                        tempHTML+='				<td class="col_stepR" align="center"><textarea onchange="cleanTextarea(this); return false;" onkeyup="cleanTextarea(this); return false;" id="step1_description'+i+'" name="step1_description'+i+'" rows="3" cols="26" class="monospace_field" style="padding-left:2px; padding-right:2px; resize:none; overflow:hidden; overflow-x:hidden; overflow-y:hidden; height:auto;">'+step1_descriptions[i]+'</textarea></td>';
                        tempHTML+='			</tr>';
                    }
			
                    tempHTML+='		</table>';
                    tempHTML+='	</div>';
                    tempHTML+='	<div style="padding:5px 0px 0px 0px;">';
                    tempHTML+='		<div class="floatL"><a href="#"';
                    tempHTML+='			onclick="reorderList(); return false;"';
                    tempHTML+='			onmouseover="changeImages(\'btn_reorder\', \'../images/btn_reorder_over.jpg\'); return true;"';
                    tempHTML+='			onmouseout="changeImages(\'btn_reorder\', \'../images/btn_reorder.jpg\'); return true;">';
                    tempHTML+='			<img id="btn_reorder" name="btn_reorder" src="../images/btn_reorder.jpg" width="112" height="19" alt="Re-order Clues" border="0" /></a></div>';
                    tempHTML+='		<div class="floatL" style="padding:2px 0px 0px 8px;"><em>(Enter desired clue numbers, then click to re-order them)</em></div>';
                    tempHTML+='	<br clear="all" /></div>';
                    document.getElementById('step1_fields').innerHTML=tempHTML;
		
                    //reset step 2 content:
                    tempHTML='<table cellpadding="0" cellspacing="0" border="0" width="100%" class="border_table">';
                    tempHTML+='	<tr>';
                    if (title_selected==false || document.formContainer["step1_name"].value=="")
                    {
                        tempHTML+='		<th colspan="5" align="center" id="bg_treasure_title"><div id="hunt_title">Treasure Hunt title appears here</div></td>';
                    }
                    else
                    {
                        tempHTML+='		<th colspan="5" align="center" id="bg_treasure_title"><div id="hunt_title">Clue Summary: '+document.formContainer["step1_name"].value+'</div></td>';
                    }
                    tempHTML+='	</tr>';
                    tempHTML+='	<tr>';
                    tempHTML+='		<td class="header_step2"><div class="helvetica11pxTanB">Location<br />Described</div></td>';
                    tempHTML+='		<td class="header_step2R" width="30" style="width:30px;"><div class="helvetica11pxTanB" style="width:300px;">Clue</div></td>';
                    tempHTML+='		<td class="header_step2R"><div class="helvetica11pxTanB">Cipher</div></td>';
                    tempHTML+='		<td class="header_step2R"><div class="helvetica11pxTanB">Key</div></td>';
                    tempHTML+='		<td class="header_step2R"><div class="helvetica11pxTanB">Is key<br />printed?</div></td>';
                    tempHTML+='	</tr>';
                    for (i=1; i<total_fields+1; i++)
                    {
                        tempHTML+='	<tr>';
                        tempHTML+='		<td class="col_step" align="center"><div class="arial14pxBlack" id="step2_location'+i+'"><em>'+step1_locations[i]+'</em></div></td>';
                        tempHTML+='		<td class="col_stepR"><div class="clue_text" id="step2_description'+i+'">'+step1_descriptions[i].split('\r').join('<br />')+'</div></td>';
                        tempHTML+='		<td class="col_stepR" align="center">';
                        tempHTML+='			<select id="step2_cipher'+i+'" name="step2_cipher'+i+'" onchange="updateCipher('+i+',this.value,1); return false;" class="select_field" style="font-style:normal;">';
                        tempHTML+='				<option value="0" id="step2_cipher'+i+'_num0">Choose Cipher</option>';
                        tempHTML+='				<option value="1" id="step2_cipher'+i+'_num1">Additive</option>';
                        tempHTML+='				<option value="2" id="step2_cipher'+i+'_num2">Affine</option>';
                        tempHTML+='				<option value="3" id="step2_cipher'+i+'_num3">Caesar</option>';
                        tempHTML+='				<option value="4" id="step2_cipher'+i+'_num4">Keyword</option>';
                        tempHTML+='				<option value="5" id="step2_cipher'+i+'_num5">Letter-&gt;Number</option>';
                        tempHTML+='				<option value="6" id="step2_cipher'+i+'_num6">Multiplicative</option>';
                        tempHTML+='				<option value="7" id="step2_cipher'+i+'_num7">Vigen&egrave;re</option>';
                        tempHTML+='				<option value="8" id="step2_cipher'+i+'_num8">Your Own Cipher</option>';
                        tempHTML+='			</select>';
                        tempHTML+='		</td>';
                        tempHTML+='		<td class="col_stepR" align="center"><div id="key_type'+i+'">&#0160;</div></td>';
                        if (print_keys[i]==true)
                        {
                            tempHTML+='		<td class="col_stepR" align="center"><div><a href="#" onclick="printKey('+i+'); return false;"><img id="step2_checkmark'+i+'" name="step2_checkmark'+i+'" src="../images/btn_checkmark_on.gif" width="18" height="19" alt="Checkmark" border="0" /></a></div></td>';
                        }
                        else
                        {
                            tempHTML+='		<td class="col_stepR" align="center"><div><a href="#" onclick="printKey('+i+'); return false;"><img id="step2_checkmark'+i+'" name="step2_checkmark'+i+'" src="../images/btn_checkmark_off.gif" width="18" height="19" alt="Checkmark" border="0" /></a></div></td>';
                        }
                    }
                    tempHTML+='</table>';
                    document.getElementById('step2_table').innerHTML=tempHTML;
                    for (n=1; n<total_fields+1; n++)
                    {
                        updateCipher(n,cipher_num[n],0);
                        if (cipher_num[n]>0)
                        {
                            document.formContainer['step2_cipher'+n].options[cipher_num[n]].selected=true;
                        }
                    }
                }
            }
	
            function printKey(num)
            {
                if (document.images && (preloadFlag==true))
                {
                    if (print_keys[num]==true)
                    {
                        print_keys[num]=false;
                        document["step2_checkmark"+num].src="../images/btn_checkmark_off.gif";
                    }
                    else
                    {
                        print_keys[num]=true;
                        document["step2_checkmark"+num].src="../images/btn_checkmark_on.gif";
                    }
                }
            }
	
            function getSample(num)
            {
                if (num==1)
                {
                    tempSample='<a href="#" onclick="getSample(1); return false;" class="arial_14pxTanB_on">Classroom</a> &#8226; <a href="#" onclick="getSample(2); return false;" class="arial_14pxTanB">School</a> &#8226; <a href="#" onclick="getSample(3); return false;" class="arial_14pxTanB">Playground</a>';
                }
                else if (num==2)
                {
                    tempSample='<a href="#" onclick="getSample(1); return false;" class="arial_14pxTanB">Classroom</a> &#8226; <a href="#" onclick="getSample(2); return false;" class="arial_14pxTanB_on">School</a> &#8226; <a href="#" onclick="getSample(3); return false;" class="arial_14pxTanB">Playground</a>';
                }
                else
                {
                    tempSample='<a href="#" onclick="getSample(1); return false;" class="arial_14pxTanB">Classroom</a> &#8226; <a href="#" onclick="getSample(2); return false;" class="arial_14pxTanB">School</a> &#8226; <a href="#" onclick="getSample(3); return false;" class="arial_14pxTanB_on">Playground</a>';
                }
                document.getElementById('sample_links').innerHTML=tempSample;
	
                for (q=1; q<12; q++)
                {
                    hideIt('sample_classtext'+q);
                    document.getElementById("sample_classtitle"+q).setAttribute("class","sample_off");
                    document.getElementById("sample_classtitle"+q).setAttribute("className","sample_off");
                    if (num==1)
                    {
                        showIt('sample_classroom'+q);
                    }
                    else
                    {
                        hideIt('sample_classroom'+q);
                    }
                }
                for (q=1; q<5; q++)
                {
                    hideIt('sample_schooltext'+q);
                    document.getElementById("sample_schooltitle"+q).setAttribute("class","sample_off");
                    document.getElementById("sample_schooltitle"+q).setAttribute("className","sample_off");
                    if (num==2)
                    {
                        showIt('sample_school'+q);
                    }
                    else
                    {
                        hideIt('sample_school'+q);
                    }
                }
                for (q=1; q<3; q++)
                {
                    hideIt('sample_playtext'+q);
                    document.getElementById("sample_playtitle"+q).setAttribute("class","sample_off");
                    document.getElementById("sample_playtitle"+q).setAttribute("className","sample_off");
                    if (num==3)
                    {
                        showIt('sample_playground'+q);
                    }
                    else
                    {
                        hideIt('sample_playground'+q);
                    }
                }
            }
	
            function toggleClassroomText(num)
            {
                element = findDOM('sample_classtext'+num,1);
                state = element.display;
                if (element.display=="block")
                {
                    hideIt('sample_classtext'+num);
                    document.getElementById("sample_classtitle"+num).setAttribute("class","sample_off");
                    document.getElementById("sample_classtitle"+num).setAttribute("className","sample_off");
                }
                else
                {
                    for (q=1; q<12; q++)
                    {
                        if (num==q)
                        {
                            showIt('sample_classtext'+q);
                            document.getElementById("sample_classtitle"+q).setAttribute("class","sample_on");
                            document.getElementById("sample_classtitle"+q).setAttribute("className","sample_on");
                        }
                        else
                        {
                            hideIt('sample_classtext'+q);
                            document.getElementById("sample_classtitle"+q).setAttribute("class","sample_off");
                            document.getElementById("sample_classtitle"+q).setAttribute("className","sample_off");
                        }
                    }
                }
            }
	
            function toggleSchoolText(num)
            {
                element = findDOM('sample_schooltext'+num,1);
                state = element.display;
                if (element.display=="block")
                {
                    hideIt('sample_schooltext'+num);
                    document.getElementById("sample_schooltitle"+num).setAttribute("class","sample_off");
                    document.getElementById("sample_schooltitle"+num).setAttribute("className","sample_off");
                }
                else
                {
                    for (q=1; q<5; q++)
                    {
                        if (num==q)
                        {
                            showIt('sample_schooltext'+q);
                            document.getElementById("sample_schooltitle"+q).setAttribute("class","sample_on");
                            document.getElementById("sample_schooltitle"+q).setAttribute("className","sample_on");
                        }
                        else
                        {
                            hideIt('sample_schooltext'+q);
                            document.getElementById("sample_schooltitle"+q).setAttribute("class","sample_off");
                            document.getElementById("sample_schooltitle"+q).setAttribute("className","sample_off");
                        }
                    }
                }
            }
	
            function togglePlaygroundText(num)
            {
                element = findDOM('sample_playtext'+num,1);
                state = element.display;
                if (element.display=="block")
                {
                    hideIt('sample_playtext'+num);
                    document.getElementById("sample_playtitle"+num).setAttribute("class","sample_off");
                    document.getElementById("sample_playtitle"+num).setAttribute("className","sample_off");
                }
                else
                {
                    for (q=1; q<3; q++)
                    {
                        if (num==q)
                        {
                            showIt('sample_playtext'+q);
                            document.getElementById("sample_playtitle"+q).setAttribute("class","sample_on");
                            document.getElementById("sample_playtitle"+q).setAttribute("className","sample_on");
                        }
                        else
                        {
                            hideIt('sample_playtext'+q);
                            document.getElementById("sample_playtitle"+q).setAttribute("class","sample_off");
                            document.getElementById("sample_playtitle"+q).setAttribute("className","sample_off");
                        }
                    }
                }
            }
	
            var myFrame="";
            function sampleHunt(num)
            {
                if (num==0)
                {
                    //show intro screen
                    hideIt('step0_sample');
                    showIt('content_step0');
                }
                else
                {
                    //show intro popup
                    showIt('step0_sample');
                    hideIt('content_step0');
                    myFrame=document.getElementById('sample_hunt');
                    myFrame.src='sample_hunt.php';
                }
            }
	
            function toggleSeeAll()
            {
                myFrame=document.getElementById('sample_hunt');
                myFrame.contentWindow.toggleAll();
            }
	
            function popupVigenere()
            {
                tb_show("popup_vigenere","popup_vigenere.html?placeValuesBeforeTB_=savedValues&TB_iframe=true&width=350&height=145&modal=true");
                document.getElementById("TB_window").style.background="none";
            }
	
            function popupWait()
            {
                tb_show("popup_wait","popup_wait.html?placeValuesBeforeTB_=savedValues&TB_iframe=true&width=250&height=120&modal=true");
                document.getElementById("TB_window").style.background="none";
            }
	
            function yourOwnDone()
            {
                if (document.formContainer.step4_name.value!="" && document.formContainer.step4_key.value!="")
                {
                    for (j=1; j<tempArray.length+1; j++)
                    {
                        if (document.formContainer['step4_line'+j].value=="" || document.formContainer['step4_line'+j].value==your_own_type)
                        {
                            return;
                            break;
                        }
                    }
			
                    for (j=1; j<tempArray.length+1; j++)
                    {
                        if (j==1)
                        {
                            your_own_ciphertext[currField]=document.formContainer['step4_line'+j].value;
                        }
                        else
                        {
                            your_own_ciphertext[currField]+="\r\n"+document.formContainer['step4_line'+j].value;
                        }
                    }
			
                    your_own_name[currField]=document.formContainer.step4_name.value;
                    your_own_key[currField]=document.formContainer.step4_key.value;
		
                    raw_ciphertext=your_own_ciphertext[currField];
                    keyA[currField]=your_own_key[currField];
		
                    /////////////////SOMETIMES AN ISSUE:
                    //alert("currField: "+currField+", "+keyA[currField]);
                    if (document.formContainer['step2_keyA'+currField]!=undefined)
                    {
                        document.formContainer['step2_keyA'+currField].value=keyA[currField];
                    }
		
                    updateStep(2);
                }
            }
	
            function getPreview()
            {
                document.getElementById('css_main').href='../styles_print_preview.css';
            }
	
            function closePreview()
            {
                document.getElementById('css_main').href='../styles.css';
            }
	
            function printPage()
            {
                if (window.print)
                {
                    window.print();  
                }
                else
                {
                    var WebBrowser = '<object id="WebBrowser1" width="0" height="0" classid="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></object>';
                    document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
                    WebBrowser1.ExecWB(6, 2);
                }
            }
            function downloadPDF()
            {
                alert('download pdf');
            }
	
            window.onresize=function()
            {
                hidePreview("preview_vigenere");
                hidePreview("preview_wheel");
            }
            // -->
        </script>
        <link id="css_main" href="../styles.css" type="text/css" rel="stylesheet" media="screen" />
        <link id="css_main" href="../thickbox.css" type="text/css" rel="stylesheet" media="screen" />
        <style type="text/css" media="print">
            <!--
            @import "../styles_print.css";
            -->
        </style>
    </head>
    <body bgcolor="#000000" text="#ffffff" link="#daab4c" alink="#daab4c" vlink="#cccc99" onload="preloadIntImages(); updateStep(0);">
        <div id="close_preview"><a href="#" onclick="closePreview(); return false;">Close Preview</a></div>
        <form id="formContainer" name="formContainer" action="" method="post">
            <div id="content_bg" align="center">
                <div id="barT_internal">
                    <div id="content_main" align="left">
                        <div id="login_info"><strong class="yellow_arialB">UserName</strong><br />
                            <a href="../login_new.php" class="arial_yellowB">Login</a></div>
                        <div id="logo_crypto"><a href="../index.php"><img src="../images/logo_blank.gif" width="184" height="124" alt="Crypto Club" border="0" /></a></div>
                        <div id="logo_crypto_print"><a href="../index.php"><img src="../images/logo_crypto.gif" width="184" height="124" alt="Crypto Club" border="0" /></a></div>
                        <div id="header" align="left">
                            <div id="games"><a href="../games/index.php"
                                               onmouseover="changeImages('btn_games', '../images/btn_games_over.jpg'); return true;"
                                               onmouseout="changeImages('btn_games', '../images/btn_games.jpg'); return true;">
                                    <img id="btn_games" name="btn_games" src="../images/btn_games.jpg" width="70" height="18" alt="Games" border="0" /></a></div>
                            <div id="challenges"><a href="../challenges/index.php"
                                                    onmouseover="changeImages('btn_challenges', '../images/btn_challenges_over.jpg'); return true;"
                                                    onmouseout="changeImages('btn_challenges', '../images/btn_challenges.jpg'); return true;">
                                    <img id="btn_challenges" name="btn_challenges" src="../images/btn_challenges.jpg" width="116" height="18" alt="Challenges" border="0" /></a></div>
                            <div id="tools"><a href="../tools/ciphers.php"
                                               onmouseover="changeImages('btn_tools', '../images/btn_tools_over.jpg'); return true;"
                                               onmouseout="changeImages('btn_tools', '../images/btn_tools.jpg'); return true;">
                                    <img id="btn_tools" name="btn_tools" src="../images/btn_tools.jpg" width="76" height="18" alt="Ciphers" border="0" /></a></div>
                            <div id="comics"><a href="../comics/index.php"
                                                onmouseover="changeImages('btn_comics', '../images/btn_comics_over.jpg'); return true;"
                                                onmouseout="changeImages('btn_comics', '../images/btn_comics.jpg'); return true;">
                                    <img id="btn_comics" name="btn_comics" src="../images/btn_comics.jpg" width="73" height="18" alt="Comics" border="0" /></a></div>
                            <div id="math"><a href="../math/index.php"
                                              onmouseover="changeImages('btn_math', '../images/btn_math_over.jpg'); return true;"
                                              onmouseout="changeImages('btn_math', '../images/btn_math.jpg'); return true;">
                                    <img id="btn_math" name="btn_math" src="../images/btn_math.jpg" width="55" height="18" alt="Math" border="0" /></a></div>
                            <div id="for_teachers"><a href="../teachers/index.php">
                                    <img id="btn_forteachers" name="btn_forteachers" src="../images/btn_forteachers_over.jpg" width="130" height="18" alt="For Teachers" border="0" /></a></div>
                        </div>
                        <div id="title"><img src="../images/title_cluegenerator.gif" width="506" height="27" alt="Treasure Hunt Clue Generator" /></div>
                        <div id="title_print">Treasure Hunt Clues</div>

                        <div id="subtitle_btns">
                            <div id="step0" style="float:left;"><a href="#"
                                                                   onclick="updateStep(0); return false;"
                                                                   onmouseover="updateMenu('btn_step0', '../images/btn_step0_over.jpg'); return true;"
                                                                   onmouseout="updateMenu('btn_step0', '../images/btn_step0.jpg'); return true;">
                                    <img id="btn_step0" name="btn_step0" src="../images/btn_step0.jpg" width="158" height="53" alt="Introduction" border="0" /></a></div>
                            <div id="step1" style="float:left; padding:0px 22px 0px 21px;"><a href="#"
                                                                                              onclick="updateStep(1); return false;"
                                                                                              onmouseover="updateMenu('btn_step1', '../images/btn_step1_over.jpg'); return true;"
                                                                                              onmouseout="updateMenu('btn_step1', '../images/btn_step1.jpg'); return true;">
                                    <img id="btn_step1" name="btn_step1" src="../images/btn_step1.jpg" width="157" height="53" alt="Step 1: Create Clues" border="0" /></a></div>
                            <div id="step2" style="float:left;"><a href="#"
                                                                   onclick="updateStep(2); return false;"
                                                                   onmouseover="updateMenu('btn_step2', '../images/btn_step2_over.jpg'); return true;"
                                                                   onmouseout="updateMenu('btn_step2', '../images/btn_step2.jpg'); return true;">
                                    <img id="btn_step2" name="btn_step2" src="../images/btn_step2.jpg" width="125" height="53" alt="Step 2: Encrypt" border="0" /></a></div>
                            <div id="step3" style="float:left; padding:0px 0px 0px 23px;"><a href="#"
                                                                                             onclick="updateStep(3); return false;"
                                                                                             onmouseover="updateMenu('btn_step3', '../images/btn_step3_over.jpg'); return true;"
                                                                                             onmouseout="updateMenu('btn_step3', '../images/btn_step3.jpg'); return true;">
                                    <img id="btn_step3" name="btn_step3" src="../images/btn_step3.jpg" width="178" height="53" alt="Step 3: Review and Print" border="0" /></a></div>
                        </div>

                        <div><br clear="all" /></div>
                        <div id="generator_content">
                            <noscript><div align="center">Please turn JavaScript on to view this page properly.</div></noscript>

                            <div id="content_step0" align="left">
                                <div class="box_588px">
                                    <div class="generator588_columnLT" align="center"><img src="../images/title_everyoneloves.gif" width="389" height="19" alt="Everyone Loves a Good Treasure Hunt" /></div>
                                    <div class="generator588_columnLM" align="center">
                                        <div style="padding-bottom:26px;"><em class="arial14pxBlack">But it can be time consuming to prepare the clues.</em></div>
                                        <div align="left" style="padding:12px 0px 0px 40px;"><img src="../images/title_thisclue.gif" width="199" height="20" alt="This Clue Generator" /></div>
                                        <div align="left" style="padding:12px 0px 0px 88px;">
                                            <div class="float_dotL"><img src="../images/dot_purple.gif" width="11" height="11" alt="" /></div>
                                            <div class="floatL"><em class="arial14pxBlackB">Helps you create clues for your treasure hunt</em></div>
                                            <div class="padding_4pxB"><br clear="all" /></div>
                                            <div class="float_dotL"><img src="../images/dot_purple.gif" width="11" height="11" alt="" /></div>
                                            <div class="floatL"><em class="arial14pxBlackB">Encrypts your clues with ciphers of your choice</em></div>
                                            <div class="padding_4pxB"><br clear="all" /></div>
                                            <div class="float_dotL"><img src="../images/dot_purple.gif" width="11" height="11" alt="" /></div>
                                            <div class="floatL"><em class="arial14pxBlackB">Prints your clues in a ready-to-use format</em></div>
                                            <div class="padding_4pxB"><br clear="all" /></div>
                                            <div class="float_dotL"><img src="../images/dot_purple.gif" width="11" height="11" alt="" /></div>
                                            <div class="floatL"><em class="arial14pxBlackB">Provides a summary to make the hunt easy to coordinate</em></div>
                                            <div><br clear="all" /></div>
                                        </div>
                                        <div style="padding-top:30px;"><img src="../images/title_followsteps.gif" width="515" height="20" alt="Follow Steps 1-2-3 to Create Your Own Treasure Hunt" /></div>
                                    </div>
                                    <div class="generator588_columnLB"></div>
                                </div>

                                <div class="box_190px">
                                    <div class="generator190_columnRT" align="center"><img src="../images/title_sample.gif" width="151" height="31" alt="Sample Classroom Treasure Hunt" /></div>
                                    <div class="generator190_columnRM" align="center">
                                        <div><a href="#" onclick="sampleHunt(1); return false;"><img src="../images/classroom.jpg" width="150" height="90" alt="Image of a classroom" border="0" /></a></div>
                                        <div style="padding-top:4px;"><strong>Click for a sample<br />
                                                classroom treasure hunt.</strong></div>
                                        <div><br /><a href="../pdfs/sampletreasurehunt.pdf" class="arial_purple">Printable clues for<br />this treasure hunt (PDF)</a></div>
                                    </div>
                                    <div class="generator190_columnRB"></div>
                                </div>

                                <div><br clear="all" /></div>
                                <div class="hide" align="center" style="padding:22px 0px 22px 0px;"><a href="#"
                                                                                                       onclick="updateStep(1); return false;"
                                                                                                       onmouseover="changeImages('btn_next', '../images/btn_next_createclues_over.jpg'); return true;"
                                                                                                       onmouseout="changeImages('btn_next', '../images/btn_next_createclues.jpg'); return true;">
                                        <img id="btn_next" name="btn_next" src="../images/btn_next_createclues.jpg" width="206" height="25" alt="Next: Create Clues" border="0" /></a></div>
                            </div>
                            <div id="step0_sample" align="left">
                                <div style="padding:16px 34px 12px 75px;">
                                    <div style="float:left; width:740px;">
                                        <div><img src="../images/title_samplehunt.gif" width="242" height="19" alt="Sample Classroom Hunt" /></div>
                                        <div class="arial14pxBlackB" style="padding:2px 55px 0px 0px;">In a treasure hunt, players follow a trail of encrypted clues in the classroom, playground, or other location to
                                            find a hidden treasure at the end. Click on locations to see the sample clues.</div>
                                    </div>
                                    <div style="float:left; padding-top:38px;"><a href="#"
                                                                                  onclick="toggleSeeAll(); return false;"
                                                                                  onmouseover="changeImages('btn_seeall', '../images/btn_seeall_over.gif'); return true;"
                                                                                  onmouseout="changeImages('btn_seeall', '../images/btn_seeall.gif'); return true;">
                                            <img id="btn_seeall" name="btn_seeall" src="../images/btn_seeall.gif" width="101" height="19" alt="Close Sample Hunt" border="0" /></a></div>
                                    <div><br clear="all" /></div>
                                </div>
                                <div align="center">
                                    <iframe id="sample_hunt" src="sample_hunt.php" width="896" height="396" frameborder="0" style="padding:0px; margin:0px; border:2px solid #806b00;"></iframe>
                                </div>
                                <div class="hide" align="center" style="padding:12px 0px 22px 0px;"><a href="#"
                                                                                                       onclick="sampleHunt(0); return false;"
                                                                                                       onmouseover="changeImages('btn_closesample', '../images/btn_closesample_over.jpg'); return true;"
                                                                                                       onmouseout="changeImages('btn_closesample', '../images/btn_closesample.jpg'); return true;">
                                        <img id="btn_closesample" name="btn_closesample" src="../images/btn_closesample.jpg" width="195" height="26" alt="Close Sample Hunt" border="0" /></a></div>
                            </div>

                            <div id="content_step1" align="left">
                                <div class="generator528_columnL">
                                    <div><img src="../images/title_step1.gif" width="207" height="15" alt="Step 1 - Create Clues" /></div>
                                    <div class="arial14pxBlackB" style="padding:15px 0px 12px 0px;">First, give your hunt a title:
                                        <input id="step1_name" name="step1_name" type="text" maxlength="50" style="width:189px; height:16px;" size="12" class="form_field" onfocus="updateName(this); return false;" value="" /></div>
                                    <div class="arial14pxBlackB" style="padding-bottom:12px;">Then choose the number of clues in your treasure hunt:
                                        <select id="step1_num" name="step1_num" onchange="updateList(this.value);" class="select_field" style="font-style:normal;" >
                                            <option value="0" id="step1_num0">Select</option>
                                            <option value="1" id="step1_num1">1</option>
                                            <option value="2" id="step1_num2">2</option>
                                            <option value="3" id="step1_num3">3</option>
                                            <option value="4" id="step1_num4">4</option>
                                            <option value="5" id="step1_num5">5</option>
                                            <option value="6" id="step1_num6">6</option>
                                            <option value="7" id="step1_num7">7</option>
                                            <option value="8" id="step1_num8">8</option>
                                        </select>
                                    </div>

                                    <div id="step1_fields"></div>
                                    <div class="hide" align="center" style="padding:22px 0px 22px 0px;"><a href="#"
                                                                                                           onclick="updateStep(2); return false;"
                                                                                                           onmouseover="changeImages('btn_next2', '../images/btn_next_encryption_over.jpg'); return true;"
                                                                                                           onmouseout="changeImages('btn_next2', '../images/btn_next_encryption.jpg'); return true;">
                                            <img id="btn_next2" name="btn_next2" src="../images/btn_next_encryption.jpg" width="185" height="25" alt="Next: Encryption" border="0" /></a></div>
                                </div>
                                <div class="box_240px">
                                    <div class="generator240_columnRT" align="center"><img src="../images/title_tips.gif" width="34" height="17" alt="Tips" /></div>
                                    <div class="generator240_columnRM" align="left">
                                        <div style="padding:0px 20px 0px 30px;">
                                            <ul>
                                                <li><em>A good hunt has about 5 clues.</em></li>
                                                <li><em>Make as many lines for your clues as there will be students in a group, so each student can work on a different line.</em></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="generator240_columnRB"></div>

                                    <div class="hide"><br /><br /></div>

                                    <div id="hide1" class="generator240_columnRT" align="center" style="padding-bottom:12px;"><img src="../images/title_sample.gif" width="151" height="31" alt="Sample Clues" /></div>
                                    <div id="hide2" class="generator240_columnRM">

                                        <div id="sample_links" align="center" style="padding-bottom:4px;"><a href="#" onclick="getSample(1); return false;" class="arial_14pxTanB_on">Classroom</a> &#8226;
                                            <a href="#" onclick="getSample(2); return false;" class="arial_14pxTanB">School</a> &#8226;
                                            <a href="#" onclick="getSample(3); return false;" class="arial_14pxTanB">Playground</a></div>

                                        <!--CLASSROOM SAMPLES-->
                                        <div id="sample_classroom1">
                                            <div id="sample_classtitle1" onclick="toggleClassroomText(1); return false;" class="sample_off">Bookshelf</div>
                                            <div id="sample_classtext1">
                                                <div class="sample_text">The first place<br />
                                                    That you should look,<br />
                                                    Is where you can<br />
                                                    Go to get a book.</div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom2">
                                            <div id="sample_classtitle2" onclick="toggleClassroomText(2); return false;" class="sample_off">Globe</div>
                                            <div id="sample_classtext2">
                                                <div class="sample_text">Find a map that<br />
                                                    Shows it all.<br />
                                                    It shows the world<br />
                                                    On one big ball.</div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom3">
                                            <div id="sample_classtitle3" onclick="toggleClassroomText(3); return false;" class="sample_off">Clock</div>
                                            <div id="sample_classtext3">
                                                <div class="sample_text">The next clue that<br />
                                                    You can find,<br />
                                                    Is near the place<br />
                                                    That tells the time.</div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom4">
                                            <div id="sample_classtitle4" onclick="toggleClassroomText(4); return false;" class="sample_off">Wastebasket</div>
                                            <div id="sample_classtext4">
                                                <div class="sample_text">As you clean up at<br />
                                                    The end of the day,<br />
                                                    This is where things<br />
                                                    Are thrown away.</div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom5">
                                            <div id="sample_classtitle5" onclick="toggleClassroomText(5); return false;" class="sample_off">Board</div>
                                            <div id="sample_classtext5">
                                                <div class="sample_text">Sometimes black,<br />
                                                    Sometimes white,<br />
                                                    This is a board on<br />
                                                    Which to write.</div>
                                            </div>
                                        </div>

                                        <div id="sample_classroom6">
                                            <div id="sample_classtitle6" onclick="toggleClassroomText(6); return false;" class="sample_off">Under Teacher's Desk</div>
                                            <div id="sample_classtext6">
                                                <div class="sample_text">Don't get tired.<br />
                                                    Do not rest.<br />
                                                    Next look under<br />
                                                    Teachers' desk.</div>
                                            </div>
                                        </div>

                                        <div id="sample_classroom7">
                                            <div id="sample_classtitle7" onclick="toggleClassroomText(7); return false;" class="sample_off">Telephone</div>
                                            <div id="sample_classtext7">
                                                <div class="sample_text">This makes a ring<br />
                                                    So you will know<br />
                                                    To pick it up<br />
                                                    And say hello.</div>
                                            </div>
                                        </div>

                                        <div id="sample_classroom8">
                                            <div id="sample_classtitle8" onclick="toggleClassroomText(8); return false;" class="sample_off">Sink</div>
                                            <div id="sample_classtext8">
                                                <div class="sample_text">Water comes in and<br />
                                                    Water goes out.<br />
                                                    This place has a drain<br />
                                                    And also a spout.</div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom9">
                                            <div id="sample_classtitle9" onclick="toggleClassroomText(9); return false;" class="sample_off">Projector</div>
                                            <div id="sample_classtext9">
                                                <div class="sample_text">Use this to shine things<br />
                                                    On wall or screen.<br />
                                                    It makes pictures larger<br />
                                                    So they can be seen.</div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom10">
                                            <div id="sample_classtitle10" onclick="toggleClassroomText(10); return false;" class="sample_off">Homework bin</div>
                                            <div id="sample_classtext10">
                                                <div class="sample_text">You usually put your<br />
                                                    Homework in this spot.<br />
                                                    The next envelope is here.<br />
                                                    But your homework is not.</div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom11">
                                            <div id="sample_classtitle11" onclick="toggleClassroomText(11); return false;" class="sample_off">Window</div>
                                            <div id="sample_classtext11">
                                                <div class="sample_text">You can look through me<br />
                                                    As if I am not there.<br />
                                                    In summer I keep heat out.<br />
                                                    In winter I block cold air.</div>
                                            </div>
                                        </div>

                                        <!--SCHOOL SAMPLES-->
                                        <div id="sample_school1">
                                            <div id="sample_schooltitle1" onclick="toggleSchoolText(1); return false;" class="sample_off">Lunch Room</div>
                                            <div id="sample_schooltext1">
                                                <div class="sample_text">This is the place to<br />
                                                    Have something to eat.<br />
                                                    Bring your own lunch<br />
                                                    Or get some other treat.</div>
                                            </div>
                                        </div>
                                        <div id="sample_school2">
                                            <div id="sample_schooltitle2" onclick="toggleSchoolText(2); return false;" class="sample_off">Water Fountain</div>
                                            <div id="sample_schooltext2">
                                                <div class="sample_text">At this useful place<br />
                                                    You do not need a cup.<br />
                                                    Turn a handle to make<br />
                                                    An arc of water come up.</div>
                                            </div>
                                        </div>
                                        <div id="sample_school3">
                                            <div id="sample_schooltitle3" onclick="toggleSchoolText(3); return false;" class="sample_off">Nurses' Office</div>
                                            <div id="sample_schooltext3">
                                                <div class="sample_text">They'll call your mom when<br />
                                                    You go here for the clue.<br />
                                                    If the mouth stick says<br />
                                                    One hundred and two.</div>
                                            </div>
                                        </div>
                                        <div id="sample_school4">
                                            <div id="sample_schooltitle4" onclick="toggleSchoolText(4); return false;" class="sample_off">Elevator</div>
                                            <div id="sample_schooltext4">
                                                <div class="sample_text">To go up and down,<br />
                                                    Go inside, close the door<br />
                                                    Push a number on a button<br />
                                                    To stop at your floor.</div>
                                            </div>
                                        </div>

                                        <!--PLAYGROUND SAMPLES-->
                                        <div id="sample_playground1">
                                            <div id="sample_playtitle1" onclick="togglePlaygroundText(1); return false;" class="sample_off">Swing</div>
                                            <div id="sample_playtext1">
                                                <div class="sample_text">Back and forth like<br />
                                                    A pendulum it glides.<br />
                                                    Up into the air,<br />
                                                    Then down you ride.</div>
                                            </div>
                                        </div>
                                        <div id="sample_playground2">
                                            <div id="sample_playtitle2" onclick="togglePlaygroundText(2); return false;" class="sample_off">Slide</div>
                                            <div id="sample_playtext2">
                                                <div class="sample_text">Climb up slowly<br />
                                                    Then zoom down<br />
                                                    Smooth and sleek<br />
                                                    Long, not round.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="hide3" class="generator240_columnRB"></div>
                                </div>

                                <div><br clear="all" /></div>
                            </div>

                            <div id="content_step2" align="left">
                                <div><img src="../images/title_step2.gif" width="164" height="19" alt="Step 2 - Encrypt" /></div>
                                <div class="arial14pxBlackB" style="padding:2px 0px 14px 0px;">Select your cipher and keys.</div>
                                <div id="step2_table" class="box_794px"></div>
                                <div class="hide" align="center" style="padding:22px 0px 22px 0px;"><a href="#"
                                                                                                       onclick="updateStep(3); return false;"
                                                                                                       onmouseover="changeImages('btn_next3', '../images/btn_next_review_over.jpg'); return true;"
                                                                                                       onmouseout="changeImages('btn_next3', '../images/btn_next_review.jpg'); return true;">
                                        <img id="btn_next3" name="btn_next3" src="../images/btn_next_review.jpg" width="185" height="25" alt="Next: Review and Print" border="0" /></a></div>
                            </div>

                            <div id="preview_vigenere"><img src="../images/preview_vigenere.jpg" width="150" height="200" alt="Image of Vigenere" /></div>
                            <div id="preview_wheel"><img src="../images/preview_wheel.gif" width="155" height="200" alt="Image of Wheel" /></div>

                            <div id="content_step3" align="left">
                                <div class="floatL" id="hide4">
                                    <div class="floatL"><img src="../images/title_step3.gif" width="238" height="15" alt="Step 3 - Review and Print" /></div>
                                    <!--<div class="floatL" style="padding-left:77px;"><a href="#"
                                            onclick="getPreview(); return false;"
                                            onmouseover="changeImages('btn_preview', '../images/btn_preview_over.gif'); return true;"
                                            onmouseout="changeImages('btn_preview', '../images/btn_preview.gif'); return true;">
                                            <img id="btn_preview" name="btn_preview" src="../images/btn_preview.gif" width="73" height="19" alt="Preview" border="0" /></a></div>
                                    <div class="floatL" style="padding-left:13px;"><a href="#" id="print-preview" name="print-preview"
                                            onclick="printPage(); return false;"
                                            onmouseover="changeImages('btn_print', '../images/btn_print_over.gif'); return true;"
                                            onmouseout="changeImages('btn_print', '../images/btn_print.gif'); return true;">
                                            <img id="btn_print" name="btn_print" src="../images/btn_print.gif" width="58" height="19" alt="Print" border="0" /></a></div>-->
                                    <div class="floatL" style="padding-left:11px;"><a href="#"
                                                                                      id="downloadPdf"
                                                                                      onmouseover="changeImages('btn_download', '../images/btn_download_over.gif'); return true;"
                                                                                      onmouseout="changeImages('btn_download', '../images/btn_download.gif'); return true;">
                                            <img id="btn_download" name="btn_download" src="../images/btn_download.gif" width="164" height="19" alt="Create Treasure Hunt PDF" border="0" /></a></div>
                                    <div><br clear="all" /></div>
                                    <div style="padding:16px 0px 14px 0px; width:585px;">
                                        <div class="arial14pxBlackB">Here is your treasure hunt, ready to print! If you want to change anything, click the buttons above to go back to the appropriate step.
                                            When you're ready, create your PDF!</div>

                                        <div class="arial14pxPurple"><br /><br /><strong>Directions For Setting Up Your Treasure Hunt</strong></div>
                                        <div class="arial12pxBlack"><br />Prepare clue envelopes. For each clue, make identical packets consisting of the parts of the clues stapled together. Each group will take a clue packet from
                                            the envelope.</div>
                                        <div class="arial12pxBlack"><br />Each group will take a packet from the envelope that contains all the parts of the  clue. Make clue packets for each group: Cut clues into parts and
                                            staple the parts of a clue together to make packets.</div>
                                        <div class="arial12pxBlack"><br />Put the identical packets into an envelope&#8212;one for each group, and label the envelope with the number of the clue and the location where it should be
                                            hidden.</div>

                                        <!--
                                        <ol style="margin-left:40px;">
                                                <li class="arial12pxBlack"><em class="arial12pxPurple">Prepare clue envelopes</em> by doing the following for each clue:
                                                        <ul style="margin-left:20px; padding-top:0px;">
                                                                <li class="arial12pxBlack">Print one copy of the clue for each group.</li>
                                                                <li class="arial12pxBlack">Cut each copy into parts along the dotted lines and staple the parts together to make a packet.</li>
                                                                <li class="arial12pxBlack">Put identical clue packets into an envelope, one packet for each group.</li>
                                                                <li class="arial12pxBlack">Write on the envelope the clue number and the location where the clue should be hidden.</li>
                                                        </ul></li>
                                                <li class="arial12pxBlack"><em class="arial12pxPurple">Hide the clue envelopes</em> in the locations described on the envelopes.</li>
                                                <li class="arial12pxBlack"><em class="arial12pxPurple">Hide the treasure</em> in the location described by the last clue.</li>
                                                <li class="arial12pxBlack"><em class="arial12pxPurple">Divide students into groups.</em> It is recommended to put the same number of students per group as there are parts to your clues, so that every student can have a
                                                        part to work on.</li>
                                                <li class="arial12pxBlack"><em class="arial12pxPurple">Begin the hunt</em> by opening the first clue envelope and distributing its packets to the groups.</li>
                                        </ol>
                                        -->
                                    </div>
                                </div>

                                <div id="handy_table" class="box_190px" style="padding:0px 0px 8px 25px;">
                                    <div class="generator190_columnRT" align="center"><img src="../images/title_handytables.gif" width="111" height="16" alt="Handy Tables" /></div>
                                    <div class="generator190_columnRM" align="left">
                                        <div style="padding:0px 17px 0px 17px;">
                                            <a href="../pdfs/Wheel.pdf" target="_blank" class="arial_11pxTanB"
                                               onmouseover="showPreview('preview_wheel',this); hidePreview('preview_vigenere'); return false;"
                                               ontouchstart="showPreview('preview_wheel',this); hidePreview('preview_vigenere'); return false;"
                                               ontouchend="hidePreview('preview_wheel'); return false;"
                                               onmouseout="hidePreview('preview_wheel'); return false;">Cipher Wheels</a><br />
                                            <a href="../pdfs/Vigenere.pdf" target="_blank" class="arial_11pxTanB"
                                               onmouseover="showPreview('preview_vigenere',this); hidePreview('preview_wheel'); return false;"
                                               ontouchstart="showPreview('preview_vigenere',this); hidePreview('preview_wheel'); return false;"
                                               ontouchend="hidePreview('preview_vigenere'); return false;"
                                               onmouseout="hidePreview('preview_vigenere'); return false;">Letter to Number Table and Vigen&egrave;re Square</a></div>
                                    </div>
                                    <div class="generator190_columnRB"></div>
                                </div>
                                <div class="hide"><br clear="all" /></div>
                                <div><br /></div>
                                <div id="step3_table" class="box_794px"></div>
                            </div>

                            <div id="content_step4" align="left">
                                <div class="floatL" style="width:360px; padding-right:36px;">
                                    <div><img src="../images/title_step4.gif" width="178" height="19" alt="Your Own Cipher" /></div>
                                    <div style="padding-top:3px;">
                                        <div class="arial14pxBlackB">Type your cipher's name and key as you want them to appear on the printed clue.</div>
                                        <div class="arial14pxBlackB"><br />Encrypt the clue with your cipher and type the ciphertext below the plaintext.</div>
                                    </div>
                                </div>

                                <div class="box_359px">
                                    <div class="generator359_columnLT" align="center"></div>
                                    <div class="generator359_columnLM" align="center">
                                        <table cellpadding="2" cellspacing="0" border="0">
                                            <tr>
                                                <td align="right"><div class="arial14pxBlackB">Cipher Name:</div></td>
                                                <td><input id="step4_name" name="step4_name" type="text" maxlength="50" style="width:180px; height:16px; margin-left:5px;" size="12" class="form_field" onfocus="updateName4(this); return false;" /></td>
                                            </tr>
                                            <tr>
                                                <td align="right" style="padding-top:10px;"><div><em>Key or Other<br />Info to Display</em></div></td>
                                                <td style="padding-top:10px;"><input id="step4_key" name="step4_key" type="text" maxlength="26" style="width:180px; height:12px; margin-left:5px;" size="12" class="form_key" onfocus="updateKey4(this); return false;" /></td>
                                            </tr>
                                        </table>

                                        <div id="your_own_message"></div>

                                        <div style="width:145px; height:19px; padding:26px 0px 0px 0px;">
                                            <div class="floatL" style="padding-right:20px;"><a href="#" onclick="updateStep(2); return false;"
                                                                                               onmouseover="changeImages('btn_cancel', '../images/btn_cancel_over.jpg'); return true;"
                                                                                               onmouseout="changeImages('btn_cancel', '../images/btn_cancel.jpg'); return true;">
                                                    <img id="btn_cancel" name="btn_cancel" src="../images/btn_cancel.jpg" width="67" height="19" alt="Cancel" border="0" /></a></div>
                                            <div class="floatL"><a href="#" onclick="yourOwnDone(); return false;"
                                                                   onmouseover="changeImages('btn_done', '../images/btn_done_over.jpg'); return true;"
                                                                   onmouseout="changeImages('btn_done', '../images/btn_done.jpg'); return true;">
                                                    <img id="btn_done" name="btn_done" src="../images/btn_done.jpg" width="58" height="19" alt="Done" border="0" /></a></div>
                                        </div>
                                    </div>
                                    <div class="generator359_columnLB"></div>
                                </div>
                                <div class="hide"><br clear="all" /></div>
                            </div>
                        </div>

                        <?php echo load_view('footer') ?>
                    </div>
                </div>
            </div>
            <div id="barB_internal"></div>
        </form>
    </body>
</html>
