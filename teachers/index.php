<?php

require '../common/header.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Crypto Club: For Teachers</title>
<meta name="title" content="Crypto Club: For Teachers" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="NEED KEYWORDS" />
<meta name="description" content="NEED DESCRIPTION" />
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
<script language="javascript" type="text/javascript" src="../scripts.js"></script>
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
<body bgcolor="#000000" text="#ffffff" link="#daab4c" alink="#daab4c" vlink="#cccc99" onload="preloadIntImages();">
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
			<div id="title" align="center" style="padding-top:8px;"><img src="../images/title_forteachers.gif" width="231" height="27" alt="For Teachers" /></div>
			<div id="title_print">For Teachers</div>
			<div id="subtitle">
				<div class="arial15pxBlack">Text will go here.</div>
			</div>
			<div><br clear="all" /></div>
			<div id="bg_internalDark" align="left">
				<div style="padding:20px 180px 20px 180px;">
					<div><a href="clue_generator.php" class="arial_16pxBlueB">Treasure Hunt Clue Generator</a></div>
					<div><br /><a href="/groups/?action=list" class="arial_16pxBlueB">Private Groups</a></div>
				</div>
			</div>
			
			<?php echo load_view( 'footer' ) ?>
		</div>
	</div>
</div>
<div id="barB_internal"></div>

</body>
</html>
