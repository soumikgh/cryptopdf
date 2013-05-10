var keysA=["",2,8,11];
var keysB=["","","",12];
var cipher_points=["",75,75,75];
var ciphers=[0,3,1,2];
var ciphertext=["","GERC S KSI XIVO IRCSY MO SAA. SY LXEAK CSA YHXLI CH LIR RCS LMAA. MUIOFUOID FLKUA, ULIAFDSFF MJUDO, FDOS UF O MIUDF JI MOFJD IJ NIUDO. 1","GERC S KSI XIVO IRCSY MO SAA. SY LXEAK CSA YHXLI CH LIR RCS LMAA. MUIOFUOID FLKUA, ULIAFDSFF MJUDO, FDOS UF O MIUDF JI MOFJD IJ NIUDO. 2","GERC S KSI XIVO IRCSY MO SAA. SY LXEAK CSA YHXLI CH LIR RCS LMAA. MUIOFUOID FLKUA, ULIAFDSFF MJUDO, FDOS UF O MIUDF JI MOFJD IJ NIUDO. 3"];
var currCiphertext=0;
var currPlaintext=0;
var message_cracked=["",true,true,false];
var message_copied=["",false,false,false];
var message_id=["",1210,1211,1212];
var page_loaded=false;
var plaintext=["","testing1","testing2","testing3"];
var possible_ciphers=["","Additive","Affine","Caesar","Keyword","Multiplicative","Vigen&egrave;re"];
var tempHTML="";

function getCracked()
{
    for (i=1; i<message_cracked.length; i++)
    {
        if (message_cracked[i]==true)
        {
            getCrackedText(i);
            document.getElementById('points'+i).innerHTML=cipher_points[i];
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
    document.getElementById('points'+num).innerHTML='&#0160;';
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
        })
        },
    function(){ 
        // event handler for mouseleave 
        });
});
//some versions of ie don't like the zero clipboard, so:
window.onerror=function() {
    return true;
}
}
	
function getCiphertext(num)
{
    closePlaintext();
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
        document.getElementById('ciphertext').innerHTML=ciphertext[ciphers[num]];
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
        document.getElementById('points'+currPlaintext).innerHTML=cipher_points[currPlaintext];
        showIt('correct');
    }
    else
    {
        showIt('incorrect');
    }
}
	
function closePlaintext()
{
    if (document.getElementById)
    {
        document.getElementById("popup_plaintext").style.visibility='hidden';
    }
}