<?php

/*
 * @property Group_model $group_model
 */

class Groups {

    private $userId;
    private $db;

    function __construct($db, $userId = null, $groupId = null) {
        $this->db = $db;

        if (isset($userId) && is_numeric($userId)) {
            $this->userId = $userId;
        } else {
            $this->userId = false;
        }

        if (isset($groupId) && is_numeric($groupId)) {
            $this->groupId = $groupId;
        } else {
            $this->groupId = false;
        }
        $this->group_model = new Group_model($this->db);
        $this->user_model = new User_model($this->db);
        $this->message_model = new Message_model($this->db);
        $this->jokemessage_model = new Jokemessage_model($this->db);
        $this->tools_model = new Tool_model($this->db);
        $this->game_model = new Game_model($this->db);
    }

    function displayOwnersGroups($userId) {
        $data['groups'] = $this->group_model->get_groups_by_owner_id($userId);

        return load_view('groups/list', $data);
    }

    public function displayGroupsUserIn($userId) {
        $data['groups'] = $this->group_model->get_groups_by_user_id($userId);
        
        return load_view('groups/belong_groups', $data);
    }

    function displayUserGroups($type = null) {
        $data['groups'] = $this->group_model->get_groups_by_user_id($this->userId);
        
        return load_view('groups/list', $data);
    }

    function editGroupForm($action, $groupId) {
        if ($this->group_model->is_group_owner($this->userId, $groupId)) {
            $form = $this->_groupForm($action);
            $group = $this->group_model->get_group($groupId);

            $form->addElement('hidden', 'groupId', array('value' => $group['id']));

            $form->addDataSource(new HTML_QuickForm2_DataSource_Array(array(
                        'groupName' => $group['group_name'],
                        'password' => rc4(base64_decode($group['password'])))));

            $renderer = HTML_QuickForm2_Renderer::factory('default');
            if ($form->validate()) {

                $groupId = $this->group_model->update_group($groupId, $_REQUEST['groupName'], $_REQUEST['password']);

                header("location: /groups/?action=list");
                exit;
            }

            $defaultTemplate = load_view('forms/register_default');
            $renderer = HTML_QuickForm2_Renderer::factory('default');
            $renderer->setTemplateForClass('HTML_QuickForm2_Element_Input', $defaultTemplate);

            $html = $form->render($renderer);

            return $html;
        } else {
            setMsg('You cannot edit this group', 'error');
            header("location: /groups/?action=list");
            exit;
        }
    }

    function createGroupForm($action) {
        $form = $this->_groupForm($action);

        if ($form->validate()) {
            $groupId = $this->group_model->create_group($this->userId, $_REQUEST['groupName'], $_REQUEST['password']);

            $this->group_model->add_user_to_group(getUserId(), $groupId);

            setMsg(load_view('groups/new_group_msg', array('groupName' => $_REQUEST['groupName'], 'groupId' => $groupId, 'password' => $_REQUEST['password'])), 'success');
            header("location: /groups/?action=list");
            exit;
        }
        $defaultTemplate = load_view('forms/register_default');

        $renderer = HTML_QuickForm2_Renderer::factory('default');
        $renderer->setTemplateForClass('HTML_QuickForm2_Element_Input', $defaultTemplate);

        $html = $form->render($renderer);

        return $html;
    }

    public function _groupForm($action) {
        $form = new HTML_QuickForm2('groupForm');

        $form->addElement('hidden', 'action', array('value' => $action));

        $groupName = $form->addElement('text', 'groupName');
        $groupName->setLabel('Group Name:');
        $groupName->addRule('required', 'Group Name Required');

//        $accessId = $form->addElement( 'text', 'accessId' )->setLabel( 'Access ID:' );
//        $accessId->addRule( 'callback', 'Duplicate Access Id', array( &$this, 'doesAccessIdExist' ) );
//        $accessId->addRule( 'required', 'Access ID required' );


        $password = $form->addElement('text', 'password')->setLabel('Password:');
        $password->addRule('required', 'Password required');

        $submit = $form->addElement('submit', 'submitForm', array('value' => 'Create Group'));


        return $form;
    }

    function doesAccessIdExist($accessId, $groupId = null) {
        $value = $this->group_model->does_access_id_exist($accessId);
        return !$value;
    }

    function joinGroupForm($groupId = null) {
        $form = new HTML_QuickForm2('joinGroupForm');

        $form->addElement('hidden', 'action', array('value' => 'joinGroup'));

        $form->addStatic('header')->setTagName('h3')->setContent('Join Group');

        $group = $form->addElement('text', 'groupId')->setLabel('Group ID:');
        $group->addRule('required', 'Group ID required');

        if (!empty($groupId)) {
            $group->setValue($groupId);
        }

        $pass = $form->addElement('text', 'password')->setLabel('Group Password:');
        $pass->addRule('required', 'Password required');

        $form->addElement('submit', 'submitForm', array('value' => 'Join'));

        if ($form->validate()) {
            if ($this->group_model->validate_group($groupId, $_REQUEST['password'])) {

                $this->group_model->add_user_to_group(getUserId(), $_REQUEST['groupId']);
                setMsg('Joined group', 'success');

                header("location: /profile.php");
                exit;
            } else {
                setMsg('Invalid login', 'error');
                header("location: /groups/?action=joinGroup&groupId=" . $groupId);
                exit;
            }
        }

        $defaultTemplate = load_view('forms/register_default');

        $renderer = HTML_QuickForm2_Renderer::factory('default');
        $renderer->setTemplateForClass('HTML_QuickForm2_Element_Input', $defaultTemplate);

        $html = $form->render($renderer);

        return $html;
    }

    function deleteGroup($groupId) {
        if ($this->group_model->is_group_owner(getUserId(), $groupId)) {
            if ($this->group_model->delete_group($this->userId, $groupId)) {
                setMsg('Group Deleted', 'success');
            } else {
                setMsg('Unable to delete group', 'error');
            }
        } else {
            setMsg('You are not the owner of this group', 'error');
        }

        header("location: /groups/?action=list");
        exit;
    }

    function displayGroupUsers($groupId) {
        $data['group'] = new Group($this->db, $groupId);
        $data['users'] = $this->group_model->get_users($groupId);
        $data['currentUserIsAdmin'] = $this->group_model->is_group_admin(getUserId(), $groupId);

        return load_view('groups/users', $data);
    }

    function removeUserFromGroup($userId, $groupId) {
        if ($this->group_model->is_group_owner(getUserId(), $groupId)) {
            $this->group_model->remove_user_from_group($userId, $groupId);
            setMsg('User removed', 'success');
        } else {
            setMsg('You can only manage your own groups', 'error');
        }
    }

    public function inviteUsersToGroup() {
        $form = new HTML_QuickForm2('sendEmail');

        $form->addElement('hidden', 'action', array('value' => 'sendEmail'));
        $form->addElement('hidden', 'groupId', array('value' => $_REQUEST['groupId']));

        $form->addStatic('header')->setTagName('h3')->setContent('Send Email');
        $form->addStatic('header')->setTagName('p')->setContent(msg('join-group'));
        $form->addElement('textarea', 'emails', array('rows' => '10', 'cols' => '50'))->setLabel('Emails');

        $form->addElement('submit', 'submitForm');

        if ($form->validate()) {
            $totalSent = $this->sendEmails($_REQUEST['emails'], $_REQUEST['groupId']);
            setMsg($totalSent . ' users invited', 'success');
            header("location: /groups/?action=list");
            exit;
        }

        $defaultTemplate = load_view('forms/register_default');

        $renderer = HTML_QuickForm2_Renderer::factory('default');
        $renderer->setTemplateForClass('HTML_QuickForm2_Element_Input', $defaultTemplate);

        $html = $form->render($renderer);

        return $html;
    }

    /**
     *
     * @param string $emails
     */
    private function sendEmails($emails, $groupId) {
        $group = new Group($this->db, $groupId);
        $eEmails = explode(PHP_EOL, $emails);

        $eEmails = array_unique($eEmails, SORT_STRING);

        if (is_array($eEmails)) {
            foreach ($eEmails as $email) {
                $message = msg('group-invite-email-body');
                $message = str_replace('[username]', getUsername(), $message);
                $message = str_replace('[groupname]', $group->groupName, $message);
                $message = str_replace('[link]', $group->joinUrl, $message);
                $subject = msg('group-invite-email-subject');

                $totalSent = 0;
                if (check_email($email)) {
                    mail($email, $subject, $message);
                    $totalSent++;
                }
            }
        }

        return $totalSent;
    }

    public function displayGroupUser($ownerId, $userId, $groupId) {
        $ciphers = new Cipher_model($this->db);

        $userData = array();

        if ($this->group_model->user_in_owner_group($ownerId, $userId)) {
            // @TODO: replace this call with instantiating a user object
            $userData = $this->user_model->getUser($userId);
            $userData['groupId'] = $groupId;


//        $userData['games'] = $this->game_model->get_all_user_game_data( $userId );
            $messages = $this->message_model->get_all_user_message_data($userId);

            foreach ($messages as $key => $message) {
                if ($key != 'totalCompleted' && $key != 'totalPoints') {
                    if (empty($userData['messages'][$key])) {
                        $userData['messages'][$key] = array('total' => 0);
                    }
                    foreach ($message as $difficulty) {
                        $userData['messages'][$key]['total'] += $difficulty['total'];
                    }
                }
            }


            $jokes = $this->jokemessage_model->get_all_user_message_data($userId);

            foreach ($jokes as $key => $joke) {
                if ($key != 'totalCompleted' && $key != 'totalPoints') {
                    if (empty($userData['jokes'][$key])) {
                        $userData['jokes'][$key] = array('total' => 0);
                    }

                    $userData['jokes'][$key]['total'] += $joke['total'];
                }
            }
            $tools = $this->tools_model->get_user_completed($userId);

            foreach ($tools as $key => $tool) {
                if ($key != 'totalCompleted' && $key != 'totalPoints') {
                    if (empty($userData['tools'][$key])) {
                        $userData['tools'][$key] = array('total' => 0);
                    }
                    foreach ($tool as $difficulty) {
                        $userData['tools'][$key]['total'] += $difficulty['total'];
                    }
                }
            }

            $userData['ciphers'] = $ciphers->get_ciphers(false);
            
            $userData['valid']= true;
        } else {
            $userData['valid'] = false;
        }
        
        return load_view('groups/user_profile', $userData);
    }

    public function activateGroupBoard($userId, $groupId) {
        $group = new Group($this->db, $groupId);
        $form = new HTML_QuickForm2('sendEmail');

        $form->addElement('hidden', 'action', array('value' => 'activate'));
        $form->addElement('hidden', 'groupId', array('value' => $groupId));

        $form->addStatic('header')->setTagName('h3')->setContent('Activate ' . $group->groupName . ' Message Board');
        $form->addStatic('header')->setTagName('p')->setContent(msg('activate-group'));
        $fname = $form->addElement('text', 'fname', array('rows' => '10', 'cols' => '50'))->setLabel('First Name:');
        $fname->addRule('required', 'First name required');

        $lname = $form->addElement('text', 'lname', array('rows' => '10', 'cols' => '50'))->setLabel('Last Name:');
        $lname->addRule('required', 'Last name required');

        $school = $form->addElement('text', 'school_name', array('rows' => '10', 'cols' => '50'))->setLabel('School Name:');
        $school->addRule('required', 'School name required');

        $classroom = $form->addElement('text', 'classroom_name', array('rows' => '10', 'cols' => '50'))->setLabel('Classroom Name:');
        $classroom->addRule('required', 'Classroom name required');

        $phone = $form->addElement('text', 'phone', array('rows' => '10', 'cols' => '50'))->setLabel('Phone:');
        $phone->addRule('required', 'Phone required');

        $email = $form->addElement('text', 'email', array('rows' => '10', 'cols' => '50'))->setLabel('Email:');
        $email->addRule('required', 'Email required');

        $form->addElement('submit', 'submitForm', array('value' => 'Activate Group'));

        if ($form->validate()) {

            $this->group_model->activate_group(getUserId(), $groupId, $_REQUEST['fname'], $_REQUEST['lname'], $_REQUEST['school_name'], $_REQUEST['classroom_name'], $_REQUEST['phone'], $_REQUEST['email']);

            header("location: /groups/?action=list");
            exit;
        }

        $defaultTemplate = load_view('forms/register_default');

        $renderer = HTML_QuickForm2_Renderer::factory('default');
        $renderer->setTemplateForClass('HTML_QuickForm2_Element_Input', $defaultTemplate);

        $html = $form->render($renderer);

        return $html;
    }

    /**
     * Displays groups for admin
     */
    public function displayGroups() {
        $data = array();
        $data['groups'] = $this->group_model->get_groups();

        return load_view('admin/groups', $data);
    }

    public function displayGroupStats($ownerId, $groupId) {
        $ciphers = new Cipher_model($this->db);

        $userData = array();

//        if ($this->group_model->is_group_admin($ownerId, $groupId)) {
        if (true) {
            $users = $this->group_model->get_users($groupId);

            foreach ($users as $user) {

                $userData['users'][$user['user_id']] = $user;
                $userData['group_id'] = $groupId;

//        $userData['games'] = $this->game_model->get_all_user_game_data( $userId );
                $messages = $this->message_model->get_all_user_message_data($user['user_id']);

                foreach ($messages as $key => $message) {
                    if ($key != 'totalCompleted' && $key != 'totalPoints') {
                        if (empty($userData['users'][$user['user_id']]['messages'][$key])) {
                            $userData['users'][$user['user_id']]['messages'][$key] = array('total' => 0);
                        }
                        foreach ($message as $difficulty) {
                            $userData['users'][$user['user_id']]['messages'][$key]['total'] += $difficulty['total'];
                        }
                    }
                }


                $jokes = $this->jokemessage_model->get_all_user_message_data($user['user_id']);

                foreach ($jokes as $key => $joke) {
                    if ($key != 'totalCompleted' && $key != 'totalPoints') {
                        if (empty($userData['users'][$user['user_id']]['jokes'][$key])) {
                            $userData['users'][$user['user_id']]['jokes'][$key] = array('total' => 0);
                        }

                        $userData['users'][$user['user_id']]['jokes'][$key]['total'] += $joke['total'];
                    }
                }
                $tools = $this->tools_model->get_user_completed($user['user_id']);

                foreach ($tools as $key => $tool) {
                    if ($key != 'totalCompleted' && $key != 'totalPoints') {
                        if (empty($userData[$user['user_id']]['tools'][$key])) {
                            $userData['users'][$user['user_id']]['tools'][$key] = array('total' => 0);
                        }
                        foreach ($tool as $difficulty) {
                            $userData['users'][$user['user_id']]['tools'][$key]['total'] += $difficulty['total'];
                        }
                    }
                }

                $userData['ciphers'] = $ciphers->get_ciphers(false);
            }
        } else {
            echo 'No group admin';
        }


        return load_view('groups/stats', $userData);
    }

}