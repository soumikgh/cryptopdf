You've created a group called "<b><?php echo $groupName ?></b>" The Group ID is <b><?php echo $groupId ?></b> and the password is <b><?php echo $password ?></b>. To invite others to join this group, you can:<br />
<br />
Send them to the <a href="/groups/?action=joinGroup&amp;groupId=<?php echo $groupId ?>">Join Group</a> page with this information<br />
<br />
OR<br />
<br />
<a href="/groups/?action=sendEmail&amp;groupId=<?php echo $groupId ?>">Send them an email</a>, which will contain a link to join the group.<br />