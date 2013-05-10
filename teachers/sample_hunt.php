<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Crypto Club: For Teachers: Treasure Hunt Clue Generator</title>
<meta name="title" content="Crypto Club: For Teachers: Treasure Hunt Clue Generator" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="NEED KEYWORDS" />
<meta name="description" content="NEED DESCRIPTION" />
<meta http-equiv="expires" content="0" />
<style type="text/css" media="screen">
<!--
@import "../styles.css";
body {background:none; background-color:#000000;}
#clue1 {position:absolute; top:293px; left:477px; z-index:106; display:none;}
#clue2 {position:absolute; top:304px; left:46px; z-index:107; display:block;}
#clue3 {position:absolute; top:203px; left:805px; z-index:109; display:block;}
#clue4 {position:absolute; top:143px; left:166px; z-index:110; display:block;}
#clue5 {position:absolute; top:266px; left:663px; z-index:108; display:block;}
#clue6 {position:absolute; top:13px; left:504px; z-index:111; display:block;}
#clue7 {position:absolute; top:351px; left:400px; z-index:111; display:block;}
#popup1 {position:absolute; top:154px; left:319px; z-index:100; display:block; width:310px; height:218px; background:transparent url(../images/bg_clue1.gif) no-repeat;}
#popup2 {position:absolute; top:234px; left:29px; z-index:101; display:none; width:336px; height:153px; background:transparent url(../images/bg_clue2.gif) no-repeat;}
#popup3 {position:absolute; top:79px; left:584px; z-index:103; display:none; width:310px; height:178px; background:transparent url(../images/bg_clue3.gif) no-repeat;}
#popup4 {position:absolute; top:73px; left:3px; z-index:104; display:none; width:311px; height:154px; background:transparent url(../images/bg_clue4.gif) no-repeat;}
#popup5 {position:absolute; top:234px; left:587px; z-index:102; display:none; width:309px; height:154px; background:transparent url(../images/bg_clue5.gif) no-repeat;}
#popup6 {position:absolute; top:1px; left:300px; z-index:105; display:none; width:310px; height:154px; background:transparent url(../images/bg_clue6.gif) no-repeat;}
#popup7 {position:absolute; top:218px; left:356px; z-index:112; display:none; width:403px; height:176px; background:transparent url(../images/bg_clue7.gif) no-repeat;}

.clue_text2 {color:#000000; font-family:"Lucida Console",Arial,Helvetica,Verdana,sans-serif; font-size:12px; line-height:18px; padding:4px 0px 0px 13px;}
.clue_header {color:#ffdc73; font-family:Helvetica,Arial,sans-serif; font-size:10px; line-height:11px; font-weight:bold; float:left; padding:10px 0px 0px 0px;}
.clue_type {color:#ffffff; font-family:Arial,Helvetica,sans-serif; font-size:11px; font-style:italic; float:left; padding:13px 0px 0px 3px;}
.popup_header {width:131px; padding-top:12px; height:88px;}
-->
</style>
<style type="text/css" media="print">
<!--
body {background:none; background-color:#ffffff;}
@import "../styles_print.css";
-->
</style>
<script language="javascript" type="text/javascript" src="../scripts.js"></script>
<script language="javascript" type="text/javascript">
<!--
var clue_num=0;
var sample1_text=["","PDA BENOP LHWYA PDWP UKQ ODKQHZ HKKG<br />EO SDANA UKQ YWJ CK PK CAP W XKKG.","The first place that you should look<br />is where you can go to get a book."];
function resetHunt()
	{
	clue_num=1;
	changeImages('btn_clue'+clue_num,"../images/btn_clue"+clue_num+"_on.gif");
	document.getElementById('encrypted_text').innerHTML=sample1_text[1];
	document.getElementById('decrypt_buttons').innerHTML='<a href="#" onclick="decryptClue1(); return false;" onmouseover="changeImages(\'btn_clickdecrypt\', \'../images/btn_clickdecrypt_over.gif\'); return true;" onmouseout="changeImages(\'btn_clickdecrypt\', \'../images/btn_clickdecrypt.gif\'); return true;"><img id="btn_clickdecrypt" name="btn_clickdecrypt" src="../images/btn_clickdecrypt.gif" width="124" height="16" alt="Click to Decrypt" border="0" /></a>';
	}
function decryptClue1()
	{
	document.getElementById('encrypted_text').innerHTML=sample1_text[2];
	document.getElementById('decrypt_buttons').innerHTML='<a href="#" onclick="hideClue1(); return false;" onmouseover="changeImages(\'btn_close\', \'../images/btn_close_over.gif\'); return true;" onmouseout="changeImages(\'btn_close\', \'../images/btn_close.gif\'); return true;"><img id="btn_close" name="btn_close" src="../images/btn_close.gif" width="178" height="18" alt="Close and Find Clue #2" border="0" /></a>';
	clue_num+=1;
	changeImages('btn_clue'+clue_num,"../images/btn_clue"+clue_num+"_on.gif");
	}
	
function hideClue1()
	{
	if (show_all==false)
		{
		hideIt('clue1');
		hideIt('popup1');
		}
	}
	
function showPopup(num)
	{
	if (clue_num==num)
		{
		hideIt('clue'+num);
		hideIt('popup'+clue_num);
		clue_num+=1;
		hideIt('popup'+(num-1));
		
		showIt('popup'+num);
		if (clue_num<7)
			{
			changeImages('btn_clue'+clue_num,"../images/btn_clue"+clue_num+"_on.gif");
			}
		}
	}
	
var show_all=false;
function toggleAll()
	{
	if (show_all==false)
		{
		show_all=true;
		for (i=1; i<7; i++)
			{
			showIt('popup'+i);
			hideIt('clue'+i);
			}
		hideIt('popup7');
		hideIt('clue7');
		}
	else
		{
		show_all=false;
		for (i=2; i<8; i++)
			{
			showIt('clue'+i);
			hideIt('popup'+i);
			}
		showIt('popup1');
		resetHunt();
		}
	}
// -->
</script>
</head>
<body bgcolor="#000000" text="#ffffff" link="#daab4c" alink="#daab4c" vlink="#cccc99" onload="preloadIntImages(); resetHunt();">
<div id="classroom">
	<div id="clue1"><a href="#" onclick="showPopup(1); return false;"><img id="btn_clue1" name="btn_clue1" src="../images/btn_clue1.gif" width="45" height="45" alt="Clue 1" border="0" /></a></div>
	<div id="clue2"><a href="#" onclick="showPopup(2); return false;"><img id="btn_clue2" name="btn_clue2" src="../images/btn_clue2.gif" width="45" height="45" alt="Clue 2" border="0" /></a></div>
	<div id="clue3"><a href="#" onclick="showPopup(3); return false;"><img id="btn_clue3" name="btn_clue3" src="../images/btn_clue3.gif" width="45" height="45" alt="Clue 3" border="0" /></a></div>
	<div id="clue4"><a href="#" onclick="showPopup(4); return false;"><img id="btn_clue4" name="btn_clue4" src="../images/btn_clue4.gif" width="45" height="45" alt="Clue 4" border="0" /></a></div>
	<div id="clue5"><a href="#" onclick="showPopup(5); return false;"><img id="btn_clue5" name="btn_clue5" src="../images/btn_clue5.gif" width="45" height="45" alt="Clue 5" border="0" /></a></div>
	<div id="clue6"><a href="#" onclick="showPopup(6); return false;"><img id="btn_clue6" name="btn_clue6" src="../images/btn_clue6.gif" width="45" height="45" alt="Clue 6" border="0" /></a></div>
	<div id="clue7"><a href="#" onclick="showPopup(7); return false;"><img id="btn_clue7" name="btn_clue7" src="../images/btn_clue7.gif" width="43" height="30" alt="Clue 7" border="0" /></a></div>
	<div id="popup1">
		<div class="popup_header" style="margin-left:50px;">
			<div align="center"><img src="../images/title_clue1.gif" width="56" height="12" alt="Clue #1" /></div>
			<div class="clue_header" align="center" style="float:none; padding:10px 0px 0px 0px;">Distributed by<br />teacher to students.</div>
			<div class="clue_header" align="center" style="margin-left:10px;">Location<br />described</div>
			<div class="clue_type">Bookshelf</div>
			<div><br clear="left" /></div>
		</div>
		<div id="encrypted_text" class="clue_text2"></div>
		<div id="decrypt_buttons" align="center" style="padding-top:5px;"></div>
	</div>
	<div id="popup2">
		<div class="popup_header" style="margin-left:75px;">
			<div align="center"><img src="../images/title_clue2.gif" width="59" height="12" alt="Clue #2" /></div>
			<div class="clue_header" align="center" style="margin-left:21px;">Hiding<br />place</div>
			<div class="clue_type">Bookshelf</div>
			<div><br clear="left" /></div>
			<div class="clue_header" align="center" style="margin-left:22px;">Location<br />described</div>
			<div class="clue_type">Globe</div>
			<div><br clear="left" /></div>
		</div>
		<div class="clue_text2" style="margin-left:25px;">Find a map that shows it all.<br />
			It shows the world on one big ball.</div>
	</div>
	<div id="popup3">
		<div class="popup_header" style="margin-left:50px;">
			<div align="center"><img src="../images/title_clue3.gif" width="59" height="12" alt="Clue #3" /></div>
			<div class="clue_header" align="center" style="margin-left:30px;">Hiding<br />place</div>
			<div class="clue_type">Globe</div>
			<div><br clear="left" /></div>
			<div class="clue_header" align="center" style="margin-left:5px;">Location<br />described</div>
			<div class="clue_type">Chalkboard</div>
			<div><br clear="left" /></div>
		</div>
		<div class="clue_text2">Sometimes black, sometimes white,<br />
			This is a board on which to write.</div>
	</div>
	<div id="popup4">
		<div class="popup_header" style="margin-left:50px;">
			<div align="center"><img src="../images/title_clue4.gif" width="59" height="12" alt="Clue #4" /></div>
			<div class="clue_header" align="center" style="margin-left:15px;">Hiding<br />place</div>
			<div class="clue_type">Chalkboard</div>
			<div><br clear="left" /></div>
			<div class="clue_header" align="center" style="margin-left:22px;">Location<br />described</div>
			<div class="clue_type">Trash</div>
			<div><br clear="left" /></div>
		</div>
		<div class="clue_text2">As you clean up at the end of the day,<br />
			This is where things are thrown away.</div>
	</div>
	<div id="popup5">
		<div class="popup_header" style="margin-left:100px;">
			<div align="center"><img src="../images/title_clue5.gif" width="59" height="12" alt="Clue #5" /></div>
			<div class="clue_header" align="center" style="margin-left:33px;">Hiding<br />place</div>
			<div class="clue_type">Trash</div>
			<div><br clear="left" /></div>
			<div class="clue_header" align="center" style="margin-left:22px;">Location<br />described</div>
			<div class="clue_type">Clock</div>
			<div><br clear="left" /></div>
		</div>
		<div class="clue_text2">The next clue that you can find<br />
			Is near the place that tells the time.</div>
	</div>
	<div id="popup6">
		<div class="popup_header" style="margin-left:50px;">
			<div align="center"><img src="../images/title_clue6.gif" width="59" height="12" alt="Clue #6" /></div>
			<div class="clue_header" align="center" style="margin-left:32px;">Hiding<br />place</div>
			<div class="clue_type">Clock</div>
			<div><br clear="left" /></div>
			<div class="clue_header" align="center" style="margin-left:21px;">Location<br />described</div>
			<div class="clue_type">Chest</div>
			<div><br clear="left" /></div>
		</div>
		<div class="clue_text2">Don't get tired, do not rest.<br />
			Find treasure under teacher's desk.</div>
	</div>
	
	<div id="popup7">
		<div class="popup_header" style="margin-left:102px; height:60px;">
			<div align="center"><img src="../images/title_clue7.gif" width="68" height="15" alt="Hunt Tip" /></div>
			<div class="clue_header" align="center" style="margin-left:32px;">Hiding<br />place</div>
			<div class="clue_type">Chest</div>
			<div><br clear="left" /></div>
		</div>
		<div class="clue_text2" style="margin-left:68px; margin-right:10px; padding:0px 0px 6px 0px;">The treasure can be food treats or more practical rewards. Chocolate gold coins fit well with a treasure theme. Be sure to have enough for all participants to share.</div>
		<div style="margin-left:95px;"><a href="#"
			onclick="return false;"
			onmouseover="changeImages('btn_downloadhunt', '../images/btn_downloadhunt_over.gif'); return true;"
			onmouseout="changeImages('btn_downloadhunt', '../images/btn_downloadhunt.gif'); return true;">
			<img id="btn_downloadhunt" name="btn_downloadhunt" src="../images/btn_downloadhunt.gif" width="265" height="26" alt="Download This Treasure Hunt" border="0" /></a></div>
	</div>
</div>
</body>
</html>