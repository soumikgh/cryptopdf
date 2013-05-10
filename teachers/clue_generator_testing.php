<?php 
require '../common/header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Crypto Club: For Teachers: Treasure Hunt Clue Generator</title>
        <meta name="title" content="Crypto Club: For Teachers: Treasure Hunt Clue Generator" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="NEED KEYWORDS" />
        <meta name="description" content="NEED DESCRIPTION" />
        <meta http-equiv="expires" content="0" />
        <script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" type="text/javascript" src="../thickbox.js"></script>
        <script language="javascript" type="text/javascript" src="../teachers/pdf.js"></script>
        <script language="javascript" type="text/javascript" src="../scripts.js"></script>
        <script language="javascript" type="text/javascript">
            <!--
            var alpha_chars="abcdefghijklmnopqrstuvwxyz";
            var alpha_chars_up=alpha_chars.toUpperCase();
            var alpha_new="";
            var array_cipher=[""];
            var array_plain=[""];
            var array1=[""];
            var array2=[""];
            var charLocation;
            var cipher_names=["","Additive","Affine","Caesar","Keyword","Letter-&gt;Number","Multiplicative","Vigen&egrave;re","Your Own Cipher"];
            var cipher_num=[""];
            var cipher_text="";
            var clues=[""];
			var clue_order=[""];
			var container_visible1=["",true,true,true,true,false,false,false,false];
			var container_visible2=["",true,true,true,true,false,false,false,false];
			var container_visible3=["",true,true,true,true,false,false,false,false];
			var container_visible4=["",true,true,true,true,false,false,false,false];
			var container_visible5=["",true,true,true,true,false,false,false,false];
			var container_visible6=["",true,true,true,true,false,false,false,false];
			var container_visible7=["",true,true,true,true,false,false,false,false];
			var container_visible8=["",true,true,true,true,false,false,false,false];
			var container_visible_new1=["",false,false,false,false,false,false,false,false];
			var container_visible_new2=["",false,false,false,false,false,false,false,false];
			var container_visible_new3=["",false,false,false,false,false,false,false,false];
			var container_visible_new4=["",false,false,false,false,false,false,false,false];
			var container_visible_new5=["",false,false,false,false,false,false,false,false];
			var container_visible_new6=["",false,false,false,false,false,false,false,false];
			var container_visible_new7=["",false,false,false,false,false,false,false,false];
			var container_visible_new8=["",false,false,false,false,false,false,false,false];
            var converted_text="";
            var converted_text_paper="";
            var currChar=0;
            var currField=0;
            var currLoc=0;
            var currLocMax=44;
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
            var prime_nums=["",1,3,5,7,11,13,17,19,23];
            //var prime_multiplicative_nums=["",1,3,5,7,9,11,15,17,19,21,23,25];
            var print_keys=[""];
			var sample_text1=[""];
			sample_text1[1]="The first place that<br />You should look<br />Is where you can<br />Go to find a book.";
			sample_text1[2]="Find a map that<br />Shows it all.<br />It shows the world<br />On one big ball.";
			sample_text1[3]="The next clue<br />That you can find<br />Is near the place<br />That tells the time.";
			sample_text1[4]="As you clean up at<br />The end of the day,<br />This is where things<br />Are thrown away.";
			sample_text1[5]="Sometimes black,<br />Sometimes white,<br />This is a board on<br />Which to write.";
			sample_text1[6]="Don't get tired,<br />Do not rest.<br />Next look under<br />Teacher's desk.";
			sample_text1[7]="I swing between<br />The room and hall.<br />I am not as wide<br />As I am tall.";
			sample_text1[8]="Four glass walls<br />Are all around.<br />If you don't have gills<br />Then you will drown.";
			sample_text1[9]="This makes a ring<br />So you will know<br />To pick it up<br />And say hello.";
			sample_text1[10]="Water comes in and<br />Water goes out.<br />This place has a drain<br />And also a spout.";
			sample_text1[11]="Use this to shine things<br />On wall or screen.<br />It makes pictures larger<br />So they can be seen.";
			sample_text1[12]="You usually put your<br />Homework in this spot.<br />The next envelope is here<br />But your homework is not.";
			sample_text1[13]="You can look through me<br />As if I am not there.<br />In summer I keep heat out,<br />In winter I block cold air.";
			var sample_text2=["","This is the place to<br />Have something to eat.<br />Bring your own lunch<br />Or get some other treat.","At this useful place<br />You do not need a cup.<br />Turn a handle to make<br />An arc of water come up.","They'll call your mom<br />When you go here for the clue<br />If the mouth stick says<br />One hundred and two.","To ride up and down,<br />Go in and close the door.<br />Push a number on a button<br />To stop at your floor."];
			var sample_text3=["","Back and forth like<br />A pendulum it glides.<br />Up into the air,<br />Then down you ride.","Climb up slowly<br />Then zoom down.<br />Smooth and sleek<br />Long, not round."];
            var sample_titles1=["","Bookshelf","Globe","Clock","Wastebasket","Board","Under Teacher's Desk","Door","Fishtank","Telephone","Sink","Projector","Homework Bin","Window"];
			var sample_titles2=["","Lunch Room","Water Fountain","Nurse's Office","Elevator"];
			var sample_titles3=["","Swing","Slide"];
			var show_step=false;
            var startNum=0;
            var step1_descriptions=[""];
            var step1_descriptions1=["","","","","","","","",""];
            var step1_descriptions2=["","","","","","","","",""];
            var step1_descriptions3=["","","","","","","","",""];
            var step1_descriptions4=["","","","","","","","",""];
            var step1_descriptions5=["","","","","","","","",""];
            var step1_descriptions6=["","","","","","","","",""];
            var step1_descriptions7=["","","","","","","","",""];
            var step1_descriptions8=["","","","","","","","",""];
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
            var tempArraySplit=[""];
            var tempHTML="";
            var tempHTML2="";
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
            cleanUpList=function(fld)
            	{
                var charLimit=26;
                var lineLimit=20;
                var cleanList=[];
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
                if (cleanList.length>lineLimit)
                	{
                    cleanList.pop();	// remove last line
                    fld.value=cleanList.join('\n'); // restore from array
                	}
                fld.onblur=function()
                	{
                    this.value=cleanList.join('\n');
                	} // onblur - restore from array
            	}
            function cleanTextarea(object_id)
            	{
                cleanUpList(object_id);
                //removed characters per line script.
	
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
				
            function updateStep(num)
            	{
				if (num==0)
					{
					for (m=1; m<4; m++)
						{
						for (n=1; n<window['sample_text'+m].length; n++)
							{
							document.getElementById('sample'+m+'_'+n).innerHTML=window['sample_text'+m][n];
							if (m==1)
								{
								if (n>1) {document.getElementById('sample_classtitle'+n).innerHTML=window['sample_titles'+m][n];}
								else {document.getElementById('sample_classtitle1a').innerHTML=window['sample_titles'+m][n];}
								}
							else if (m==2) {document.getElementById('sample_schooltitle'+n).innerHTML=window['sample_titles'+m][n];}
							else {document.getElementById('sample_playtitle'+n).innerHTML=window['sample_titles'+m][n];}
							}
						}
					}
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
				
				if (show_step==false)
					{
					if (num==3)
						{
						popupReviewPrint();
						return;
						}
					else
						{
						if (num==2 && locations_done==true && descriptions_done==true)
							{
							show_step=true;
							}
						else
							{
							popupWait();
							return;
							}
						}
					}
                if (show_step==true)
                	{
                    currMenu=num;
                    clues=[""];
					if (currMenu!=1 && total_fields>0)
						{
						for (i=1; i<total_fields+1; i++)
							{
							document.formContainer['step1_clue'+i].value=i;
							clue_order[i]=i;
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
                            document.getElementById('hunt_title').innerHTML=document.formContainer["step1_name"].value;
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
                        //tempHTML2 used for example piece of paper:
                        tempHTML2='<div class="floatR"><div class="arial14pxBlack">Clue 1, Line 1</div></div>';
			
                        tempHTML='<table cellpadding="6" cellspacing="0" border="0" width="100%" class="border_table">';
                        tempHTML+='	<tr>';
                        if (title_selected==false || document.formContainer["step1_name"].value=="")
                        	{
                            tempHTML+='		<th colspan="5" align="center" id="bg_treasure_title"><div id="hunt_title">Treasure Hunt title appears here</div></td>';
                            generator_title="Treasure Hunt title appears here";
                        	}
                        else
                        	{
                            tempHTML+='		<th colspan="5" align="center" id="bg_treasure_title"><div id="hunt_title">'+document.formContainer["step1_name"].value+' Clue Summary</div></td>';
                            generator_title=document.formContainer["step1_name"].value;
                        	}
                        tempHTML+='	</tr>';
                        tempHTML+='	<tr>';
                        tempHTML+='		<td class="header_step2" style="padding:0px 3px 0px 3px;"><div class="helvetica11pxTanB">Clue #</div></td>';
                        tempHTML+='		<td class="header_step2R" style="padding:0px 3px 0px 3px;"><div class="helvetica11pxTanB">Location<br />Described</div></td>';
                        tempHTML+='		<td class="header_step2R" style="width:400px;"><div class="helvetica11pxTanB">Clue (Plaintext and CIPHERTEXT)</div></td>';
                        tempHTML+='		<td class="header_step2R" style="padding:0px 3px 0px 3px;"><div class="helvetica11pxTanB">Cipher</div></td>';
                        tempHTML+='		<td class="header_step2R" style="padding:0px 3px 0px 3px;"><div class="helvetica11pxTanB">Print Key?</div></td>';
                        tempHTML+='	</tr>';
			
                        for (i=1; i<total_fields+1; i++)
                        	{
                            if (cipher_num[i]!=8)
                            	{
                                converted_text=encryptText(step1_descriptions[i],cipher_num[i],i);
                            	}
				
                            tempHTML+='	<tr>';
                            tempHTML+='		<td class="col_step" align="center"><div class="arial14pxBlack">'+i+'</div></td>';
                            tempHTML+='		<td class="col_stepR" align="center"><div class="arial14pxBlack"><em>'+step1_locations[i]+'</em></div></td>';
                            if (cipher_num[i]!=8)
                            	{
                                //paper code first line
                                if (i==1){converted_text_paper=cipher_text.split("()")[0];}
								if (cipher_num[i]==1 || cipher_num[i]==5 || cipher_num[i]==8)
									{
                              	  	tempHTML+='		<td class="col_stepR" style="width:460px;"><div class="clue_textS" style="width:460px;">'+converted_text+'</div></td>';
                               	 	tempHTML+='		<td class="col_stepR" align="center"><div class="arial14pxBlack">'+cipher_names[cipher_num[i]]+'</div><div>';
									}
								else
									{
                              	  	tempHTML+='		<td class="col_stepR" style="width:460px;"><div class="clue_textS" style="width:460px;">&#0160;'+converted_text.split("&#0160;").join("##").split("<br />").join("[[").split("").join(" ").split(" # #").join("&#0160;&#0160;").split(" ").join("&#0160; ").split("&#0160; [&#0160; [").join("<br />").split("<br />&#0160; ").join("<br />&#0160;")+'</div></td>';
                               	 	tempHTML+='		<td class="col_stepR" align="center"><div class="arial14pxBlack">'+cipher_names[cipher_num[i]]+'</div><div>';
									}
                                //paper code
                                if (i==1){tempHTML2+='<div class="arial14pxBlack">'+cipher_names[cipher_num[i]]+',<br />';}
                            	}
                            else
                            	{//your own cipher...
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
                                        //paper code first line.
                                        if (i==1){converted_text_paper=tempArray2[j];}
                                    	}
                                    else
                                    	{
                                        tempHTML+='<br /><br />'+tempArray[j]+'<br />'+tempArray2[j];
                                    	}
                                	}
                                tempHTML+='</div></td>';
                                tempHTML+='		<td class="col_stepR" align="center"><div class="arial14pxBlack">'+your_own_name[i]+'</div><div>';
					
                                //paper code
                                if (i==1){tempHTML2+='<div class="arial14pxBlack">'+your_own_name[i]+',<br />';}
                            	}
				
                            if (cipher_num[i]==1)
                            	{
                                if (keyA[i]!="")
                                	{
                                    tempHTML+='Key = '+keyA[i];
                                    //paper code
                                    if (i==1){tempHTML2+='Key = '+keyA[i]+'</div>';}
                                	}
                                else
                                	{
									popupReviewPrint();
                                    return;
                                	}
                            	}
                            else if (cipher_num[i]==2)
                            	{
                                if (keyA[i]!=0)
                                	{
                                    tempHTML+='Key:<br />Multiplicative = '+keyA[i]+'<br />';
                                    //paper code
                                    if (i==1){tempHTML2+='Key:<br />Multiplicative = '+keyA[i]+'<br />';}
                                	}
                                else
                                	{
									popupReviewPrint();
                                    return;
                                	}
                                if (keyB[i]!="")
                                	{
                                    tempHTML+='Additive = '+keyB[i];
                                    //paper code
                                    if (i==1){tempHTML2+='Additive = '+keyB[i]+'</div>';}
                                	}
                                else
                                	{
									popupReviewPrint();
                                    return;
                                	}
                            	}
                            else if (cipher_num[i]==3)
                            	{
                                if (keyA[i]!="")
                                	{
                                    tempHTML+='Key = '+keyA[i];
                                    //paper code
                                    if (i==1){tempHTML2+='Key = '+keyA[i]+'</div>';}
                                	}
                                else
                                	{
									popupReviewPrint();
                                    return;
                                	}
                            	}
                            else if (cipher_num[i]==4)
                            	{
                                if (keyA[i]!="" && keyB[i]!="")
                                	{
                                    tempHTML+='Keyword = '+keyA[i]+'<br />';
                                    tempHTML+='keyletter = '+keyB[i];
					
                                    //paper code
                                    if (i==1){tempHTML2+='Keyword = '+keyA[i]+'<br />keyletter = '+keyB[i]+'</div>';}
                                	}
                                else
                                	{
									popupReviewPrint();
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
                                    //paper code
                                    if (i==1){tempHTML2+='Key = '+keyA[i]+'</div>';}
                                	}
                                else
                                	{
									popupReviewPrint();
                                    return;
                               	 	}
                            	}
                            else if (cipher_num[i]==7)
                            	{
                                if (keyA[i]!="")
                                	{
                                    tempHTML+='Keyword = '+keyA[i];
                                    //paper code
                                    if (i==1){tempHTML2+='Keyword = '+keyA[i]+'</div>';}
                                	}
                                else
                                	{
									popupReviewPrint();
                                    return;
                                	}
                            	}
                            else if (cipher_num[i]==8)
                            	{
                                //your cipher
                                if (keyA[i]!="")
                                	{
                                    tempHTML+='Keyword or Other<br />info to Display:<br />'+keyA[i];
                                    //paper code
                                    if (i==1){tempHTML2+='Keyword or Other<br />info to Display:<br />'+keyA[i]+'</div>';}
                                	}
                                else
                                	{
									popupReviewPrint();
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
			
			
                        //alert(converted_text_paper);
                        tempHTML2+='<div class="clue_text" style="padding:0px; text-align:center;"><br />'+converted_text_paper+'</div>';
                        document.getElementById('sample_clue').innerHTML=tempHTML2;
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
                                //tempHTML+='<input id="step4_line'+(i+1)+'" name="step4_line'+(i+1)+'" type="text" maxlength="'+tempArray[i].length+'" style="width:200px; height:16px;" size="12" class="form_monospace" value="'+tempArray2[i]+'" />';
                            	tempHTML+='<input id="step4_line'+(i+1)+'" name="step4_line'+(i+1)+'" type="text" style="width:200px; height:16px;" size="12" class="form_monospace" value="'+tempArray2[i]+'" />';
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
                                //tempHTML+='<input id="step4_line'+(i+1)+'" name="step4_line'+(i+1)+'" type="text" maxlength="35" style="width:200px; height:16px;" size="12" onfocus="updateYourValue(this,'+tempArray[i].length+'); return false;" class="form_monospace" value="'+temp_value+'" />';
                            	tempHTML+='<input id="step4_line'+(i+1)+'" name="step4_line'+(i+1)+'" type="text" style="width:200px; height:16px;" size="12" onfocus="updateYourValue(this,'+tempArray[i].length+'); return false;" class="form_monospace" value="'+temp_value+'" />';
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
                    if (cipher==1 || cipher==5)
                    	{
                        tempArraySplit=array_plain[0].split(' &#0160;').join('').split(' ').join('');
                        currLoc=tempArraySplit.length;
                        //alert(currLoc);
                        for (j=1; j<array_plain.length; j++)
                        	{
                            loop_continue=true;
                            if (tempArraySplit.length>1)
                            	{
                                if (array_plain[j].charAt(0)=="(" && array_plain[j].charAt(1)==")")
                                	{
                                    currLoc=tempArraySplit.length;
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
                                tempArraySplit=array_plain[j].split(' &#0160;').join('').split(' ').join('');
                                //alert(((currLoc*1)+(tempArraySplit.length*1))+1);
                                if (((currLoc*1)+(tempArraySplit.length*1)+1)>26)
                                	{
                                    array_cipher[j]="()"+array_cipher[j];
                                    array_plain[j]="()"+array_plain[j];
                                    currLoc=(tempArraySplit.length*1);
                                	}
                                else
                                	{
                                    currLoc+=(tempArraySplit.length*1)+1;
                                	}
                            	}
                        	}
                    	}
                    else
                    	{
                        currLoc=array_plain[0].length;
                        //alert(currLoc);
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
                                //alert(((currLoc*1)+(array_plain[j].length*1)+(num_added*1)));
                                if (((currLoc*1)+(array_plain[j].length*1)+(num_added*1))>26)
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
                    	}
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
                                    plaintext+="&#0160;&#0160;&#0160;"+array_plain[j];
                                    cipher_text+="&#0160;&#0160;&#0160;"+array_cipher[j];
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
                        cipher_num[object_id]=num;
                   	 	}
                	}
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
                    tempHTML='<em><strong>Key (0-25)</strong></em> <input type="text" id="step2_keyA'+object_id+'" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" />';
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
                    //(1,3,5,7,9,11,15,17,19,21,23,25)
                    //tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><em><strong>Multiplicative Key: </strong></em> </td><td><input type="text" id="step2_keyA'+object_id+'" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" /></td></tr>';
                    tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><em><strong>Multiplicative Key </strong></em> </td><td><select id="step2_keyA'+object_id+'" onchange="checkKey('+object_id+'); return false;" class="select_field" style="font-style:normal;"><option value="0" id="step2_key0">Select</option><option value="1" id="step2_key1">1</option><option value="3" id="step2_key2">3</option><option value="5" id="step2_key3">5</option><option value="7" id="step2_key4">7</option><option value="9" id="step2_key5">9</option><option value="11" id="step2_key6">11</option><option value="15" id="step2_key7">15</option><option value="17" id="step2_key8">17</option><option value="19" id="step2_key9">19</option><option value="21" id="step2_key10">21</option><option value="23" id="step2_key11">23</option><option value="25" id="step2_key12">25</option></select></td></tr>';
                    tempHTML+='<tr><td align="right"><em><strong>Additive Key <br />(0-25) </strong></em></td><td align="left"><input type="text" id="step2_keyB'+object_id+'" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyB[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" /></td></tr></table>';
                	}
                else if (num==3)
                	{
                    //0-25 key num a=A with 0 a=B with 1
                    //caesar: use a:number
                    if (reset_obj==true)
                    	{
                        keyA[object_id]="";
                    	}
                    tempHTML='<em><strong>Key (0-25)</strong></em> <input type="text" id="step2_keyA'+object_id+'" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" />';
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
                    tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><em><strong>Keyword</strong></em> </td><td><input type="text" id="step2_keyA'+object_id+'" maxlength="26" class="form_field11px" style="width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" /></td></tr>';
                    tempHTML+='<tr><td align="right"><em><strong>keyletter</strong></em> </td><td align="left"><input type="text" id="step2_keyB'+object_id+'" maxlength="1" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyB[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" /></td></tr></table>';
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
                    tempHTML='<em><strong>Key</strong></em> <select id="step2_keyA'+object_id+'" onchange="checkKey('+object_id+'); return false;" class="select_field" style="font-style:normal;"><option value="0" id="step2_key0">Select</option><option value="1" id="step2_key1">1</option><option value="3" id="step2_key2">3</option><option value="5" id="step2_key3">5</option><option value="7" id="step2_key4">7</option><option value="9" id="step2_key5">9</option><option value="11" id="step2_key6">11</option><option value="15" id="step2_key7">15</option><option value="17" id="step2_key8">17</option><option value="19" id="step2_key9">19</option><option value="21" id="step2_key10">21</option><option value="23" id="step2_key11">23</option><option value="25" id="step2_key12">25</option></select>';
                	}
                else if (num==7)
                	{
                    //vigenere: use a:word--26 letters or less
                    //keyword characters repeated above message to encrypt--check swf for details
                    if (reset_obj==true)
                    	{
                        keyA[object_id]="";
                    	}
                    tempHTML='<em><strong>Keyword</strong></em> <input type="text" id="step2_keyA'+object_id+'" maxlength="26" class="form_field11px" style="width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" />';
                	}
                else if (num==8)
                	{
                    //your_own_message
                    //keyA[object_id]=your_own_key[object_id];
                    tempHTML='<div style="padding-top:2px; padding-bottom:2px;"><em><strong>Keyword or Other<br />info to Display</strong></em><br /><input type="text" id="step2_keyA'+object_id+'" readonly="readonly" maxlength="26" class="form_field11px" style="margin-top:2px; margin-bottom:2px; width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA[object_id]+'" onkeyup="checkKey('+object_id+'); return false;" /><br /><a href="#" onclick="getStep(4,'+object_id+'); return false;">Make Changes</a></div>';
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
                //object_id.maxLength=num;
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
	
            function checkClueNum(object_id,num)
            	{
                if (isNaN(object_id.value*1) || (object_id.value*1==0) || (object_id.value*1>total_fields) || object_id.value=="")
                	{
                    object_id.value="";
                	}
                else
                	{
                    object_id.value=object_id.value*1;
					clue_order[num]=object_id.value;
                	}
            	}
	
            function checkClueNumDone(object_id,num)
            	{
                if (isNaN(object_id.value*1) || (object_id.value*1==0) || (object_id.value*1>total_fields) || object_id.value=="")
                	{
                    object_id.value=clue_order[num];
                	}
            	}
	
            function checkKey(object_id)
            	{
                if (cipher_num[object_id]==1)
                	{
                    //additive
                    if (isNaN(document.formContainer['step2_keyA'+object_id].value*1) || (document.formContainer['step2_keyA'+object_id].value*1)>25 || (document.formContainer['step2_keyA'+object_id].value*1)<0 || document.formContainer['step2_keyA'+object_id].value=="")
                    	{
                        keyA[object_id]="";
                        document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                    	}
                    else
                    	{
                        document.formContainer['step2_keyA'+object_id].value=document.formContainer['step2_keyA'+object_id].value*1;
                        keyA[object_id]=document.formContainer['step2_keyA'+object_id].value*1;
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
			
                    if (isNaN(document.formContainer['step2_keyB'+object_id].value*1) || (document.formContainer['step2_keyB'+object_id].value*1)>25 || (document.formContainer['step2_keyB'+object_id].value*1)<0 || document.formContainer['step2_keyB'+object_id].value=="")
                    	{
                        keyB[object_id]="";
                        document.formContainer['step2_keyB'+object_id].value=keyB[object_id];
                    	}
                    else
                    	{
                        document.formContainer['step2_keyB'+object_id].value=document.formContainer['step2_keyB'+object_id].value*1;
                        keyB[object_id]=document.formContainer['step2_keyB'+object_id].value*1;
                    	}
                	}
                if (cipher_num[object_id]==3)
                	{
                    //caesar
                    if (isNaN(document.formContainer['step2_keyA'+object_id].value*1) || (document.formContainer['step2_keyA'+object_id].value*1)>25 || (document.formContainer['step2_keyA'+object_id].value*1)<0 || (document.formContainer['step2_keyA'+object_id].value*1)=="")
                    	{
                        keyA[object_id]="";
                        document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                    	}
                    else
                    	{
                        document.formContainer['step2_keyA'+object_id].value=document.formContainer['step2_keyA'+object_id].value*1;
                        keyA[object_id]=document.formContainer['step2_keyA'+object_id].value*1;
                    	}
                	}
                else if (cipher_num[object_id]==4)
                	{
                    //keyword and keyletter
                    document.formContainer['step2_keyA'+object_id].value=document.formContainer['step2_keyA'+object_id].value.toUpperCase();
                    tempText=document.formContainer['step2_keyA'+object_id].value;
                    for (m=0; m<document.formContainer['step2_keyA'+object_id].value.length; m++)
                    	{
                        if (alpha_chars.toUpperCase().indexOf(tempText.charAt(m))==-1)
                        	{
                            //numbers/special characters not allowed
                            keyA[object_id]="";
                            document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                            break;
                        	}
                        if (m==document.formContainer['step2_keyA'+object_id].value.length-1)
                        	{
                            if (document.formContainer['step2_keyA'+object_id].value=="" || document.formContainer['step2_keyA'+object_id].value==tempMessage)
                            	{
                                keyA[object_id]="";
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
                    if (document.formContainer['step2_keyB'+object_id].value=="" || alpha_chars.toUpperCase().indexOf(tempText)==-1)
                    	{
                        keyB[object_id]="";
                        document.formContainer['step2_keyB'+object_id].value=keyB[object_id];
                    	}
                    else
                    	{
                        keyB[object_id]=document.formContainer['step2_keyB'+object_id].value;
                    	}
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
                        keyA[object_id]="";
                    	}
                	}
                else if (cipher_num[object_id]==7)
                	{
                    document.formContainer['step2_keyA'+object_id].value=document.formContainer['step2_keyA'+object_id].value.toUpperCase();
                    tempText=document.formContainer['step2_keyA'+object_id].value;
                    for (m=0; m<document.formContainer['step2_keyA'+object_id].value.length; m++)
                    	{
                        if (alpha_chars.toUpperCase().indexOf(tempText.charAt(m))==-1)
                        	{
                            //numbers/special characters not allowed
                            keyA[object_id]="";
                            document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                            break;
                        	}
                        if (m==document.formContainer['step2_keyA'+object_id].value.length-1)
                        	{
                            if (document.formContainer['step2_keyA'+object_id].value=="" || document.formContainer['step2_keyA'+object_id].value==tempMessage)
                            	{
                                keyA[object_id]="";
                                document.formContainer['step2_keyA'+object_id].value=keyA[object_id];
                            	}
                            else
                            	{
                                keyA[object_id]=document.formContainer['step2_keyA'+object_id].value;
                            	}
                        	}
                    	}
                	}
                else if (cipher_num[object_id]==8)
                	{
                    //your own cipher
                    keyA[object_id]=document.formContainer['step2_keyA'+object_id].value;
                	}
            	}
				
			function chooseSample(num,num2)
				{//add to next available row.
				tempArray=window["sample_text"+num][num2].split("<br />");
				if (total_fields>=8)
					{
					newVar=updateList(8);
					}
				else
					{
					newVar=updateList(total_fields+1);
					}
				window['container_visible'+total_fields]=["",true,true,true,true,false,false,false,false];
				window['step1_descriptions'+total_fields]=["","","","","","","","",""];
				for (j=1; j<5; j++)
					{
					document.formContainer['step1_description'+total_fields+'_'+j].value=tempArray[j-1];
					}
				document.formContainer['step1_location'+total_fields].value=window['sample_titles'+num][num2];
				//update select field drop down list to select total_fields?
				var element=document.getElementById('step1_num');
    			element.value=total_fields;
				saveStep1();
				}
	
            function saveStep1()
            	{
                locations_done=true;
                descriptions_done=true;
                for (j=1; j<total_fields+1; j++)
                	{
					for (k=1; k<9; k++)
						{
						if (document.formContainer['step1_description'+j+'_'+k]!=undefined)
							{
							window['step1_descriptions'+j][k]=document.formContainer['step1_description'+j+'_'+k].value;
							}
						else
							{
							window['step1_descriptions'+j][k]="";
							}
						}
					
					step1_descriptions[j]="";
					for (k=1; k<9; k++)
						{
						if (window['step1_descriptions'+j][k]!="")
							{
							if (step1_descriptions[j]!="")
								{// backslash r will not work here.
								step1_descriptions[j]+="\n"+window['step1_descriptions'+j][k];
								}
							else
								{
								step1_descriptions[j]+=window['step1_descriptions'+j][k];
								}
							}
						}
					
					//combine text from step1_locations1-8[1-8]
                    step1_locations[j]=document.formContainer['step1_location'+j].value;
                    //step1_descriptions[j]=document.formContainer['step1_description'+j].value;
                    if (step1_locations[j]=="")
                    	{
                        locations_done=false;
                    	}
                    if (step1_descriptions[j]=="")
                    	{
                        descriptions_done=false;
                    	}
                	}
				//alert(step1_descriptions);
           	 	}
	
            function reorderList()
            	{
                saveStep1();
                for (j=1; j<total_fields+1; j++)
                	{
                    if (isNaN(document.formContainer['step1_clue'+j].value*1) || (document.formContainer['step1_clue'+j].value*1==0) || (document.formContainer['step1_clue'+j].value*1>total_fields))
                    	{
                        document.formContainer['step1_clue'+j].value=clue_order[j];
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
					for (k=1; k<9; k++)
       					{
       					document.formContainer['step1_description'+j+'_'+k].value=window['step1_descriptions'+new_order[j]][k];
						window['container_visible_new'+j][k]=window['container_visible'+new_order[j]][k];
						}
                    //document.formContainer['step1_description'+j].value=step1_descriptions[new_order[j]];
                	}
				for (j=1; j<total_fields+1; j++)
                	{
					for (k=1; k<9; k++)
       					{
						window['container_visible'+j][k]=window['container_visible_new'+j][k];
						}
					}
				for (i=1; i<total_fields+1; i++)
                    {
					for (j=1; j<9; j++)
						{
						if (window['container_visible'+i][j]==false)
							{
							hideIt('container'+i+'_'+j);
							}
						else {showIt('container'+i+'_'+j);}
						}
					if (window['container_visible'+i][8]==true)
						{
						hideIt('add_textfield'+i);
						}
					else
						{
						showIt('add_textfield'+i);
						}
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
				
			function removeTextField(num,num2)
				{//num is text field grouping, num2 is specific text field.
				for (m=8; m>1; m--)
					{
					if (window['container_visible'+num][m]==true)
						{//hide last field
						window['container_visible'+num][m]=false;
						for (n=num2; n<m; n++)
							{
							tempText=document.getElementById('step1_description'+num+'_'+(n+1)).value;
							document.getElementById('step1_description'+num+'_'+n).value=tempText;
							}
						document.getElementById('step1_description'+num+'_'+m).value="";
						hideIt('container'+num+'_'+m);
						if (window['container_visible'+num][8]==true)
							{
							hideIt('add_textfield'+num);
							}
						else
							{
							showIt('add_textfield'+num);
							}
						break;
						}
					}
				saveStep1();
				}
				
			function addTextField(num)
				{
				for (m=1; m<9; m++)
					{
					if (window['container_visible'+num][m]==false)
						{//show next field
						window['container_visible'+num][m]=true;
						showIt('container'+num+'_'+m);
						if (window['container_visible'+num][8]==true)
							{
							hideIt('add_textfield'+num);
							}
						else
							{
							showIt('add_textfield'+num);
							}
						break;
						}
					}
				saveStep1();
				}
				
            function updateList(num)
            	{
                if (num!=0)
                	{
                    saveStep1();
		
                    total_fields=num*1;
                    if ((step1_locations.length-1)<total_fields)
                    	{//add 4 new text fields per total fields added
                        for (i=step1_locations.length; i<total_fields+1; i++)
                        	{
                            step1_locations[i]="";
                            step1_descriptions[i]="";
							window['step1_descriptions'+i]=["","","","","","","","",""];
							window['container_visible'+i]=["",true,true,true,true,false,false,false,false];
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
                    	{//remove 4 text fields per total fields removed
                        step1_locations.splice(total_fields+1,step1_locations.length-1);
                        step1_descriptions.splice(total_fields+1,step1_descriptions.length-1);
						for (i=total_fields; i>step1_locations.length-1; i--)
                        	{
							window['step1_descriptions'+i]=["","","","","","","","",""];
							window['container_visible'+i]=["",true,true,true,true,false,false,false,false];
							}
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
                    tempHTML+='		<table cellpadding="6" cellspacing="0" border="0" width="100%">';
                    tempHTML+='			<tr>';
                    tempHTML+='				<td class="header_step1"><div class="helvetica11pxTanB">Clue #</div></td>';
                    tempHTML+='				<td class="header_step1R"><div class="helvetica11pxTanB">Location Described</div></td>';
                    tempHTML+='				<td class="header_step1R"><div class="helvetica11pxTanB">Clue (Plaintext)</div></td>';
                    tempHTML+='			</tr>';
					clue_order=[""];
                    for (i=1; i<total_fields+1; i++)
                    	{
						clue_order[i]=i;
                        tempHTML+='			<tr>';
                        tempHTML+='				<td class="col_step" align="center"><input id="step1_clue'+i+'" name="step1_clue'+i+'" type="text" value="'+i+'" style="width:34px; height:16px; text-align:right; color:#000000;" class="form_field" onfocus="this.value=\'\';" onblur="checkClueNumDone(this,'+i+'); return false;" onkeyup="checkClueNum(this,'+i+'); return false;" maxlength="'+total_fields.toString.length+'" /></td>';
                        tempHTML+='				<td class="col_stepR" align="center"><input id="step1_location'+i+'" name="step1_location'+i+'" type="text" maxlength="50" style="width:160px; height:16px;" size="12" class="form_field" value="'+step1_locations[i]+'" /></td>';
                        //tempHTML+='				<td class="col_stepR" align="center"><textarea onkeyup="cleanTextarea(this); return false;" id="step1_description'+i+'" name="step1_description'+i+'" rows="3" cols="26" style="resize:none; overflow-y:hidden; height:auto;" class="monospace_field">'+step1_descriptions[i]+'</textarea></td>';
                        tempHTML+='					<td class="col_stepR" align="left">';
						for (j=1; j<9; j++)
							{
							if (j>1)
								{
								tempHTML+='					<div style="margin-bottom:2px;" id="container'+i+'_'+j+'"><input type="text" maxlength="26" style="width:260px;" id="step1_description'+i+'_'+j+'" name="step1_description'+i+'_'+j+'" class="monospace_field" value="'+window['step1_descriptions'+i][j]+'"> <a href="#" onclick="removeTextField('+i+','+j+'); return false;" class="arial_16pxBlueB" style="text-decoration:none;"> - </a></div>';
								}
							else
								{
								tempHTML+='					<div style="margin-bottom:2px;" id="container'+i+'_'+j+'"><input type="text" maxlength="26" style="width:260px;" id="step1_description'+i+'_'+j+'" name="step1_description'+i+'_'+j+'" class="monospace_field" value="'+window['step1_descriptions'+i][j]+'"></div>';
								}
							}
						tempHTML+='							<div id="add_textfield'+i+'"><a href="#" onclick="addTextField('+i+'); return false;" class="arial_16pxBlueB" style="text-decoration:none;"> + </a></div>';
						tempHTML+='					</td>';
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
                    tempHTML+='		<div class="floatL" style="padding:2px 0px 0px 8px;"><em>(Enter desired clue numbers, then click to re-order them.)</em></div>';
                    tempHTML+='	<br clear="all" /></div>';
                    document.getElementById('step1_fields').innerHTML=tempHTML;
					for (i=1; i<total_fields+1; i++)
                    	{
						for (j=1; j<9; j++)
							{
							if (window['container_visible'+i][j]==false)
								{
								hideIt('container'+i+'_'+j);
								}
							}
						if (window['container_visible'+i][8]==true)
							{
							hideIt('add_textfield'+i);
							}
						}
                    //reset step 2 content:
                    tempHTML='<table cellpadding="6" cellspacing="0" border="0" width="100%" class="border_table">';
                    tempHTML+='	<tr>';
                    if (title_selected==false || document.formContainer["step1_name"].value=="")
                    	{
                        tempHTML+='		<th colspan="5" align="center" id="bg_treasure_title"><div id="hunt_title">Treasure Hunt title appears here</div></td>';
                    	}
                    else
                   		{
                        tempHTML+='		<th colspan="5" align="center" id="bg_treasure_title"><div id="hunt_title">'+document.formContainer["step1_name"].value+'</div></td>';
                    	}
                    tempHTML+='	</tr>';
                    tempHTML+='	<tr>';
                    tempHTML+='		<td class="header_step2" style="padding:0px 21px 0px 21px;"><div class="helvetica11pxTanB">Location<br />Described</div></td>';
                    tempHTML+='		<td class="header_step2R" style="width:188px;"><div class="helvetica11pxTanB">Clue</div></td>';
                    tempHTML+='		<td class="header_step2R" style="padding:0px 80px 0px 80px;"><div class="helvetica11pxTanB">Cipher</div></td>';
                    tempHTML+='		<td class="header_step2R" style="padding:0px 57px 0px 57px;"><div class="helvetica11pxTanB">Key</div></td>';
                    tempHTML+='		<td class="header_step2R" style="padding:6px 11px 6px 11px;"><div class="helvetica11pxTanB">Print Key?</div></td>';
                    tempHTML+='	</tr>';
                    for (i=1; i<total_fields+1; i++)
                    	{
                        tempHTML+='	<tr>';
                        tempHTML+='		<td class="col_step" align="center"><div class="arial14pxBlack" id="step2_location'+i+'"><em>'+step1_locations[i]+'</em></div></td>';
                        tempHTML+='		<td class="col_stepR" style="width:188px;"><div class="clue_text" id="step2_description'+i+'">'+step1_descriptions[i].split('\r').join('<br />')+'</div></td>';
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
	
                for (q=1; q<14; q++)
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
                    document.getElementById("sample_schooltitle"+q).setAttribute("class","sample_off2");
                    document.getElementById("sample_schooltitle"+q).setAttribute("className","sample_off2");
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
                    document.getElementById("sample_playtitle"+q).setAttribute("class","sample_off3");
                    document.getElementById("sample_playtitle"+q).setAttribute("className","sample_off3");
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
                    for (q=1; q<14; q++)
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
                    document.getElementById("sample_schooltitle"+num).setAttribute("class","sample_off2");
                    document.getElementById("sample_schooltitle"+num).setAttribute("className","sample_off2");
                	}
                else
                	{
                    for (q=1; q<5; q++)
                    	{
                        if (num==q)
                        	{
                            showIt('sample_schooltext'+q);
                            document.getElementById("sample_schooltitle"+q).setAttribute("class","sample_on2");
                            document.getElementById("sample_schooltitle"+q).setAttribute("className","sample_on2");
                        	}
                        else
                        	{
                            hideIt('sample_schooltext'+q);
                            document.getElementById("sample_schooltitle"+q).setAttribute("class","sample_off2");
                            document.getElementById("sample_schooltitle"+q).setAttribute("className","sample_off2");
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
                    document.getElementById("sample_playtitle"+num).setAttribute("class","sample_off3");
                    document.getElementById("sample_playtitle"+num).setAttribute("className","sample_off3");
               	 	}
                else
                	{
                    for (q=1; q<3; q++)
                    	{
                        if (num==q)
                        	{
                            showIt('sample_playtext'+q);
                            document.getElementById("sample_playtitle"+q).setAttribute("class","sample_on3");
                            document.getElementById("sample_playtitle"+q).setAttribute("className","sample_on3");
                        	}
                        else
                        	{
                            hideIt('sample_playtext'+q);
                            document.getElementById("sample_playtitle"+q).setAttribute("class","sample_off3");
                            document.getElementById("sample_playtitle"+q).setAttribute("className","sample_off3");
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
	
            function popupWait()
            	{
                tb_show("survey1","popup_wait.html?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=120&width=250&modal=true");
                document.getElementById("TB_window").style.background="none";
            	}
	
            function popupReviewPrint()
            	{
                tb_show("survey1","popup_reviewprint.html?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=136&width=250&modal=true");
                document.getElementById("TB_window").style.background="none";
            	}
	
            function popupPrinting()
            	{
                tb_show("survey1","popup_printing.html?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=120&width=250&modal=true");
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
                    document.formContainer['step2_keyA'+currField].value=keyA[currField];
		
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
			
			currentMessage="If you clicked your browser's Back button, this will take you away from the Treasure Hunt Clue Generator. Click \"Stay on Page\" if you don't want to leave and lose your clues.\n\nIf you clicked the \"Create Treasure Hunt PDF\" button, please click the Leave Page button. You will not leave the page, and your PDF will be created.";
            window.onbeforeunload=confirmClick;
            function confirmClick()
            	{
                confirmation=currentMessage;
                return confirmation;
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
        <script language="javascript" type="text/javascript">
            <!--
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-33435936-1']);
            _gaq.push(['_trackPageview']);
            (function()
            {
                var ga=document.createElement('script');
                ga.type='text/javascript';
                ga.async=true;
                ga.src=('https:'==document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
            // -->
        </script>
    </head>
    <body bgcolor="#000000" text="#ffffff" link="#daab4c" alink="#daab4c" vlink="#cccc99" onload="preloadIntImages(); updateStep(0);">
        <div id="close_preview"><a href="#" onclick="closePreview(); return false;">Close Preview</a></div>
        <form id="formContainer" name="formContainer" action="" method="post">
            <div id="content_bg" align="center">
                <div id="barT_internal">
                    <div id="content_main" align="left">
                       <?php echo load_view( 'login_info' ) ?>
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
                                    <div class="generator588_columnLT" align="center" style="height:25px;"><img src="../images/title_createhunt.gif" width="548" height="25" alt="Create Your Own Treasure Hunt" /></div>
                                    <div class="generator588_columnLM" align="center">
                                        <div align="left" style="padding:38px 0px 12px 40px;"><img src="../images/title_followsteps.gif" width="203" height="18" alt="Follow Steps 1-2-3 to:" /></div>
										<div align="left" style="padding-left:88px;">
                                            <div class="float_dotL"><img src="../images/dot_purple.gif" width="11" height="11" alt="" /></div>
                                            <div class="floatL"><strong class="arial14pxBlackB">Create clues for your hunt</strong></div>
                                            <div class="padding_4pxB"><br clear="all" /></div>
                                            <div class="float_dotL"><img src="../images/dot_purple.gif" width="11" height="11" alt="" /></div>
                                            <div class="floatL"><strong class="arial14pxBlackB">Encrypt your clues</strong></div>
                                            <div class="padding_4pxB"><br clear="all" /></div>
                                            <div class="float_dotL"><img src="../images/dot_purple.gif" width="11" height="11" alt="" /></div>
                                            <div class="floatL"><strong class="arial14pxBlackB">Print your clues in ready-to-use format</strong></div>
                                            <div><br clear="all" /></div>
                                        </div>
                                    </div>
                                    <div class="generator588_columnLB"></div>
                                </div>

                                <div class="box_190px">
                                    <div class="generator190_columnRT" align="center"><img src="../images/title_samplehunt.gif" width="131" height="18" alt="Sample Hunt" /></div>
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
                                        <div><img src="../images/title_samplehunt.gif" width="134" height="18" alt="Sample Clues" /></div>
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

                                    <div id="hide1" class="generator240_columnRT" align="center" style="padding-bottom:6px;"><img src="../images/title_sample.gif" width="109" height="17" alt="Sample Clues" /></div>
                                    <div id="hide2" class="generator240_columnRM">

                                        <div id="sample_links" align="center" style="padding-bottom:4px;"><a href="#" onclick="getSample(1); return false;" class="arial_14pxTanB_on">Classroom</a> &#8226;
                                            <a href="#" onclick="getSample(2); return false;" class="arial_14pxTanB">School</a> &#8226;
                                            <a href="#" onclick="getSample(3); return false;" class="arial_14pxTanB">Playground</a></div>

                                        <!--CLASSROOM SAMPLES-->
                                        <div id="sample_classroom1">
                                            <div id="sample_classtitle1" onclick="toggleClassroomText(1); return false;" class="sample_off"><div style="float:right; padding-right:36px; color:#ffffff;">Click to show clue.</div><div id="sample_classtitle1a" style="color:#ffffff; font-family:Helvetica,Arial,Verdana,sans-serif; font-size:11px;"></div><br clear="right" /></div>
                                            <div id="sample_classtext1">
                                                <div id="sample1_1" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,1); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom2">
                                            <div id="sample_classtitle2" onclick="toggleClassroomText(2); return false;" class="sample_off"></div>
                                            <div id="sample_classtext2">
                                                <div id="sample1_2" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,2); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom3">
                                            <div id="sample_classtitle3" onclick="toggleClassroomText(3); return false;" class="sample_off"></div>
                                            <div id="sample_classtext3">
                                                <div id="sample1_3" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,3); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom4">
                                            <div id="sample_classtitle4" onclick="toggleClassroomText(4); return false;" class="sample_off"></div>
                                            <div id="sample_classtext4">
                                                <div id="sample1_4" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,4); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom5">
                                            <div id="sample_classtitle5" onclick="toggleClassroomText(5); return false;" class="sample_off"></div>
                                            <div id="sample_classtext5">
                                                <div id="sample1_5" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,5); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom6">
                                            <div id="sample_classtitle6" onclick="toggleClassroomText(6); return false;" class="sample_off"></div>
                                            <div id="sample_classtext6">
                                                <div id="sample1_6" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,6); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom7">
                                            <div id="sample_classtitle7" onclick="toggleClassroomText(7); return false;" class="sample_off"></div>
                                            <div id="sample_classtext7">
                                                <div id="sample1_7" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,7); return false;">[Select]</a></div>
                                               
                                            </div>
                                        </div>
                                        <div id="sample_classroom8">
                                            <div id="sample_classtitle8" onclick="toggleClassroomText(8); return false;" class="sample_off"></div>
                                            <div id="sample_classtext8">
                                                <div id="sample1_8" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,8); return false;">[Select]</a></div>
                                            </div>
                                        </div>

                                        <div id="sample_classroom9">
                                            <div id="sample_classtitle9" onclick="toggleClassroomText(9); return false;" class="sample_off"></div>
                                            <div id="sample_classtext9">
                                                <div id="sample1_9" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,9); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom10">
                                            <div id="sample_classtitle10" onclick="toggleClassroomText(10); return false;" class="sample_off"></div>
                                            <div id="sample_classtext10">
                                                <div id="sample1_10" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,10); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom11">
                                            <div id="sample_classtitle11" onclick="toggleClassroomText(11); return false;" class="sample_off"></div>
                                            <div id="sample_classtext11">
                                                <div id="sample1_11" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,11); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom12">
                                            <div id="sample_classtitle12" onclick="toggleClassroomText(12); return false;" class="sample_off"></div>
                                            <div id="sample_classtext12">
                                                <div id="sample1_12" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,12); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_classroom13">
                                            <div id="sample_classtitle13" onclick="toggleClassroomText(13); return false;" class="sample_off"></div>
                                            <div id="sample_classtext13">
                                                <div id="sample1_13" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(1,13); return false;">[Select]</a></div>
                                            </div>
                                        </div>

                                        <!--SCHOOL SAMPLES-->
                                        <div id="sample_school1">
                                            <div id="sample_schooltitle1" onclick="toggleSchoolText(1); return false;" class="sample_off2"></div>
                                            <div id="sample_schooltext1">
                                                <div id="sample2_1" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(2,1); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_school2">
                                            <div id="sample_schooltitle2" onclick="toggleSchoolText(2); return false;" class="sample_off2"></div>
                                            <div id="sample_schooltext2">
                                                <div id="sample2_2" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(2,2); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_school3">
                                            <div id="sample_schooltitle3" onclick="toggleSchoolText(3); return false;" class="sample_off2"></div>
                                            <div id="sample_schooltext3">
                                                <div id="sample2_3" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(2,3); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_school4">
                                            <div id="sample_schooltitle4" onclick="toggleSchoolText(4); return false;" class="sample_off2"></div>
                                            <div id="sample_schooltext4">
                                                <div id="sample2_4" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(2,4); return false;">[Select]</a></div>
                                            </div>
                                        </div>

                                        <!--PLAYGROUND SAMPLES-->
                                        <div id="sample_playground1">
                                            <div id="sample_playtitle1" onclick="togglePlaygroundText(1); return false;" class="sample_off3"></div>
                                            <div id="sample_playtext1">
                                                <div id="sample3_1" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(3,1); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                        <div id="sample_playground2">
                                            <div id="sample_playtitle2" onclick="togglePlaygroundText(2); return false;" class="sample_off3"></div>
                                            <div id="sample_playtext2">
                                                <div id="sample3_2" class="sample_text"></div>
												<div align="right" style="margin-right:4px;"><a href="#" onclick="chooseSample(3,2); return false;">[Select]</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="hide3" class="generator240_columnRB"></div>
                                </div>

                                <div><br clear="all" /></div>
                                <div class="hide" align="center" style="padding:22px 0px 22px 0px;"><a href="#"
									onclick="updateStep(2); return false;"
									onmouseover="changeImages('btn_next2', '../images/btn_next_encryption_over.jpg'); return true;"
									onmouseout="changeImages('btn_next2', '../images/btn_next_encryption.jpg'); return true;">
									<img id="btn_next2" name="btn_next2" src="../images/btn_next_encryption.jpg" width="185" height="25" alt="Next: Encryption" border="0" /></a></div>
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
                                    <div class="floatL" style="padding-left:11px;"><a href="#"
										id="downloadPdf"
										onmouseover="changeImages('btn_download', '../images/btn_download_over.gif'); return true;"
										onmouseout="changeImages('btn_download', '../images/btn_download.gif'); return true;">
										<img id="btn_download" name="btn_download" src="../images/btn_download.gif" width="164" height="19" alt="Create Treasure Hunt PDF" border="0" /></a></div>
                                    <div><br clear="all" /></div>
									
                                    <div style="float:left; padding:16px 0px 14px 0px; width:585px;">
                                        <div class="arial14pxBlackB">Here is a summary of your hunt. If you want to change anything, click the buttons above to go back to the appropriate step.</div>
                                	</div>
                               	 	<div id="handy_table" class="box_190px" style="padding:0px 0px 8px 25px;">
                                    	<div class="generator190_columnRT" align="center"><img src="../images/title_handytables.gif" width="109" height="17" alt="Handy Pages" /></div>
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
                                	<div id="step3_table" class="box_794px" style="padding-top:12px;"></div>
								
                                    <div class="arial14pxBlackB" style="margin-top:40px;">When you print your hunt, your package will contain:</div>
									<ul style="margin-left:20px; padding-top:0px;">
										<li class="arial12pxBlack">Directions for setting up your hunt.</li>
										<li class="arial12pxBlack">A clue summary, like the table above.</li>
										<li class="arial12pxBlack">Clue sheets to cut into clue strips like this sample:</li>
									</ul>
                                </div>
								<div class="hide"><br clear="all" /><br /></div>
                                <div style="width:774px; padding:10px; background-color:#ffffff;">
                                    <div id="sample_clue"></div>
                                </div>
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

                    </div>
					<?php echo load_view('footer') ?>
                </div>
            </div>
            </div>
            <div id="barB_internal"></div>
        </form>
    </body>
</html>