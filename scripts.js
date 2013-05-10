function newImage(arg) {
    if (document.images) {
        rslt = new Image();
        rslt.src = arg;
        return rslt;
    }
}

function changeImages() {
    if (document.images && (preloadFlag == true)) {
        for (var i=0; i<changeImages.arguments.length; i+=2) {
            document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
        }
    }
}

var preloadFlag = false;
function preloadImages() {
    if (document.images) {
        btn_games_over = newImage("/images/btn_games_over.jpg");
        btn_gamesH_over = newImage("/images/btn_gamesH_over.jpg");
        btn_challenges_over = newImage("/images/btn_challenges_over.jpg");
        btn_challengesH_over = newImage("/images/btn_challengesH_over.jpg");
        btn_tools_over = newImage("/images/btn_tools_over.jpg");
        btn_toolsH_over = newImage("/images/btn_toolsH_over.jpg");
        btn_comics_over = newImage("/images/btn_comics_over.jpg");
        btn_comicsH_over = newImage("/images/btn_comicsH_over.gif");
        btn_math_over = newImage("/images/btn_math_over.jpg");
        btn_mathH_over = newImage("/images/btn_mathH_over.jpg");
        btn_forteachers_over = newImage("/images/btn_forteachers_over.jpg");
        btn_forteachersH_over = newImage("/images/btn_forteachersH_over.jpg");
        bg_home_over = newImage("/images/bg_home.jpg");
        bg_homeComics_over = newImage("/images/bg_homeComics.jpg");
		
        btn_sitemap_over = newImage("/images/btn_sitemap_over.gif");
        btn_homepage_over = newImage("/images/btn_homepage_over.gif");
        btn_caesarcipher_over = newImage("/images/btn_caesarcipher_over.gif");
        btn_samplecomic_over = newImage("/images/btn_samplecomic_over.gif");
        btn_samplegame_over = newImage("/images/btn_samplegame_over.gif");
        btn_clue1_on = newImage("/images/btn_clue1_on.gif");
        btn_clue2_on = newImage("/images/btn_clue2_on.gif");
        btn_clickdecrypt_over = newImage("/images/btn_clickdecrypt_over.gif");
        btn_close_over = newImage("/images/btn_close_over.gif");
        btn_downloadhunt_over = newImage("/images/btn_downloadhunt_over.gif");
		
        btn_step0_over = newImage("/images/btn_step0_over.jpg");
        btn_step1_over = newImage("/images/btn_step1_over.jpg");
        btn_step2_over = newImage("/images/btn_step2_over.jpg");
        btn_step3_over = newImage("/images/btn_step3_over.jpg");
        btn_next_createclues_over = newImage("/images/btn_next_createclues_over.jpg");
        btn_next_encryption_over = newImage("/images/btn_next_encryption_over.jpg");
        btn_next_review_over = newImage("/images/btn_next_review_over.jpg");
        btn_reorder_over = newImage("/images/btn_reorder_over.jpg");
        btn_preview_over = newImage("/images/btn_preview_over.gif");
        btn_print_over = newImage("/images/btn_print_over.gif");
        btn_download_over = newImage("/images/btn_download_over.gif");
        btn_closesample_over = newImage("/images/btn_closesample_over.jpg");
        btn_seeall_over = newImage("/images/btn_seeall_over.gif");
        btn_yes_over = newImage("/images/btn_yes_over.gif");
        btn_no_over = newImage("/images/btn_no_over.gif");
        btn_continue_over = newImage("/images/btn_continue_over.gif");
		
        btn_login_over = newImage("/images/btn_login_over.gif");
        btn_choose_over = newImage("/images/btn_choose_over.gif");
        btn_submit_over = newImage("/images/btn_submit_over.gif");
        btn_savechanges_over = newImage("/images/btn_savechanges_over.gif");
        btn_change_over = newImage("/images/btn_change_over.gif");
        btn_x_over = newImage("/images/btn_x_over.gif");
        btn_continueBlue_over = newImage("/images/btn_continueBlue_over.gif");
        btn_encrypt_over = newImage("/images/btn_encrypt_over.gif");
        btn_continue2_over = newImage("/images/btn_continue2_over.gif");
        btn_done_over = newImage("/images/btn_done_over.gif");
        btn_leaderboards_over = newImage("/images/btn_leaderboards_over.gif");
		
        btn_caesar_over = newImage("/images/btn_caesar_over.jpg");
        btn_caesar_over2 = newImage("/images/btn_caesar_over2.jpg");
        btn_substitution_over = newImage("/images/btn_substitution_over.jpg");
        btn_substitution_over2 = newImage("/images/btn_substitution_over2.jpg");
        btn_keyword_over = newImage("/images/btn_keyword_over.jpg");
        btn_letter_over = newImage("/images/btn_letter_over.jpg");
        btn_additive_over = newImage("/images/btn_additive_over.jpg");
        btn_additive_over2 = newImage("/images/btn_additive_over2.jpg");
        btn_multiplicative_over = newImage("/images/btn_multiplicative_over.jpg");
        btn_affine_over = newImage("/images/btn_affine_over.jpg");
        btn_vigenere_over = newImage("/images/btn_vigenere_over.jpg");
        btn_vigenere_over2 = newImage("/images/btn_vigenere_over2.jpg");
        btn_checkenc_over = newImage("/images/btn_checkenc_over.gif");
        btn_closecont_over = newImage("/images/btn_closecont_over.gif");
        btn_goback_over = newImage("/images/btn_goback_over.gif");
		
        preloadFlag = true;
    }
}

function preloadIntImages() {
    if (document.images) {
        btn_games_over = newImage("../images/btn_games_over.jpg");
        btn_gamesH_over = newImage("../images/btn_gamesH_over.jpg");
        btn_challenges_over = newImage("../images/btn_challenges_over.jpg");
        btn_challengesH_over = newImage("../images/btn_challengesH_over.jpg");
        btn_tools_over = newImage("../images/btn_tools_over.jpg");
        btn_toolsH_over = newImage("../images/btn_toolsH_over.jpg");
        btn_comics_over = newImage("../images/btn_comics_over.jpg");
        btn_comicsH_over = newImage("../images/btn_comicsH_over.gif");
        btn_math_over = newImage("../images/btn_math_over.jpg");
        btn_mathH_over = newImage("../images/btn_mathH_over.jpg");
        btn_forteachers_over = newImage("../images/btn_forteachers_over.jpg");
        btn_forteachersH_over = newImage("../images/btn_forteachersH_over.jpg");
        bg_home_over = newImage("../images/bg_home.jpg");
        bg_homeComics_over = newImage("../images/bg_homeComics.jpg");
		
        btn_sitemap_over = newImage("../images/btn_sitemap_over.gif");
        btn_homepage_over = newImage("../images/btn_homepage_over.gif");
        btn_caesarcipher_over = newImage("../images/btn_caesarcipher_over.gif");
        btn_samplecomic_over = newImage("../images/btn_samplecomic_over.gif");
        btn_samplegame_over = newImage("../images/btn_samplegame_over.gif");
        btn_clue1_on = newImage("../images/btn_clue1_on.gif");
        btn_clue2_on = newImage("../images/btn_clue2_on.gif");
        btn_clickdecrypt_over = newImage("../images/btn_clickdecrypt_over.gif");
        btn_close_over = newImage("../images/btn_close_over.gif");
        btn_downloadhunt_over = newImage("../images/btn_downloadhunt_over.gif");
		
        btn_step0_over = newImage("../images/btn_step0_over.jpg");
        btn_step1_over = newImage("../images/btn_step1_over.jpg");
        btn_step2_over = newImage("../images/btn_step2_over.jpg");
        btn_step3_over = newImage("../images/btn_step3_over.jpg");
        btn_next_createclues_over = newImage("../images/btn_next_createclues_over.jpg");
        btn_next_encryption_over = newImage("../images/btn_next_encryption_over.jpg");
        btn_next_review_over = newImage("../images/btn_next_review_over.jpg");
        btn_reorder_over = newImage("../images/btn_reorder_over.jpg");
        btn_preview_over = newImage("../images/btn_preview_over.gif");
        btn_print_over = newImage("../images/btn_print_over.gif");
        btn_download_over = newImage("../images/btn_download_over.gif");
        btn_closesample_over = newImage("../images/btn_closesample_over.jpg");
        btn_seeall_over = newImage("../images/btn_seeall_over.gif");
        btn_yes_over = newImage("../images/btn_yes_over.gif");
        btn_no_over = newImage("../images/btn_no_over.gif");
        btn_continue_over = newImage("../images/btn_continue_over.gif");
		
        btn_login_over = newImage("../images/btn_login_over.gif");
        btn_choose_over = newImage("../images/btn_choose_over.gif");
        btn_submit_over = newImage("../images/btn_submit_over.gif");
        btn_savechanges_over = newImage("../images/btn_savechanges_over.gif");
        btn_change_over = newImage("../images/btn_change_over.gif");
        btn_x_over = newImage("../images/btn_x_over.gif");
        btn_continueBlue_over = newImage("../images/btn_continueBlue_over.gif");
        btn_continueBlue_over = newImage("../images/btn_continueBlue_over.gif");
        btn_encrypt_over = newImage("../images/btn_encrypt_over.gif");
        btn_continue2_over = newImage("../images/btn_continue2_over.gif");
        btn_done_over = newImage("../images/btn_done_over.gif");
        btn_leaderboards_over = newImage("../images/btn_leaderboards_over.gif");
		
        btn_caesar_over = newImage("../images/btn_caesar_over.jpg");
        btn_caesar_over2 = newImage("../images/btn_caesar_over2.jpg");
        btn_substitution_over = newImage("../images/btn_substitution_over.jpg");
        btn_substitution_over2 = newImage("../images/btn_substitution_over2.jpg");
        btn_keyword_over = newImage("../images/btn_keyword_over.jpg");
        btn_letter_over = newImage("../images/btn_letter_over.jpg");
        btn_additive_over = newImage("../images/btn_additive_over.jpg");
        btn_additive_over2 = newImage("../images/btn_additive_over2.jpg");
        btn_multiplicative_over = newImage("../images/btn_multiplicative_over.jpg");
        btn_affine_over = newImage("../images/btn_affine_over.jpg");
        btn_vigenere_over = newImage("../images/btn_vigenere_over.jpg");
        btn_vigenere_over2 = newImage("../images/btn_vigenere_over2.jpg");
		
        btn_copy_over = newImage("../images/btn_copy_over.gif");
        btn_submit2_over = newImage("../images/btn_submit2_over.gif");
        btn_submitplaintext_over = newImage("../images/btn_submitplaintext.gif");
        btn_getciphertext_over = newImage("../images/btn_getciphertext_over.gif");
        btn_checkenc_over = newImage("../images/btn_checkenc_over.gif");
        btn_closecont_over = newImage("../images/btn_closecont_over.gif");
		
        btn_messages_over = newImage("../images/btn_messages_over.jpg");
        btn_jokeboard_over = newImage("../images/btn_jokeboard_over.jpg");
        btn_mygroup_over = newImage("../images/btn_mygroup_over.jpg");
        btn_play_over = newImage("../images/btn_play_over.jpg");
        btn_mission_over = newImage("../images/btn_mission_over.jpg");
        btn_village_over = newImage("../images/btn_village_over.jpg");
        btn_rogue_over = newImage("../images/btn_rogue_over.jpg");
        btn_oasis_over = newImage("../images/btn_oasis_over.jpg");
        btn_read_over = newImage("../images/btn_read_over.jpg");
        btn_comic1_over = newImage("../images/btn_comic1_over.jpg");
        btn_comic2_over = newImage("../images/btn_comic2_over.jpg");
        btn_comic3_over = newImage("../images/btn_comic3_over.jpg");
		
        preloadFlag = true;
    }
}

function logIn()
{
    alert('A login screen needs to be set up.');
}

function logOut()
{
    alert('A logout screen needs to be set up.');
}
	
isDHTML=0;
isLayers=0;
isAll=0;
isID=0;

if (document.getElementById)
{
    isID=1;
    isDHTML=1;
}
else
{
    if (document.layers)
    {
        isLayers=1;
        isDHTML=1;
    }
    else
    {
        if (document.all)
        {
            isAll=1;
            isDHTML=1;
        }
    }
}

function findDOM(obj,withStyle)
{
    if (withStyle == 1)
    {
        if (isID)
        {
            return (document.getElementById(obj).style);
        }
        else
        { 
            if (isAll)
            {
                return (document.all[obj].style);
            }
            else
            {
                if (isLayers)
                {
                    return (document.layers[obj]);
                }
            }
        }
    }
    else {
        if (isID)
        {
            return (document.getElementById(obj));
        }
        else
        { 
            if (isAll)
            {
                return (document.all[obj]);
            }
            else
            {
                if (isLayers)
                {
                    return (document.layers[obj]);
                }
            }
        }
    }
}
	
function hideIt(obj)
{
    element=findDOM(obj,1);
    state=element.display;	
    element.display='none';
}
	
function showIt(obj)
{
    element=findDOM(obj,1);
    state=element.display;	
    element.display='block';
}
	
curleft=0;
curtop=0;

function getXCoord(obj)
{
    curleft=0;
    if (obj.offsetParent)
    {
        while(1) 
        {
            curleft+=obj.offsetLeft;
            if(!obj.offsetParent)
            {
                break;
            }
            obj=obj.offsetParent;
        }
    }
    else if (obj.x)
    {
        curleft+=obj.x;
    }
    return curleft;
}
	
function getYCoord(obj)
{
    curtop = 0;
    if (obj.offsetParent)
    {
        while(1)
        {
            curtop+=obj.offsetTop;
            if(!obj.offsetParent)
            {
                break;
            }
            obj=obj.offsetParent;
        }
    }
    else if (obj.y)
    {
        curtop+=obj.y;
    }
    return curtop;
}
	
function hidePreview(obj)
{
    element=findDOM(obj,1);
    state=element.visibility;
    element.visibility='hidden';
}
	
function showPreview(obj,obj2)
{
    getXCoord(obj2);
    getYCoord(obj2);
	
    element=findDOM(obj,1);
    element.top=(curtop-80)+"px";
    element.left=(curleft-165)+"px";
    state=element.visibility;
    element.visibility='visible';
}
	
function prevPage()
{
    window.history.go(-1);
}
	
var bio_images=["","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif","/images/temp.gif"];
var bios=["","1 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","2 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","3 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","4 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","5 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","6 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","7 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","8 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","9 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","10 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","11 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","12 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","13 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","14 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","15 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","16 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","17 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","18 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","19 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","20 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","21 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","22 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","23 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","24 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem"];
var codenames=["","Leonard Adleman","Al-Kindi","Ross Anderson","Charles Babbage","Leone Battista Alberti","&Eacute;tienne Bazeries","George Blakley","Julius Caesar","Rosario Candela","Joan Daemen","Whitfield Diffie","Elizebeth Friedman","Leonard Adleman","Al-Kindi","Ross Anderson","Charles Babbage","Leone Battista Alberti","&Eacute;tienne Bazeries","George Blakley","Julius Caesar","Rosario Candela","Joan Daemen","Whitfield Diffie","Elizebeth Friedman"];

function getCodenames(object_id)
{
    if (document.getElementById)
    {
        temp_codename=curr_codename;
        tempHTML='';
        tempHTML+='<div id="codename_title"><strong class="arial14pxBlackB">Choose Codename:</strong></div>';
        tempHTML+='<div id="float_codename1">';
        for (i=1; i<Math.ceil(codenames.length/2); i++)
        {
            if (i<Math.ceil(codenames.length/2)-1)
            {
                addHTML="<br />";
            }
            else
            {
                addHTML="</div>";
            }
            tempHTML+='	<a href="#" id="code'+i+'" onclick="getBio('+i+'); return false;" class="verdana_10pxB codename">'+codenames[i]+'</a>'+addHTML;
        }
        tempHTML+='<div id="float_codename2">';
		
        for (i=Math.ceil(codenames.length/2); i<codenames.length; i++)
        {
            if (i<codenames.length-1)
            {
                addHTML="<br />";
            }
            else
            {
                addHTML="</div>";
            }
            tempHTML+='	<a href="#" id="code'+i+'" onclick="getBio('+i+'); return false;" class="verdana_10pxB codename">'+codenames[i]+'</a>'+addHTML;
        }
        tempHTML+='<div><br clear="all" /></div>';
        tempHTML+='<div align="center" style="padding:20px 0px 4px 0px;"><a href="#" onclick="codenameBio(); return false;" class="verdana_11pxB">Go to page with cryptographers\' biographies</a></div>';
	
        document.getElementById('codename_content').innerHTML=tempHTML;
		
        if (curr_codename!=0)
        {
            document.getElementById("code"+curr_codename).className="verdana_10pxB_on";
        }
		
        getXCoord(document.getElementById('codename'));
        getYCoord(document.getElementById('codename'));
	
        element=findDOM('codename_choose',1);
        element.top=(curtop-130)+"px";
        element.left=(curleft+349)+"px";
        document.getElementById("codename_choose").style.display="block";
    }
}
	
function closeCodename()
{
    if (document.getElementById)
    {
        document.getElementById("codename_choose").style.display="none";
    }
}
	
function getBio(num)
{
    if (temp_codename!=0)
    {
        document.getElementById("code"+temp_codename).className="verdana_10pxB codename";
    }
    temp_codename=num;
    document.getElementById("code"+temp_codename).className="verdana_10pxB_on codename";
}
	
function codenameBio()
{
    if (temp_codename!=0)
    {
        tempHTML='';
        tempHTML+='<div id="codename_title"><strong class="verdana_12pxTanB">Code Name: </strong><strong class="arial14pxBlackB">'+codenames[temp_codename]+'</strong></div>';
        tempHTML+='<div style="padding:4px 17px 0px 17px;">';
        tempHTML+='	<div style="float:left; margin:4px 11px 3px 0px; -moz-box-shadow: 0px 0px 3px #000000; -webkit-box-shadow: 0px 0px 3px #000000; box-shadow: 0px 0px 3px #000000; -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=3, Direction=135, Color=\'#000000\')"; filter: progid:DXImageTransform.Microsoft.Shadow(Strength=3, Direction=135, Color=\'#000000\');"><img src="'+bio_images[temp_codename]+'" width="125" height="155" border="0" alt="Image of '+codenames[temp_codename]+'" /></div>';
        tempHTML+='	<div class="verdana_13px"><em>'+bios[temp_codename]+'</em></div>';
        tempHTML+='<div><br clear="all" /></div>';
        tempHTML+='	<div align="center" style="padding:20px 0px 4px 0px;"><a href="#" onclick="acceptCodename(); return false;" class="verdana_11pxB">Choose This Codename</a> &#0160; &#0160; &#0160;';
        tempHTML+='		<a href="#" onclick="getCodenames(); return false;" class="verdana_11pxB">Cancel</a></div>';
        tempHTML+='</div>';
        document.getElementById('codename_content').innerHTML=tempHTML;
    }
}

function updateGender(object_id)
{
    gender=object_id.value;
}
	
function getRowOver(num)
{
    if (document.getElementById)
    {
        $("#row"+num).addClass( 'bg_white');
        $("#row"+num).removeClass( 'bg_tan' );
//        document.getElementById('row'+num).setAttribute("class","bg_white");
//        document.getElementById('row'+num).setAttribute("className","bg_white");
    }
}
	
function getRowOut(num)
{
    if (document.getElementById)
    {
        $("#row"+num).removeClass( 'bg_white') ;
        $("#row"+num).addClass( 'bg_tan' );
        
//        document.getElementById('row'+num).setAttribute("class","bg_tan");
//        document.getElementById('row'+num).setAttribute("className","bg_tan");
    }
}
	
function getRowOver2(num)
{
    if (document.getElementById)
    {
        document.getElementById('group_row'+num).setAttribute("class","bg_white");
        document.getElementById('group_row'+num).setAttribute("className","bg_white");
    }
}
	
function getRowOut2(num)
{
    if (document.getElementById)
    {
        document.getElementById('group_row'+num).setAttribute("class","bg_tan");
        document.getElementById('group_row'+num).setAttribute("className","bg_tan");
    }
}
	
function addThemeOptions()
{
    var select_id=document.getElementById('select_theme');
    select_id.options.length=0;
    //    option=document.createElement('option'); 
    //    option.setAttribute('value',0); 
    //    option.setAttribute('id',"option_theme"+0); 
    //    option.appendChild(document.createTextNode('\u00a0Choose a Theme\u00a0')); 
    //    select_id.appendChild(option);

    for (var i in possible_themes )
    { 
        option=document.createElement('option'); 
        option.setAttribute('value',i); 
        option.setAttribute('id',"option_theme"+i); 
        option.appendChild(document.createTextNode('\u00a0'+possible_themes[i]+'\u00a0')); 
        select_id.appendChild(option); 
    }
		
    option=document.createElement('option'); 
    option.setAttribute('value', 'add_new'); 
    option.setAttribute('id',"option_theme"+possible_themes.length); 
    option.appendChild(document.createTextNode('\u00a0Add New Theme\u00a0')); 
    select_id.appendChild(option);
    document.getElementById("theme_text").style.display="none";
    
    
}
	
function updateTheme(val)
{
    if ( val != 'add_new')
    {
        document.getElementById('theme_text').innerHTML='';
        document.getElementById("theme_text").style.display="none";
    }
    else
    {
        document.getElementById('theme_text').innerHTML='<input type="text" id="theme_input" size="14" class="text_admin182px" maxlength="30" autocapitalize="off" autocorrect="off" />';
        document.getElementById("theme_text").style.display="block";
    }
}
	
function getCrackedText(num)
{
    document.getElementById('action'+num).innerHTML='<div class="arial14pxBlackB"><em>Message Cracked</em></div><div class="padding_crack"><a href="#" onclick="getCrackButtons('+num+'); return false;" class="verdana_9pxBlueB">Crack It Again</a></div>';
    document.getElementById('action_td'+num).setAttribute("class","columnLineL_done");
    document.getElementById('action_td'+num).setAttribute("className","columnLineL_done");
}
	
function getCrackedJoke(num)
{
    document.getElementById('action'+num).innerHTML='<div class="arial14pxBlackB"><em>Punchline Decrypted</em></div><div class="padding_crack"><a href="#" onclick="getCrackButtons('+num+'); return false;" class="verdana_9pxBlueB">Decrypt It Again</a></div>';
    document.getElementById('action_td'+num).setAttribute("class","columnLineL_done");
    document.getElementById('action_td'+num).setAttribute("className","columnLineL_done");
}
	
function closeCopyPopup()
{
    if (document.getElementById)
    {
        document.getElementById("popup_copy").style.visibility='hidden';
        changeImages('btn_getciphertext'+currCiphertext,'../images/btn_getciphertext_on.gif');
    }
    message_copied[currCiphertext]=true;
}
	
function closePlaintextResponse()
{
    hideIt('correct');
    hideIt('incorrect');
}
	
var odd_nums_prime26=["",1,3,5,7,9,11,15,17,19,21,23,25];
function cipherKeyFields(num,resetNum)
{
    cipher_num=num;
    if (num==1)
    {
        //0-25
        //change letter to number, add encryption key (two characters?), reduce mod 26
        //additive: use a:number
        if (resetNum==0)
        {
            keyA="";
            keyB="";
        }
        tempHTML='<strong class="helvetica11pxTanB">Key&#0160;(0-25)</strong> <input type="text" id="key_a" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onchange="checkKey(); return false;" onkeyup="checkKey(); return false;" autocapitalize="off" autocorrect="off" />';
    }
    else if (num==2)
    {
        //a-z: 0-25
        //number a is 1-25 and not relatively prime to 26
        //number b is any one/two digit number
        //a*lettertonumber+b(mod26)
        //affine: use a:number and b:number
        if (resetNum==0)
        {
            keyA=0;
            keyB="";
        }
        //(1,3,5,7,9,11,15,17,19,21,23,25)
        tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><strong class="helvetica11pxTanB">Multiplicative Key: </strong></td><td align="left"><select class="select_tanbg" id="key_a" onchange="checkKey(); return false;"><option id="option_mult0" value="0" id="option_mult0">Select</option><option value="1" id="option_mult1">&#0160;1&#0160;</option><option value="3" id="option_mult2">&#0160;3&#0160;</option><option value="5" id="option_mult3">&#0160;5&#0160;</option><option value="7" id="option_mult4">&#0160;7&#0160;</option><option value="9" id="option_mult5">&#0160;9&#0160;</option><option value="11" id="option_mult6">&#0160;11&#0160;</option><option value="15" id="option_mult7">&#0160;15&#0160;</option><option value="17" id="option_mult8">&#0160;17&#0160;</option><option value="19" id="option_mult9">&#0160;19&#0160;</option><option value="21" id="option_mult10">&#0160;21&#0160;</option><option value="23" id="option_mult11">&#0160;23&#0160;</option><option value="25" id="option_mult12">&#0160;25&#0160;</option></select></td></tr>';
        tempHTML+='<tr><td align="right"><strong class="helvetica11pxTanB">Additive (any number)</strong></td><td align="left"><input type="text" id="key_b" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyB+'" onchange="checkKey(); return false;" onkeyup="checkKey(); return false;" autocapitalize="off" autocorrect="off" /></td></tr></table>';
    }
    else if (num==3)
    {
        //0-25 key num a=A with 0 a=B with 1
        //caesar: use a:number
        if (resetNum==0)
        {
            keyA="";
            keyB="";
        }
        tempHTML='<strong class="helvetica11pxTanB">Key&#0160;(0-25)</strong> <input type="text" id="key_a" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onchange="checkKey(); return false;" onkeyup="checkKey(); return false;" autocapitalize="off" autocorrect="off" />';
    }
    else if (num==4)
    {
        //keyword: use a:word and b:letter
        //start adding in keyword to alphabet at letter specified, rest of unused letters fill in after keyword
        if (resetNum==0)
        {
            keyA="";
            keyB="";
        }
        tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><strong class="helvetica11pxTanB">Keyword</strong> </td><td><input type="text" id="key_a" maxlength="26" class="form_field11px" style="width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onchange="checkKey(); return false;" onkeyup="checkKey(); return false;" autocapitalize="off" autocorrect="off" /></td></tr>';
        tempHTML+='<tr><td align="right"><strong class="helvetica11pxTanB">keyletter</strong> </td><td align="left"><input type="text" id="key_b" maxlength="1" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyB+'" onchange="checkKey(); return false;" onkeyup="checkKey(); return false;" autocapitalize="off" autocorrect="off" /></td></tr></table>';
    }
    // this used to be 5 I didn't want to delete it completly
    else if (num==5)
    {
        //a-z=0-25 or a-z=1-26
        //letter to number: a:number (0 or 1)
        if (resetNum==0)
        {
            keyA="0";
            keyB="";
        }
        tempHTML="&#0160;";
    }
    else if (num==6)
    {
        //multiplicative: a:number,  1-25 and not relatively prime to 26
        if (resetNum==0)
        {
            keyA=0;
            keyB="";
        }
        //(1,3,5,7,9,11,15,17,19,21,23,25)
        tempHTML='<strong class="helvetica11pxTanB">Key:</strong><select class="select_tanbg" id="key_a" onchange="checkKey(); return false;"><option value="0" id="option_mult0">Select</option><option value="1" id="option_mult1">&#0160;1&#0160;</option><option value="3" id="option_mult2">&#0160;3&#0160;</option><option value="5" id="option_mult3">&#0160;5&#0160;</option><option value="7" id="option_mult4">&#0160;7&#0160;</option><option value="9" id="option_mult5">&#0160;9&#0160;</option><option value="11" id="option_mult6">&#0160;11&#0160;</option><option value="15" id="option_mult7">&#0160;15&#0160;</option><option value="17" id="option_mult8">&#0160;17&#0160;</option><option value="19" id="option_mult9">&#0160;19&#0160;</option><option value="21" id="option_mult10">&#0160;21&#0160;</option><option value="23" id="option_mult11">&#0160;23&#0160;</option><option value="25" id="option_mult12">&#0160;25&#0160;</option></select>';
    }
    else if (num==7)
    {
        //vigenere: use a:word--26 letters or less
        if (resetNum==0)
        {
            keyA="";
            keyB="";
        }
        tempHTML='<strong class="helvetica11pxTanB">Keyword</strong> <input type="text" id="key_a" maxlength="26" class="form_field11px" style="width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onchange="checkKey(); return false;" onkeyup="checkKey(); return false;" autocapitalize="off" autocorrect="off" />';
    }
    else if (num==8)
    {
        //your_own_message
        if (resetNum==0)
        {
            keyA="";
            keyB="";
        }
        tempHTML='<strong class="helvetica11pxTanB">Keyword or Other<br />info to Display:</strong><br /><input type="text" id="key_a" maxlength="26" class="form_field11px" style="margin-top:2px; width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onkeyup="checkKey(); return false;" autocapitalize="off" autocorrect="off" />';
    }
		
    if (num>0)
    {
        if (num!=15)
        {
            document.getElementById('keys').innerHTML=tempHTML;
            document.getElementById('keys').style.display="block";
            if ((num==2 || num==6) && !isNaN(keyA) && keyA!="")
            {
                //update select field
                if (num==2)
                {
                    document.getElementById('key_a').selectedIndex=keyA;
                    document.getElementById('option_mult'+keyA).selected=true;
                }
                else
                {
                    for (i=1; i<odd_nums_prime26.length; i++)
                    {
                        if (keyA*1==odd_nums_prime26[i])
                        {
                            document.getElementById('key_a').selectedIndex=i;
                            document.getElementById('option_mult'+i).selected=true;
                            break;
                        }
                    }
                }
            }
        }
        else
        {
            document.getElementById('keys').style.display="none";
        }
    }
    else
    {
        document.getElementById('keys').innerHTML='';
        document.getElementById('keys').style.display="none";
    }
}

function cipherKeyFieldsAdmin(num,resetNum)
{
    cipher_num=num;
    
    if (num==1)
    {
        //0-25
        //change letter to number, add encryption key (two characters?), reduce mod 26
        //additive: use a:number
        if (resetNum==0)
        {
            keyA="";
            keyB="";
        }
        tempHTML='<strong class="helvetica11pxTanB">Key&#0160;(0-25)</strong> <input type="text" id="key_a" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onchange="checkKeyAdmin(); return false;" onkeyup="checkKeyAdmin(); return false;" autocapitalize="off" autocorrect="off" />';
    }
    else if (num==2)
    {
        //a-z: 0-25
        //number a is 1-25 and divisible only by 1
        //number b is any one/two digit number
        //a*lettertonumber+b(mod26)
        //affine: use a:number and b:number
        if (resetNum==0)
        {
            keyA=0;
            keyB="";
        }
        //(1,3,5,7,9,11,15,17,19,21,23,25)
        tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><strong class="helvetica11pxTanB">Multiplicative Key: </strong></td><td align="left"><select class="select_tanbg" id="key_a" onchange="checkKeyAdmin(); return false;"><option id="option_mult0" value="0" id="option_mult0">Select</option><option value="1" id="option_mult1">&#0160;1&#0160;</option><option value="3" id="option_mult2">&#0160;3&#0160;</option><option value="5" id="option_mult3">&#0160;5&#0160;</option><option value="7" id="option_mult4">&#0160;7&#0160;</option><option value="9" id="option_mult5">&#0160;9&#0160;</option><option value="11" id="option_mult6">&#0160;11&#0160;</option><option value="15" id="option_mult7">&#0160;15&#0160;</option><option value="17" id="option_mult8">&#0160;17&#0160;</option><option value="19" id="option_mult9">&#0160;19&#0160;</option><option value="21" id="option_mult10">&#0160;21&#0160;</option><option value="23" id="option_mult11">&#0160;23&#0160;</option><option value="25" id="option_mult12">&#0160;25&#0160;</option></select></td></tr>';
        tempHTML+='<tr><td align="right"><strong class="helvetica11pxTanB">Additive (any number)</strong></td><td align="left"><input type="text" id="key_b" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyB+'" onchange="checkKeyAdmin(); return false;" onkeyup="checkKeyAdmin(); return false;" autocapitalize="off" autocorrect="off" /></td></tr></table>';
    }
    else if (num==3)
    {
        //0-25 key num a=A with 0 a=B with 1
        //caesar: use a:number
        if (resetNum==0)
        {
            keyA="";
            keyB="";
        }
        tempHTML='<strong class="helvetica11pxTanB">Key&#0160;(0-25)</strong> <input type="text" id="key_a" maxlength="2" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onchange="checkKeyAdmin(); return false;" onkeyup="checkKeyAdmin(); return false;" autocapitalize="off" autocorrect="off" />';
    }
    else if (num==4)
    {
        //keyword: use a:word and b:letter
        //start adding in keyword to alphabet at letter specified, rest of unused letters fill in after keyword
        if (resetNum==0)
        {
            keyA="";
            keyB="";
        }
        tempHTML='<table cellpadding="1" border="0"><tr><td align="right"><strong class="helvetica11pxTanB">Keyword</strong> </td><td><input type="text" id="key_a" maxlength="26" class="form_field11px" style="width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onchange="checkKeyAdmin(); return false;" onkeyup="checkKeyAdmin(); return false;" autocapitalize="off" autocorrect="off" /></td></tr>';
        tempHTML+='<tr><td align="right"><strong class="helvetica11pxTanB">keyletter</strong> </td><td align="left"><input type="text" id="key_b" maxlength="1" class="form_field11px" style="width:19px; height:12px; text-align:right; color:#000000;" value="'+keyB+'" onchange="checkKeyAdmin(); return false;" onkeyup="checkKeyAdmin(); return false;" autocapitalize="off" autocorrect="off" /></td></tr></table>';
    }
    // this used to be 5 I didn't want to delete it completly
    else if (num==5)
    {
        //LETTER TO NUMBER WAS REMOVED. multiplicative is now 5th cipher for admin pages.
	
        //multiplicative: a:number
        if (resetNum==0)
        {
            keyA=0;
            keyB="";
        }
        //(1,3,5,7,9,11,15,17,19,21,23,25)
        tempHTML='<strong class="helvetica11pxTanB">Key:</strong> <select class="select_tanbg" id="key_a" onchange="checkKeyAdmin(); return false;"><option value="0" id="option_mult0">Select</option><option value="1" id="option_mult1">&#0160;1&#0160;</option><option value="3" id="option_mult2">&#0160;3&#0160;</option><option value="5" id="option_mult3">&#0160;5&#0160;</option><option value="7" id="option_mult4">&#0160;7&#0160;</option><option value="9" id="option_mult5">&#0160;9&#0160;</option><option value="11" id="option_mult6">&#0160;11&#0160;</option><option value="15" id="option_mult7">&#0160;15&#0160;</option><option value="17" id="option_mult8">&#0160;17&#0160;</option><option value="19" id="option_mult9">&#0160;19&#0160;</option><option value="21" id="option_mult10">&#0160;21&#0160;</option><option value="23" id="option_mult11">&#0160;23&#0160;</option><option value="25" id="option_mult12">&#0160;25&#0160;</option></select>';
    }
    else if (num==6)
    {
        //vigenere: use a:word--26 letters or less
        if (resetNum==0)
        {
            keyA="";
            keyB="";
        }
        tempHTML='<strong class="helvetica11pxTanB">Keyword</strong> <input type="text" id="key_a" maxlength="26" class="form_field11px" style="width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onchange="checkKeyAdmin(); return false;" onkeyup="checkKeyAdmin(); return false;" autocapitalize="off" autocorrect="off" />';
    }
    else if (num==7)
    {
        //your_own_message
        if (resetNum==0)
        {
            keyA="";
            keyB="";
        }
        tempHTML='<strong class="helvetica11pxTanB">Keyword or Other<br />info to Display:</strong><br /><input type="text" id="key_a" maxlength="26" class="form_field11px" style="margin-top:2px; width:99px; height:12px; text-align:right; color:#000000;" value="'+keyA+'" onkeyup="checkKeyAdmin(); return false;" autocapitalize="off" autocorrect="off" />';
    }
		
    if (num>0)
    {
        if (num!=15)
        {
            document.getElementById('keys').innerHTML=tempHTML;
            document.getElementById('keys').style.display="block";
            if ((num==2 || num==5) && !isNaN(keyA) && keyA!="")
            {
                //update select field
                if (num==2)
                {
                    $("#key_a").val( keyA );
                    //document.getElementById('key_a').selectedIndex=keyA;
                    //document.getElementById('option_mult'+keyA).selected=true;
                }
                else
                {
                    for (i=1; i<odd_nums_prime26.length; i++)
                    {
                        if (keyA*1==odd_nums_prime26[i])
                        {
                            $("#key_a").val( keyA );
//                            document.getElementById('key_a').selectedIndex=i;
//                            document.getElementById('option_mult'+i).selected=true;
                            break;
                        }
                    }
                }
            }
        }
        else
        {
            document.getElementById('keys').style.display="none";
        }
    }
    else
    {
        document.getElementById('keys').innerHTML='';
        document.getElementById('keys').style.display="none";
    }
}
	
function checkKey()
{
    if (cipher_num==1)
    {
        //additive
        if (isNaN(document.formContainer['key_a'].value*1) || (document.formContainer['key_a'].value*1)>25 || (document.formContainer['key_a'].value*1)<0)
        {
            keyA="";
            document.formContainer['key_a'].value="";
        }
        else
        {
            document.formContainer['key_a'].value=document.formContainer['key_a'].value*1;
            keyA=document.formContainer['key_a'].value;
        }
    }
    else if (cipher_num==2)
    {
        //affine
        if (document.formContainer['key_a'].value!=0)
        {
            keyA=document.formContainer['key_a'].value;
        }
        else
        {
            keyA=0;
        }
			
        if (isNaN(document.formContainer['key_b'].value*1) || document.formContainer['key_b'].value=="")
        {
            keyB="";
            document.formContainer['key_b'].value=keyB;
        }
        else
        {
            document.formContainer['key_b'].value=document.formContainer['key_b'].value*1;
            keyB=document.formContainer['key_b'].value;
        }
    }
    else if (cipher_num==3)
    {
        //caesar
        if (isNaN(document.formContainer['key_a'].value*1) || (document.formContainer['key_a'].value*1)>25 || (document.formContainer['key_a'].value*1)<0)
        {
            keyA="";
            document.formContainer['key_a'].value=keyA;
        }
        else
        {
            document.formContainer['key_a'].value=document.formContainer['key_a'].value*1;
            keyA=document.formContainer['key_a'].value;
        }
    }
    else if (cipher_num==4)
    {
        //keyword and keyletter
        document.formContainer['key_a'].value=document.formContainer['key_a'].value.toUpperCase();
        tempText=document.formContainer['key_a'].value;
		
        keyA="";
        for (m=0; m<document.formContainer['key_a'].value.length; m++)
        {
            if (alpha_chars.toUpperCase().indexOf(tempText.charAt(m))==-1)
            {
                //numbers/special characters not allowed
                document.formContainer['key_a'].value=keyA;
                break;
            }
            if (m==document.formContainer['key_a'].value.length-1)
            {
                if (document.formContainer['key_a'].value=="")
                {
                    document.formContainer['key_a'].value=keyA;
                }
                else
                {
                    keyA=document.formContainer['key_a'].value;
                }
            }
        }
			
        document.formContainer['key_b'].value=document.formContainer['key_b'].value.toLowerCase();
        tempText=document.formContainer['key_b'].value;
		
        keyB="";
        if (document.formContainer['key_b'].value=="" || alpha_chars.toLowerCase().indexOf(tempText)==-1)
        {
            document.formContainer['key_b'].value=keyB;
        }
        else
        {
            keyB=document.formContainer['key_b'].value;
        }
    }
    else if (cipher_num==5)
    {
        //letter to number
        if (isNaN(document.formContainer['key_a'].value*1) || (document.formContainer['key_a'].value*1)>25 || (document.formContainer['key_a'].value*1)<0)
        {
            keyA=0;
            document.formContainer['key_a'].value=keyA;
        }
        else
        {
            document.formContainer['key_a'].value=document.formContainer['key_a'].value*1;
            keyA=document.formContainer['key_a'].value*1;
        }
    }
    else if (cipher_num==6)
    {
        if (document.formContainer['key_a'].value!=0)
        {
            keyA=document.formContainer['key_a'].value;
        }
        else
        {
            keyA=0;
        }
    }
    else if (cipher_num==7)
    {
        document.formContainer['key_a'].value=document.formContainer['key_a'].value.toUpperCase();
        tempText=document.formContainer['key_a'].value;
        keyA="";
        for (m=0; m<document.formContainer['key_a'].value.length; m++)
        {
            if (alpha_chars.toUpperCase().indexOf(tempText.charAt(m))==-1)
            {
                //numbers/special characters not allowed
                document.formContainer['key_a'].value=keyA;
                break;
            }
            if (m==document.formContainer['key_a'].value.length-1)
            {
                if (document.formContainer['key_a'].value=="")
                {
                    document.formContainer['key_a'].value=keyA;
                }
                else
                {
                    keyA=document.formContainer['key_a'].value;
                }
            }
        }
    }
    else if (cipher_num==8)
    {
        //your own cipher
        keyA=document.formContainer['key_a'].value;
    }
}

function checkKeyAdmin()
{
    if (cipher_num==1)
    {
        //additive
        if (isNaN(document.formContainer['key_a'].value*1) || (document.formContainer['key_a'].value*1)>25 || (document.formContainer['key_a'].value*1)<0)
        {
            keyA="";
            document.formContainer['key_a'].value="";
        }
        else
        {
            document.formContainer['key_a'].value=document.formContainer['key_a'].value*1;
            keyA=document.formContainer['key_a'].value;
        }
    }
    else if (cipher_num==2)
    {
        //affine
        if (document.formContainer['key_a'].value!=0)
        {
            keyA=document.formContainer['key_a'].value;
        }
        else
        {
            keyA=0;
        }
			
        if (isNaN(document.formContainer['key_b'].value*1) || document.formContainer['key_b'].value=="")
        {
            keyB="";
            document.formContainer['key_b'].value=keyB;
        }
        else
        {
            document.formContainer['key_b'].value=document.formContainer['key_b'].value*1;
            keyB=document.formContainer['key_b'].value;
        }
    }
    else if (cipher_num==3)
    {
        //caesar
        if (isNaN(document.formContainer['key_a'].value*1) || (document.formContainer['key_a'].value*1)>25 || (document.formContainer['key_a'].value*1)<0)
        {
            keyA="";
            document.formContainer['key_a'].value=keyA;
        }
        else
        {
            document.formContainer['key_a'].value=document.formContainer['key_a'].value*1;
            keyA=document.formContainer['key_a'].value;
        }
    }
    else if (cipher_num==4)
    {
        //keyword and keyletter
        document.formContainer['key_a'].value=document.formContainer['key_a'].value.toUpperCase();
        tempText=document.formContainer['key_a'].value;
		
        keyA="";
        for (m=0; m<document.formContainer['key_a'].value.length; m++)
        {
            if (alpha_chars.toUpperCase().indexOf(tempText.charAt(m))==-1)
            {
                //numbers/special characters not allowed
                document.formContainer['key_a'].value=keyA;
                break;
            }
            if (m==document.formContainer['key_a'].value.length-1)
            {
                if (document.formContainer['key_a'].value=="")
                {
                    document.formContainer['key_a'].value=keyA;
                }
                else
                {
                    keyA=document.formContainer['key_a'].value;
                }
            }
        }
			
        document.formContainer['key_b'].value=document.formContainer['key_b'].value.toLowerCase();
        tempText=document.formContainer['key_b'].value;
		
        keyB="";
        if (document.formContainer['key_b'].value=="" || alpha_chars.toLowerCase().indexOf(tempText)==-1)
        {
            document.formContainer['key_b'].value=keyB;
        }
        else
        {
            keyB=document.formContainer['key_b'].value;
        }
    }
    else if (cipher_num==5)
    {
        if (document.formContainer['key_a'].value!=0)
        {
            keyA=document.formContainer['key_a'].value;
        }
        else
        {
            keyA=0;
        }
    }
    else if (cipher_num==6)
    {
        document.formContainer['key_a'].value=document.formContainer['key_a'].value.toUpperCase();
        tempText=document.formContainer['key_a'].value;
        keyA="";
        for (m=0; m<document.formContainer['key_a'].value.length; m++)
        {
            if (alpha_chars.toUpperCase().indexOf(tempText.charAt(m))==-1)
            {
                //numbers/special characters not allowed
                document.formContainer['key_a'].value=keyA;
                break;
            }
            if (m==document.formContainer['key_a'].value.length-1)
            {
                if (document.formContainer['key_a'].value=="")
                {
                    document.formContainer['key_a'].value=keyA;
                }
                else
                {
                    keyA=document.formContainer['key_a'].value;
                }
            }
        }
    }
    else if (cipher_num==7)
    {
        //your own cipher
        keyA=document.formContainer['key_a'].value;
    }
}
	
function encryptText(plaintext,cipher)
{
    cipher_text="";
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
        startNum=keyA*1;
		
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
        mult_num=keyA*1;
        plus_num=keyB*1;
		
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
        startNum=keyA*1;
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
        currWord=keyA;
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
        currLoc=alpha_chars_up.indexOf(keyB.toUpperCase())+1;
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
        startNum=keyA*1;
		
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
        startNum=keyA*1;
		
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
        saved_keyword=keyA;
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
        //may change to unknown cipher
        saved_keyword=keyA;
    }
	
    if (cipher==2 || cipher==3 || cipher==4 || cipher==6 || cipher==7)
    {
        num_added=1;
    }
    else if (cipher<8)
    {
        num_added=3;
    }
	
    if (cipher<8)
    {
        cipher_text="";
        for (j=0; j<array_cipher.length; j++)
        {
            if (j>0)
            {
                if (array_cipher[j].charAt(0)=="(" && array_cipher[j].charAt(1)==")")
                {
                    cipher_text+=array_cipher[j];
                }
                else
                {
                    //space between words
                    if (num_added==1)
                    {
                        cipher_text+="&#0160;"+array_cipher[j];
                    }
                    else
                    {
                        cipher_text+="&#0160;&#0160;&#0160;&#0160;"+array_cipher[j];
                    }
                }
            }
            else
            {
                cipher_text+=array_cipher[j];
            }
        }
    }
    temp_ciphertext=cipher_text.split('()').join('\n');
    cipher_text=temp_ciphertext.split('&#0160;').join(' ');
	
    return cipher_text;
}

function encryptTextAdmin(plaintext,cipher)
{
    cipher_text="";
    if (cipher<7)
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
        startNum=keyA*1;
		
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
				if (k==0)
					{
                    temp_string+=tempText.charAt(k);
					}
				else
					{
					temp_string+=" "+tempText.charAt(k);
					}
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
        mult_num=keyA*1;
        plus_num=keyB*1;
		
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
        startNum=keyA*1;
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
        currWord=keyA;
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
        currLoc=alpha_chars_up.indexOf(keyB.toUpperCase())+1;
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
        //multiplicative
        startNum=keyA*1;
		
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
    else if (cipher==6)
    {
        //vigenere:uses keyword repeated above every character to be encrypted
        saved_keyword=keyA;
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
    else if (cipher==7)
    {
        //add in user's plain text/cipher text
        //may change to unknown cipher
        saved_keyword=keyA;
    }
	
    if (cipher==2 || cipher==3 || cipher==4 || cipher==5 || cipher==6)
    {
        num_added=1;
    }
    else if (cipher<7)
    {
        num_added=3;
    }
	
    if (cipher<7)
    {
        cipher_text="";
        for (j=0; j<array_cipher.length; j++)
        {
            if (j>0)
            {
                if (array_cipher[j].charAt(0)=="(" && array_cipher[j].charAt(1)==")")
                {
                    cipher_text+=array_cipher[j];
                }
                else
                {
                    //space between words
                    if (num_added==1)
                    {
                        cipher_text+="&#0160;"+array_cipher[j];
                    }
                    else
                    {
                        cipher_text+="&#0160;&#0160;&#0160;&#0160;"+array_cipher[j];
                    }
                }
            }
            else
            {
                cipher_text+=array_cipher[j];
            }
        }
    }//issue possibly fixed with addition of split('( )').join('');
    temp_ciphertext=cipher_text.split('()').join('\n').split('( )').join('');
    cipher_text=temp_ciphertext.split('&#0160;').join(' ');
	//alert(cipher_text);
	
    return cipher_text;
}

function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}
	
function closeCopy()
{
    if (document.getElementById)
    {
        document.getElementById("popup_copy").style.visibility='hidden';
    }
}
	
var isMobile=navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|WebOS)/);

function resetCiphertext()
{
    getCiphertext(currCiphertext);
}