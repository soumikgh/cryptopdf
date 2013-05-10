<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Crypto Club: Challenges: Messages to Crack: Private</title>
<meta name="title" content="Crypto Club: Challenges: Messages to Crack: Private" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="NEED KEYWORDS" />
<meta name="description" content="NEED DESCRIPTION" />
<meta http-equiv="expires" content="0" />
<script language="javascript" type="text/javascript" src="../scripts.js"></script>
<script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script language="javascript" type="text/javascript" src="../zero_clipboard/ZeroClipboard.js"></script>

<script language="javascript" type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script language="javascript" type="text/javascript" src="../js/jquery.ui.touch-punch.js"></script>

<script language="javascript" type="text/javascript">
<!--
var alpha_chars="abcdefghijklmnopqrstuvwxyz";
var alpha_chars_up=alpha_chars.toUpperCase();
var alpha_new="";
var array_cipher=[""];
var array_plain=[""];
var charLocation;
var cipher_keys=["",7,12,3];
var cipher_num=0;
var cipher_points=["",75,75,75];
var cipher_text="";
var cipherNoBreaks1="";
var cipherNoBreaks2="";
var ciphers=[0,3,1,2];
var ciphertext=["","GERC S KSI XIVO IRCSY MO SAA. SY LXEAK CSA YHXLI CH LIR RCS LMAA. MUIOFUOID FLKUA, ULIAFDSFF MJUDO, FDOS UF O MIUDF JI MOFJD IJ NIUDO. 1 GERC S KSI XIVO IRCSY MO SAA. SY LXEAK CSA YHXLI CH LIR RCS LMAA. MUIOFUOID FLKUA, ULIAFDSFF MJUDO, FDOS UF O MIUDF JI MOFJD IJ NIUDO. 1","GERC S KSI XIVO IRCSY MO SAA. SY LXEAK CSA YHXLI CH LIR RCS LMAA. MUIOFUOID FLKUA, ULIAFDSFF MJUDO, FDOS UF O MIUDF JI MOFJD IJ NIUDO. 2","GERC S KSI XIVO IRCSY MO SAA. SY LXEAK CSA YHXLI CH LIR RCS LMAA. MUIOFUOID FLKUA, ULIAFDSFF MJUDO, FDOS UF O MIUDF JI MOFJD IJ NIUDO. 3"];
var cracked_by=["",11,12,13];
var curr_keyword_letter=0;
var currCiphertext=0;
var currLoc=0;
var currRow=0;
var currPlaintext=0;
var currWord="";
var keyA="";
var keyB="";
var keysA=["",2,8,11];
var keysB=["","","",12];
var keyword_string="";
var last_entry=0;
var message_copied=["",false,false,false];
var message_cracked=["",true,true,false];
var message_id=["",1210,1211,1212];
var mult_num=0;
var num_added=0;
var page_loaded=false;
var plaintext=["","testing1","testing2","testing3"];
var plus_num=0;
var possible_ciphers=["","Additive","Affine","Caesar","Keyword","Multiplicative","Vigen&egrave;re"];
var possible_themes=["","1776 Declaration","Lincoln Address","Presidential Joke","Monticello Home","This is a longer theme for testing."];
var saved_keyword="";
var startNum=0;
var stringChar;
var sub_order=[""];
var submitted_by=["","Malcolm Reynolds","Loudon Wainwright","Gillian Welch"];
var submitted_date=["","Today","4/27/2012","8/27/2019"];
var temp_ciphertext="";
var temp_string="";
var tempText="";
var user_id=41;
var tempHTML="";
var tempNum=0;
var tempText="";
var theme=[0,3,2,1];

function newMessageToCrack()
	{
	cracked_by[cracked_by.length]='&#0160;';
	cipher_points[cipher_points.length]=75;
	ciphers[ciphers.length]=0;
	ciphertext[ciphertext.length]="";
	currRow=ciphers.length-1;
	keysA[keysA.length]="";
	keysB[keysB.length]="";
	message_copied[message_copied.length]=false;
	message_cracked[message_cracked.length]=false;
	message_id[message_id.length]=message_id[message_id.length-1]+1;
	plaintext[plaintext.length]="";
	submitted_by[submitted_by.length]="";
	submitted_date[submitted_date.length]="Today";
	theme[theme.length]=0;
	}
newMessageToCrack();
	
function updateBoard()
	{
	tempHTML='<table cellpadding="0" cellspacing="0" border="0" width="100%" id="messageboard">';
	tempHTML+='		<tr class="bg_blue">';
	tempHTML+='			<th class="headerLineL" width="158"><div class="headerWhite">Actions</div></th>';
	tempHTML+='			<th class="headerLine"><div class="headerWhite">Message<br />Number</div></th>';
	tempHTML+='			<th class="headerLine"><div class="headerWhite">Theme</div></th>';
	tempHTML+='			<th class="headerLine"><div class="headerWhite">Cipher</div></th>';
	tempHTML+='			<th class="headerLine"><div class="headerWhite">Submitted<br />By</div></th>';
	tempHTML+='			<th class="headerLine"><div class="headerWhite">Date<br />Submitted</div></th>';
	tempHTML+='			<th class="headerLineR"><div class="headerWhite">Cracked By</div></th>';
	tempHTML+='		</tr>';
	for (i=1; i<ciphers.length-1; i++)
		{
		tempHTML+='<tr id="row'+i+'" class="bg_tan" onmouseover="getRowOver('+i+'); return false;" onmouseout="getRowOut('+i+'); return false;">';
		tempHTML+='		<td id="action_td'+i+'"><div id="action'+i+'"></div></td>';
		tempHTML+='		<td class="columnLine"><div class="arial11pxBlack">'+message_id[i]+'</div></td>';
		tempHTML+='		<td class="columnLine"><div class="arial14pxBlackILH18">'+possible_themes[theme[i]]+'</div></td>';
		tempHTML+='		<td class="columnLine"><div class="arial11pxBlack">'+possible_ciphers[ciphers[i]]+'</div></td>';
		tempHTML+='		<td class="columnLine"><div class="arial11pxBlack">'+submitted_by[i]+'</div></td>';
		tempHTML+='		<td class="columnLine"><div class="arial11pxBlack">'+submitted_date[i]+'</div></td>';
		tempHTML+='		<td class="columnLineR"><div class="arial11pxBlack" id="cracked_id'+i+'"></div></td>';
		tempHTML+='</tr>';
		}
	tempHTML+='</table>';
	document.getElementById('content_messageboard').innerHTML=tempHTML;
	
	getCracked();
	addThemeOptions();
	}
	
function checkSubmit()
	{
	if (document.formContainer['message_textS'].value=="" || document.formContainer['message_textS'].value==" ")
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
	
	if (document.formContainer['type_name'].value=="" || document.formContainer['type_name'].value==" ")
		{
		return;
		}
		
	encryptText(document.formContainer['message_textS'].value,cipher_num);
	ciphertext[currRow]=cipher_text;
	//alert(cipher_text);
	
	//temp: add message to crack to arrays
	ciphers[currRow]=cipher_num;
	keysA[currRow]=keyA;
	keysB[currRow]=keyB;
	plaintext[currRow]=document.formContainer['message_textS'].value
	
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
	submitted_by[currRow]=document.formContainer['type_name'].value;
		
	//temp: add default data to arrays for next message to crack
	if (currRow==(ciphers.length-1))
		{
		newMessageToCrack();
		}
	updateBoard();
	closeSubmit();
	//zero out submit data
	document.formContainer['type_name'].value="";
	document.formContainer['message_textS'].value="";
	document.getElementById('select_cipher').selectedIndex=0;
	document.getElementById('option_cipher0').selected=true;
	cipherKeyFields(0,0);
	}

function getCracked()
	{
	for (i=1; i<message_cracked.length-1; i++)
		{
		if (message_cracked[i]==true)
			{
			getCrackedText(i);
			document.getElementById('cracked_id'+i).innerHTML=cracked_by[i];
			}
		else
			{
			getCrackButtons(i);
			}
		}
	page_loaded=true;
	}

function getCrackButtons(num)
	{
	message_cracked[num]=false;
	document.getElementById('cracked_id'+num).innerHTML='&#0160;';
	tempHTML='<div class="floatL" style="padding-right:7px;"><a href="#" onclick="getCiphertext('+num+'); return false;"';
	tempHTML+='	onmouseover="if (message_copied['+num+']==false){changeImages(\'btn_getciphertext'+num+'\', \'../images/btn_getciphertext_over.gif\'); return true;}"';
	tempHTML+='	onmouseout="if (message_copied['+num+']==false){changeImages(\'btn_getciphertext'+num+'\', \'../images/btn_getciphertext.gif\'); return true;}"';
	tempHTML+='	ontouchstart="changeImages(\'btn_getciphertext'+num+'\', \'../images/btn_getciphertext_over.gif\'); return true;"';
	tempHTML+='	ontouchend="changeImages(\'btn_getciphertext'+num+'\', \'../images/btn_getciphertext.gif\'); return true;">';
	tempHTML+='	<img id="btn_getciphertext'+num+'" name="btn_getciphertext'+num+'" src="../images/btn_getciphertext.gif" width="80" height="30" alt="Get Ciphertext" border="0" /></a></div>';
	tempHTML+='<div class="floatL"><a href="#" onclick="submitPlaintext('+num+'); return false;"';
	tempHTML+='	onmouseover="changeImages(\'btn_submitplaintext\', \'../images/btn_submitplaintext_over.gif\'); return true;"';
	tempHTML+='	onmouseout="changeImages(\'btn_submitplaintext\', \'../images/btn_submitplaintext.gif\'); return true;"';
	tempHTML+='	ontouchstart="changeImages(\'btn_submitplaintext\', \'../images/btn_submitplaintext_over.gif\'); return true;"';
	tempHTML+='	ontouchend="changeImages(\'btn_submitplaintext\', \'../images/btn_submitplaintext.gif\'); return true;">';
	tempHTML+='	<img id="btn_submitplaintext" name="btn_submitplaintext" src="../images/btn_submitplaintext.gif" width="60" height="30" alt="Submit Plaintext" border="0" /></a></div>';
	document.getElementById('action'+num).innerHTML=tempHTML;
	document.getElementById('action_td'+num).setAttribute("class","columnLineL");
	document.getElementById('action_td'+num).setAttribute("className","columnLineL");
	}
	
if (isMobile==null)
{
$(document).ready(function()
	{ 
	ZeroClipboard.setMoviePath('../zero_clipboard/ZeroClipboard10.swf');
	
	$('#popup_copy').hover(function(){ 
   	 	// event handler for mouseenter
		var clip=new ZeroClipboard.Client();
		clip.setText(ciphertext[currCiphertext]);
		clip.setHandCursor(true);
		clip.glue('d_clip_button','d_clip_container');
		clip.addEventListener('onMouseUp', function(){
			closeCopyPopup();
		})},
		function(){ 
    	// event handler for mouseleave 
 		});
	});
//some versions of ie don't like the zero clipboard, so:
window.onerror=function() {return true;}
}

function resetCiphertext()
	{
	getCiphertext(currCiphertext);
	}
	
function getCiphertext(num)
	{
	closePlaintext();
	closeSubmit();
	for (i=1; i<ciphertext.length; i++)
		{
		message_copied[i]=false;
		if (document.getElementById('btn_getciphertext'+i))
			{
			changeImages('btn_getciphertext'+i,'../images/btn_getciphertext.gif');
			}
		}
	currCiphertext=num;
	if (document.getElementById)
		{
		if (ciphers[num]==1)
			{
			//additive
			tempHTML=', Key: '+keysA[num];
			}
		else if (ciphers[num]==2)
			{
			//affine
			tempHTML=', Multiplicative Key: '+keysA[num]+', Additive: '+keysB[num];
			}
		else if (ciphers[num]==3)
			{
			//caesar
			tempHTML=', Key: '+keysA[num];
			}
		else if (ciphers[num]==4)
			{
			//keyword
			tempHTML=', Keyword: '+keysA[num]+', Keyletter: '+keysB[num];
			}
		else if (ciphers[num]==5)
			{
			//letter to number
			tempHTML="&#0160;";
			}
		else if (ciphers[num]==6)
			{
			//multiplicative
			tempHTML=', Key: '+keysA[num];
			}
		else if (ciphers[num]==7)
			{
			//vigenere
			tempHTML=', Keyword: '+keysA[num];
			}
		
		document.getElementById('cipher_info').innerHTML=possible_ciphers[ciphers[num]]+tempHTML;
		document.getElementById('ciphertext').value=ciphertext[num];
		getYCoord(document.getElementById("row"+num));
	
		element=document.getElementById("popup_copy").style;
		element.visibility='hidden';
		element.top=(curtop+(document.getElementById("row"+num).offsetHeight/2)-80)+"px";
		element.visibility='visible';
		}
	}
	
function submitPlaintext(num)
	{
	if (document.getElementById)
		{
		currPlaintext=num;
		document.formContainer.paste_plaintext.value="";
		hideIt('correct');
		hideIt('incorrect');
		document.getElementById("popup_copy").style.visibility='hidden';
		document.getElementById('plaintext_info').innerHTML="Paste Message "+message_id[num]+"'s plaintext here.";
		closeSubmit();
		//document.getElementById('ciphertext').innerHTML=ciphertext[currCiphertext];
		getYCoord(document.getElementById("row"+num));
	
		element=document.getElementById("popup_plaintext").style;
		element.visibility='hidden';
		element.top=(curtop+(document.getElementById("row"+num).offsetHeight/2)-80)+"px";
		element.visibility='visible';
		
		document.getElementById("popup_plaintext").style.visibility='visible';
		}
	}
	
function checkPlaintext()
	{
	cipherNoBreaks1=plaintext[currPlaintext].split('\n').join(' ').split('\r').join(' ').split('    ').join(' ').split('   ').join(' ').split('  ').join(' ');
	cipherNoBreaks2=document.formContainer.paste_plaintext.value.split('\n').join(' ').split('\r').join(' ').split('    ').join(' ').split('   ').join(' ').split('  ').join(' ');
	//alert(cipherNoBreaks1);
	//alert(cipherNoBreaks2);
	if (cipherNoBreaks1.toLowerCase()==cipherNoBreaks2.toLowerCase())
		{
		message_cracked[currPlaintext]=true;
		getCrackedText(currPlaintext);
		document.getElementById("response_correct").innerHTML="That's the correct plaintext!<br />You earn "+cipher_points[currPlaintext]+" points!";
		document.getElementById('cracked_id'+currPlaintext).innerHTML=user_id;
		showIt('correct');
		}
	else
		{
		showIt('incorrect');
		}
	}
	
function closePlaintext()
	{
	closePlaintextResponse();
	if (document.getElementById)
		{
		document.getElementById("popup_plaintext").style.visibility='hidden';
		}
	}
	
function newMessage()
	{
	document.getElementById("popup_copy").style.visibility='hidden';
	closePlaintext();
	if (document.getElementById)
		{
		document.getElementById("popup_submit").style.visibility='visible';
		}
	}
	
function closeSubmit()
	{
	if (document.getElementById)
		{
		document.getElementById("popup_submit").style.visibility='hidden';
		}
	}

// -->
</script>
<style type="text/css" media="screen">
<!--
@import "../styles.css";
-->
</style>
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
<body bgcolor="#000000" text="#ffffff" link="#daab4c" alink="#daab4c" vlink="#cccc99" onload="preloadIntImages(); updateBoard();">
<form id="formContainer" name="formContainer" action="" method="post">
<div id="content_bg" align="center">
	<div id="barT_internal">
		<div id="content_main" align="left">
			<?php echo load_view( 'login_info' ) ?>
			<div id="logo_crypto"><a href="../index.php"><img src="../images/logo_blank.gif" width="184" height="124" alt="Crypto Club" border="0" /></a></div>
			<div id="header" align="left">
				<div id="tools"><a href="../tools/ciphers.php"
					onmouseover="changeImages('btn_tools', '../images/btn_tools_over.jpg'); return true;"
					onmouseout="changeImages('btn_tools', '../images/btn_tools.jpg'); return true;"
					ontouchstart="changeImages('btn_tools', '../images/btn_tools_over.jpg'); return true;"
					ontouchend="changeImages('btn_tools', '../images/btn_tools.jpg'); return true;">
					<img id="btn_tools" name="btn_tools" src="../images/btn_tools.jpg" width="76" height="18" alt="Ciphers" border="0" /></a></div>
				<div id="challenges"><a href="../challenges/index.php"
					onmouseover="changeImages('btn_challenges', '../images/btn_challenges_over.jpg'); return true;"
					onmouseout="changeImages('btn_challenges', '../images/btn_challenges.jpg'); return true;"
					ontouchstart="changeImages('btn_challenges', '../images/btn_challenges_over.jpg'); return true;"
					ontouchend="changeImages('btn_challenges', '../images/btn_challenges.jpg'); return true;">
					<img id="btn_challenges" name="btn_challenges" src="../images/btn_challenges.jpg" width="116" height="18" alt="Challenges" border="0" /></a></div>
				<div id="games"><a href="../games/index.php"
					onmouseover="changeImages('btn_games', '../images/btn_games_over.jpg'); return true;"
					onmouseout="changeImages('btn_games', '../images/btn_games.jpg'); return true;"
					ontouchstart="changeImages('btn_games', '../images/btn_games_over.jpg'); return true;"
					ontouchend="changeImages('btn_games', '../images/btn_games.jpg'); return true;">
					<img id="btn_games" name="btn_games" src="../images/btn_games.jpg" width="70" height="18" alt="Games" border="0" /></a></div>
				<div id="comics"><a href="../comics/index.php"
					onmouseover="changeImages('btn_comics', '../images/btn_comics_over.jpg'); return true;"
					onmouseout="changeImages('btn_comics', '../images/btn_comics.jpg'); return true;"
					ontouchstart="changeImages('btn_comics', '../images/btn_comics_over.jpg'); return true;"
					ontouchend="changeImages('btn_comics', '../images/btn_comics.jpg'); return true;">
					<img id="btn_comics" name="btn_comics" src="../images/btn_comics.jpg" width="73" height="18" alt="Comics" border="0" /></a></div>
				<div id="math"><a href="../math/index.php"
					onmouseover="changeImages('btn_math', '../images/btn_math_over.jpg'); return true;"
					onmouseout="changeImages('btn_math', '../images/btn_math.jpg'); return true;"
					ontouchstart="changeImages('btn_math', '../images/btn_math_over.jpg'); return true;"
					ontouchend="changeImages('btn_math', '../images/btn_math.jpg'); return true;">
					<img id="btn_math" name="btn_math" src="../images/btn_math.jpg" width="55" height="18" alt="Math" border="0" /></a></div>
				<div id="for_teachers"><a href="index.php">
					<img id="btn_forteachers" name="btn_forteachers" src="../images/btn_forteachers_over.jpg" width="130" height="18" alt="For Teachers" border="0" /></a></div>
			</div>
			<div id="title_text">[Groupname] Message Board</div>
			<div id="title_print">Messages to Crack</div>
			
			<div class="floatL">
				<div style="width:650px;">
					<div class="arial14pxBlack">Looking for a good message to crack? Choose from the list below! Click &quot;Get CIPHERTEXT&quot;, then &quot;Copy&quot;. Go to the
						<a href="../tools/ciphers.php" class="arial_14pxBlueB">Cipher Tools</a> and choose a tool to help crack it. Then copy the plaintext and come
						back here to submit it.</div>
					<div class="floatL" style="padding-top:8px;"><a href="#" onclick="newMessage(); return false;" class="arial_14pxBlueB">Submit a Message</a></div>
					<div class="floatR">
						<div class="bg_links">
							<div class="arial_14pxBlueB">
								<a href="temp.php" onclick="return false;" class="arial_14pxBlueB_on">Page 1</a> &#0160;|&#0160;
								<a href="temp.php" onclick="return false;" class="arial_14pxBlueB">2</a> &#0160;|&#0160;
								<a href="temp.php" onclick="return false;" class="arial_14pxBlueB">3</a> &#0160;|&#0160;
								<a href="temp.php" onclick="return false;" class="arial_14pxBlueB">4</a> &#0160;
								<a href="temp.php" onclick="return false;" class="arial_14pxBlueB_on">&gt;&gt;</a></div>
						</div>
					</div>
				</div>
			</div>
			
			<div><br clear="all" /></div>
			
			<div id="popup_plaintext">
				<div align="right"><a href="#"
					onclick="closePlaintext(); return false;"
					onmouseover="changeImages('btn_x1', '../images/btn_x_over.gif'); return true;"
					onmouseout="changeImages('btn_x1', '../images/btn_x.gif'); return true;">
					<img id="btn_x1" name="btn_x1" src="../images/btn_x.gif" width="13" height="13" alt="Close" border="0" /></a></div>
				<div id="plaintext_info"></div>
				<div align="center"><textarea id="paste_plaintext" name="paste_plaintext" rows="6" cols="30"></textarea></div>
				<div align="center" style="padding-top:10px;"><a href="#" onclick="checkPlaintext(); return false;"
					onmouseover="changeImages('btn_submit', '../images/btn_submit2_over.gif'); return true;"
					onmouseout="changeImages('btn_submit', '../images/btn_submit2.gif'); return true;"
					ontouchstart="changeImages('btn_submit', '../images/btn_submit2_over.gif'); return true;"
					ontouchend="changeImages('btn_submit', '../images/btn_submit2.gif'); return true;">
					<img id="btn_submit" name="btn_submit" src="../images/btn_submit2.gif" width="94" height="24" alt="Submit" border="0" /></a></div>
				<div id="correct">
					<div id="response_correct"></div>
					<div align="center" style="padding-top:10px;"><a href="#" onclick="closePlaintext(); return false;">
						<img id="btn_close_blue" name="btn_close_blue" src="../images/btn_close_blue.gif" width="67" height="18" alt="Close" border="0" /></a></div>
				</div>
				<div id="incorrect">
					<div class="helvetica11pxWhiteB">That's NOT correct.<br />Please try again!</div>
					<div align="center" style="padding-top:10px;"><a href="#" onclick="closePlaintextResponse(); return false;">
						<img id="btn_close_red" name="btn_close_red" src="../images/btn_close_red.gif" width="67" height="18" alt="Close" border="0" /></a></div>
				</div>
			</div>
			
			<div id="popup_copy">
				<div align="right" id="close_copy"><a href="#"
					onclick="closeCopy(); return false;"
					onmouseover="changeImages('btn_x_copy', '../images/btn_x_over.gif'); return true;"
					onmouseout="changeImages('btn_x_copy', '../images/btn_x.gif'); return true;">
					<img id="btn_x_copy" name="btn_x_copy" src="../images/btn_x.gif" width="13" height="13" alt="Close" border="0" /></a></div>
				<div id="remember">Remember the cipher and key when leaving the Message Board.</div>
				<div id="cipher_info"></div>
				<div><textarea id="ciphertext" rows="5" cols="10" onchange="resetCiphertext();" onkeydown="resetCiphertext();" onkeypress="resetCiphertext();" onkeyup="resetCiphertext();" onblur="resetCiphertext();"></textarea></div>
				<script language="javascript" type="text/javascript">
				<!--
				if (isMobile==null)
					{
					document.write('<div id="d_clip_container" style="position:relative;" align="center">');
					document.write('	<div id="d_clip_button"></div>');
					document.write('</div>');
					}
				else
					{
					document.write('<div class="arial14pxBlack" align="center">Select text to copy it.</div><div class="arial11pxBlack" align="center">(text may be scrollable)</div>');
					}
				// -->
				</script>
			</div>
			
			<div id="popup_submit">
				<div align="right"><a href="#"
					onclick="closeSubmit(); return false;"
					onmouseover="changeImages('btn_x2', '../images/btn_x_over.gif'); return true;"
					onmouseout="changeImages('btn_x2', '../images/btn_x.gif'); return true;">
					<img id="btn_x2" name="btn_x2" src="../images/btn_x.gif" width="13" height="13" alt="Close" border="0" /></a></div>
				<div id="submit_title">Submit a Message</div>
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<th class="headerSubmit"><div class="headerTan">Full Message</div></th>
						<th class="headerSubmit"><div class="headerTan">Theme</div></th>
						<th class="headerSubmit"><div class="headerTan">Cipher and Key</div></th>
						<th class="headerSubmitR"><div class="headerTan">Type Your Name</div></th>
					</tr>
					<tr>
						<td class="columnLine_submit" align="center"><textarea id="message_textS" name="message_textS" cols="26" rows="3" autocapitalize="off" autocorrect="off"></textarea></td>
						<td class="columnLine_submit" align="center"><select id="select_theme" name="select_theme" class="select_tanbg" onchange="updateTheme(this.value);">
							<option id="option0" value="none">Choose a Theme</option>
						</select>
							<div id="theme_text"></div></td>
						<td class="columnLine_submit" align="center"><select id="select_cipher" name="select_cipher" class="select_tanbg" onchange="cipherKeyFields(this.value,0)">
								<option id="option_cipher0" value="0">&#0160;Choose a Cipher&#0160;</option>
								<option id="option_cipher1" value="1">&#0160;Additive&#0160;</option>
								<option id="option_cipher2" value="2">&#0160;Affine&#0160;</option>
								<option id="option_cipher3" value="3">&#0160;Caesar&#0160;</option>
								<option id="option_cipher4" value="4">&#0160;Keyword&#0160;</option>
								<option id="option_cipher5" value="5">&#0160;Letter-&gt;Number&#0160;</option>
								<option id="option_cipher6" value="6">&#0160;Multiplicative&#0160;</option>
								<option id="option_cipher7" value="7">&#0160;Vigen&egrave;re&#0160;</option>
							</select>
							<div id="keys"></div></td>
						<td class="columnLine_submitR" align="center"><input id="type_name" name="type_name" type="text" size="15" maxlength="50" style="width:100px;" /></td>
					</tr>
				</table>
				<div align="center" style="padding:10px 0px 12px 0px;"><a href="#"
                    onclick="checkSubmit(); return false;"
                    onmouseover="changeImages('btn_submit2', '../images/btn_submit2_over.gif'); return true;"
                    onmouseout="changeImages('btn_submit2', '../images/btn_submit2.gif'); return true;">
                    <img id="btn_submit2" name="btn_submit2" src="../images/btn_submit2.gif" width="94" height="24" alt="Submit" border="0" /></a></div>
			</div>
			
			<div id="board_content">
				<noscript><div align="center">Please turn JavaScript on to view this page properly.</div></noscript>
				<div id="content_messageboard"></div>
			</div>
			
			<?php echo load_view( 'footer' ) ?>

		</div>
	</div>
</div>
<div id="barB_internal" style="position:relative;"></div>
</form>
</body>
</html>