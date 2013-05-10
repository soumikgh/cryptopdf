var addHTML="";
var curr_codename=0;
var field_ids=["","return_user","new_user","email_user","password","email_parent"];
var field_text=["","Your Username","UserName","MyEmail","password","ParentsEmail"];
var gender="";
var i=0;
var issueNum=0;
var join_newsletter=false;
var parent_required=false;
var password="";
var temp_codename=0;
var tempAlert="";
var tempHTML="";
var user_age=0;

var bio_images=["","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif","images/temp.gif"];
var bios=["","1 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","2 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","3 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","4 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","5 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","6 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","7 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","8 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","9 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","10 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","11 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","12 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","13 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","14 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","15 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","16 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","17 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","18 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","19 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","20 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","21 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","22 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","23 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem","24 Ut blandit erat ad ex dolor commodo sus cipit nostrud lorem"];
var codenames=["","Leonard Adleman","Al-Kindi","Ross Anderson","Charles Babbage","Leone Battista Alberti","&Eacute;tienne Bazeries","George Blakley","Julius Caesar","Rosario Candela","Joan Daemen","Whitfield Diffie","Elizebeth Friedman","Leonard Adleman","Al-Kindi","Ross Anderson","Charles Babbage","Leone Battista Alberti","&Eacute;tienne Bazeries","George Blakley","Julius Caesar","Rosario Candela","Joan Daemen","Whitfield Diffie","Elizebeth Friedman"];

/*/////////////////////
        GENERAL FIELD UPDATES
        /////////////////////*/
function resetFields()
{
    for (i=1; i<field_ids.length; i++)
    {
        //document.formContainer[field_ids[i]].value=field_text[i];
        }
    if (curr_codename==0)
    {
        tempHTML='';
        tempHTML+='<div class="floatInstrux"><a href="#" onclick="getCodenames(); return false;" onmouseover="changeImages(\'btn_choose\', \'images/btn_choose_over.gif\'); return true;" onmouseout="changeImages(\'btn_choose\', \'images/btn_choose.gif\'); return true;"><img id="btn_choose" name="btn_choose" src="images/btn_choose.gif" width="142" height="19" alt="Choose Codename" border="0" /></a></div>';
        tempHTML+='<div class="floatForm">Your codename is the name that will<br />be displayed on leaderboards and multiplayer games.</div>';
        tempHTML+='<div><br clear="left" /></div>';
    //document.getElementById('codename_instrux').innerHTML=tempHTML;
    }
    else
    {
    //setNewCodeInstrux();
    }
}
	
function setNewCodeInstrux()
{
    tempHTML='';
    tempHTML+='<div class="floatInstrux">Your Codename:</div>';
    tempHTML+='<div class="floatForm">';
    tempHTML+='	<div class="float_textL"><div class="verdana_12pxB" style="margin-top:-2px;"><em>'+codenames[curr_codename]+'</em></div></div>';
    tempHTML+='	<div class="floatL" style="padding-top:1px;"><a href="#" onclick="getCodenames(); return false;" onmouseover="changeImages(\'btn_change\', \'images/btn_change_over.gif\'); return true;" onmouseout="changeImages(\'btn_change\', \'images/btn_change.gif\'); return true;"><img id="btn_change" name="btn_change" src="images/btn_change.gif" width="71" height="19" alt="Change" border="0" /></a></div>';
    tempHTML+='</div>';
    tempHTML+='<div><br clear="left" /></div>';
    document.getElementById('codename_instrux').innerHTML=tempHTML;
}
	
function setField(object_id,num)
{
    if (object_id.value==field_text[num])
    {
        object_id.value="";
    }
}
	
/*/////////////////////
        NEW USER
        /////////////////////*/
function updateAge(object_id)
{
    user_age=object_id.value*1;
    checkShowParent();
}
	
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
        if (join_newsletter==true && user_age<13 && user_age!=0)
        {
            parent_required=true;
            document.getElementById("parents_email").style.display="block";
        }
        else
        {
            parent_required=false;
            document.getElementById("parents_email").style.display="none";
        }
    }
}
	
function acceptCodename()
{
    curr_codename=temp_codename;
    setNewCodeInstrux();
    closeCodename();
}
	
function checkSubmit()
{
    tempAlert="";
    issueNum=0;
	
    if (document.formContainer[field_ids[2]].value=="" || document.formContainer[field_ids[2]].value==" " || document.formContainer[field_ids[2]].value==field_text[2])
    {
        issueNum+=1;
        tempAlert+="--Username\n";
    }
	
    if (document.formContainer[field_ids[3]].value!="" && (document.formContainer[field_ids[3]].value.indexOf("@")==-1 || document.formContainer[field_ids[3]].value.indexOf(".")==-1 || document.formContainer[field_ids[3]].value.length<6))
    {
        issueNum+=1;
        tempAlert+="--Email\n";
    }
    if (document.formContainer[field_ids[4]].value=="" || document.formContainer[field_ids[4]].value==" " || document.formContainer[field_ids[4]].value==field_text[4])
    {
        issueNum+=1;
        tempAlert+="--Password\n";
    }
    if (user_age==0)
    {
        issueNum+=1;
        tempAlert+="--Age\n";
    }
    if (gender=="")
    {
        issueNum+=1;
        tempAlert+="--Gender\n";
    }
    if (parent_required==true && (document.formContainer[field_ids[5]].value.indexOf("@")==-1 || document.formContainer[field_ids[5]].value.indexOf(".")==-1 || document.formContainer[field_ids[5]].value.length<6))
    {
        issueNum+=1;
        tempAlert+="--Parent's Email Address\n";
    }
    if (curr_codename==0)
    {
        issueNum+=1;
        tempAlert+="--Codename\n";
    }
		
    if (issueNum>0)
    {
        alert("Please fill in the following fields:\n"+tempAlert);
    }
    else
    {
        closeCodename();
        tb_show("submit_popup","popup_submit.html?placeValuesBeforeTB_=savedValues&TB_iframe=true&width=299&height=158&modal=true");
    }
}
	
/*/////////////////////
        RETURN USER
        /////////////////////*/
function checkReturnUser()
{
    if (document.formContainer[field_ids[1]].value!="" && document.formContainer[field_ids[1]].value!=" " && document.formContainer[field_ids[1]].value!=field_text[1])
    {
        alert("verifying return username");
    }
    else
    {
        alert("Please enter your username.");
    }
}
	
window.onresize=function()
{
    document.getElementById("codename_choose").style.display="none";
}
            