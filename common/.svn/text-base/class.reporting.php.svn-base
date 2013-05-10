<?php

/**
 * @property User_model $user_model
 * @property Login_model $login_model
 * @property Message_model $message_model
 * @property Jokemessage_model $joke_model
 * @property Group_model $group_model
 * @property Tool_model $tool_model
 */
class Reporting
{

    function __construct($db)
    {
        $this->db = $db;
        $this->user_model = new User_model($this->db);
        $this->login_model = new Login_model($this->db);
        $this->message_model = new Message_model($this->db);
        $this->joke_model = new Jokemessage_model($this->db);
        $this->group_model = new Group_model($this->db);
        $this->tool_model = new Tool_model($this->db);
    }

    function startDownload( $fileName = 'file.csv')
    {
        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=file.csv");
        header("Pragma: no-cache");
        header("Expires: 0");

        readfile( WWWROOT_PATH . "admin/" . $fileName );

    }

    public function processReporting($options)
    {
        $fp = fopen('file.csv', 'w');

        $users = $this->user_model->getUsers();

        $headers = array_flip($options);

        $headers = array_map('STRTOUPPER', $headers);

        fputcsv($fp, $headers);

        foreach ($users as $user) {

            $line = array();
            foreach ($options as $key => $value) {
                switch ($key) {
                    case "username":
                        $line[] = $this->getUsername($user);
                        break;
                    case "id":
                        $line[] = $this->getUserId($user);
                        break;
                    case "email":
                        $line[] = $this->getEmail($user);
                        break;
                    case "age":
                        $line[] = $this->getAge($user);
                        break;
                    case "grade":
//                        $line[] = $this->getGrade( $user );
                        $line[] = ' ';
                        break;
                    case "gender":
                        $line[] = $this->getGender($user);
                        break;
                    case "newsletter":
                        $line[] = $this->getNewsletterStatus($user);
                        break;
                    case "codenamep":
                        $line[] = $this->getCodename($user);
                        break;
                    case "codenamec":
                        $line[] = $this->getCodename($user, 'cipher');
                        break;
                    case "codenamecipher":
                        $line[] = '';
                        break;
                    case "session":
                        $line[] = $this->getUserSessions($user['user_id']);
                        break;
                    case "registered":
                        $line[] = $this->getRegisteredDate($user);
                        break;
                    case "lastVisit":
                        $line[] = $this->getLastLogin($user['user_id']);
                        break;
                    case "numVisits":
                        $line[] = $this->getNumLogins($user['user_id']);
                        break;
                    case "duration":
                        $line[] = $this->getDurations($user['user_id']);
                        break;
                    case "start":
                        $line[] = $this->getStartOfSession($user['user_id']);
                        break;
                    case "totalPoints":
                        $line[] = $this->getTotalPoints($user['user_id']);
                        break;
                    case "caesarEasy":
                    case "caesarMedium":
                    case "caesarHard":
                    case "caesarExpert":
                    case "caesarInsane":
                    case "keywordEasy":
                    case "keywordMedium":
                    case "keywordHard":
                    case "keywordExpert":
                    case "keywordInsane":
                    case "additiveEasy":
                    case "additiveMedium":
                    case "additiveHard":
                    case "additiveExpert":
                    case "additiveInsane":
                    case "multiplicativeEasy":
                    case "multiplicativeMedium":
                    case "multiplicativeHard":
                    case "multiplicativeExpert":
                    case "multiplicativeInsane":
                    case "affineEasy":
                    case "affineMedium":
                    case "affineHard":
                    case "affineExpert":
                    case "affineInsane":
                    case "vigenereEasy":
                    case "vigenereMedium":
                    case "vigenereHard":
                    case "vigenereExpert":
                    case "vigenereInsane":
                        $line[] = $this->getMessageTotals($user['user_id'], $key);
                        break;
                    case "caesarJoke":
                    case "keywordJoke":
                    case "additiveJoke":
                    case "multiplicativeJoke":
                    case "affineJoke":
                    case "vigenereJoke":
                        $line[] = $this->getJokeTotals($user['user_id'], $key);
                        break;
                    case "caesarPrivateEasy":
                    case "caesarPrivateMedium":
                    case "caesarPrivateHard":
                    case "caesarPrivateExpert":
                    case "caesarPrivateInsane":
                    case "keywordPrivateEasy":
                    case "keywordPrivateMedium":
                    case "keywordPrivateHard":
                    case "keywordPrivateExpert":
                    case "keywordPrivateInsane":
                    case "additivePrivateEasy":
                    case "additivePrivateMedium":
                    case "additivePrivateHard":
                    case "additivePrivateExpert":
                    case "additivePrivateInsane":
                    case "multiplicativePrivateEasy":
                    case "multiplicativePrivateMedium":
                    case "multiplicativePrivateHard":
                    case "multiplicativePrivateExpert":
                    case "multiplicativePrivateInsane":
                    case "affinePrivateEasy":
                    case "affinePrivateMedium":
                    case "affinePrivateHard":
                    case "affinePrivateExpert":
                    case "affinePrivateInsane":
                    case "vigenerePrivateEasy":
                    case "vigenerePrivateMedium":
                    case "vigenerePrivateHard":
                    case "vigenerePrivateExpert":
                    case "vigenerePrivateInsane":
                        $line[] = $this->getGroupTotals($user['user_id'], $key);
                        break;
                    case "caesarEncryptTool":
                    case "letterEncryptTool":
                    case "additiveEncryptTool":
                    case "keywordEncryptTool":
                    case "multiplicativeEncryptTool":
                    case "affineEncryptTool":
                    case "vigenereEncryptTool":
                    case "substitutionEncryptTool":
                    case "caesarDecryptTool":
                    case "letterDecryptTool":
                    case "additiveDecryptTool":
                    case "keywordDecryptTool":
                    case "multiplicativeDecryptTool":
                    case "affineDecryptTool":
                    case "vigenereDecryptTool":
                    case "substitutionDecryptTool":
                        $line[] = $this->getToolTotals($user['user_id'], $key);
                        break;
                    case "missionDepart":
                        break;
                    default:
                        exit($key);
                        break;
                }
            }

            fputcsv($fp, $line);
        }

        $this->startDownload();
    }

    public function getUsername($user)
    {
        return $user['username'];
    }

    public function getUserId($user)
    {
        return $user['user_id'];
    }

    public function getAge($user)
    {
        return $user['age'];
    }

    public function getGender($user)
    {
        return $user['gender'];
    }

    public function getNewsletterStatus($user)
    {
        return $user['confirmed'] == 1 ? 'yes' : 'no';
    }

    public function getCodename($user, $type = 'plain')
    {
        return $type == 'plain' ? $user['codename'] . '-' . $user['codename_counter'] : $user['encrypted_codename'] . '-' . $user['codename_counter'];
    }

    public function getRegisteredDate($user)
    {
        return $user['created_on'];
    }

    public function getLastLogin($userId)
    {
        return $this->login_model->getLastLogin($userId);
    }

    public function getNumLogins($userId)
    {
        return $this->login_model->getNumLogins($userId);
    }

    public function getDurations($userId)
    {
        $durations = $this->login_model->getDurationOfEachSession($userId);

        if (is_array($durations) && count($durations) > 0) {
            $strings = array();
            foreach ($durations as $duration) {
                if (!empty($duration)) {
                    $to_time = strtotime($duration['updated_on']);
                    $from_time = strtotime($duration['created_on']);

                    $strings[] = round(abs($to_time - $from_time) / 60, 2);
                }
            }
        }

        if (!empty($strings) && count($strings) > 0)
            $strings = implode(',', $strings);

        return $strings;
    }

    public function getStartOfSession($userId)
    {
        $starts = $this->login_model->getStartOfEachSession($userId);

        if (is_array($starts) && count($starts) > 0) {
            $strings = array();
            foreach ($starts as $start) {
                $strings[] = $start['created_on'];
            }
        }

        if (!empty($strings) && count($strings) > 0)
            $strings = implode(',', $strings);

        return $strings;
    }

    private function getEmail($user)
    {
        return $user['email'];
    }

    private function getGrade($user)
    {
        return $user['grade'];
    }

    private function getUserSessions($userId)
    {
        $sessions = $this->user_model->get_user_sessions($userId);

        $string = '';

        if (!empty($sessions) && is_array($sessions)) {
            $i = 0;
            foreach ($sessions as $session) {
                $string .= $i > 0 ? ',' : '';
                $string .= '"' . $session['created_on'] . '"';
                $i++;
            }
        }

        return $string;
    }

    private function getTotalPoints($userId)
    {
        $user = new User($this->db, $userId);

        return $user->displayTotalPoints();
    }

    /** @TODO check that it is returning correct information */
    private function getMessageTotals($userId, $key)
    {
        // $line[] = $this->getTotalCipher( $cipherName, $difficulty );
        if (empty($this->messageData[$userId])) {
            $this->messageData[$userId] = $this->message_model->get_all_user_message_data($userId);
        }

        $pieces = preg_split('/(Easy|Medium|Hard|Expert|Insane)/i', $key, -1, PREG_SPLIT_DELIM_CAPTURE);

        return $this->messageData[$userId][ucfirst($pieces['0'])][strtolower($pieces['1'])]['total'];
    }

    private function getJokeTotals($userId, $key)
    {
        if (empty($this->jokeMessageData[$userId])) {
            $this->jokeMessageData[$userId] = $this->joke_model->get_all_user_message_data($userId);
        }

        $pieces = preg_split('/(Joke)/i', $key, -1, PREG_SPLIT_DELIM_CAPTURE);


        return $this->jokeMessageData[$userId][ucfirst($pieces['0'])]['total'];
    }

    private function getGroupTotals($userId, $key)
    {
        if( empty( $this->groupMessageData ) ){
            $this->groupMessageData = array();
        }

        $groups = $this->group_model->get_groups_by_user_id($userId);
        $ownerGroups = $this->group_model->get_groups_by_owner_id($userId);

        $tmpGroups = array_merge($groups, $ownerGroups);
        $tmpKey = str_ireplace('Private', '', $key);
        $pieces = preg_split('/(Easy|Medium|Hard|Expert|Insane)/i', $tmpKey, -1, PREG_SPLIT_DELIM_CAPTURE);

        if (empty($this->groupMessageData[$userId])) {

            foreach ($tmpGroups as $group) {
                $data = $this->message_model->get_all_user_message_data($userId, $group['id']);

                foreach ($data as $cipherName => $totals) {
                    if ($cipherName != 'totalCompleted' && $cipherName != 'totalPoints') {
                        if (empty($this->groupMessageData[$userId])) {
                            $this->groupMessageData[$userId] = array();
                        }

                        if (empty($this->groupMessageData[$userId][$cipherName])) {
                            $this->groupMessageData[$userId][$cipherName] =  array('easy' => array('total' => 0),
                                'medium' => array('total' => 0),
                                'hard' => array('total' => 0),
                                'expert' => array('total' => 0),
                                'insane' => array('total' => 0)
                            );
                        }

                        $this->groupMessageData[$userId][$cipherName]['easy']['total'] = $this->groupMessageData[$userId][$cipherName]['easy']['total'] + $totals['easy']['total'];
                        $this->groupMessageData[$userId][$cipherName]['medium']['total'] = $this->groupMessageData[$userId][$cipherName]['medium']['total'] + $totals['medium']['total'];
                        $this->groupMessageData[$userId][$cipherName]['hard']['total'] = $this->groupMessageData[$userId][$cipherName]['hard']['total'] + $totals['hard']['total'];
                        $this->groupMessageData[$userId][$cipherName]['expert']['total'] = $this->groupMessageData[$userId][$cipherName]['expert']['total'] + $totals['expert']['total'];
                        $this->groupMessageData[$userId][$cipherName]['insane']['total'] = $this->groupMessageData[$userId][$cipherName]['insane']['total'] + $totals['insane']['total'];

                    }
                }
            }
        }

        return empty($this->groupMessageData[$userId][ucfirst($pieces['0'])][strtolower($pieces['1'])]['total']) ? 0 : $this->groupMessageData[$userId][ucfirst($pieces['0'])][strtolower($pieces['1'])]['total'];
    }

    private function getToolTotals($userId, $key)
    {
        if (empty($this->toolData[$userId])) {
            $this->toolData[$userId] = $this->tool_model->get_user_completed($userId);
        }

        $key = str_ireplace('Tool', '', $key);
        $pieces = preg_split('/(Encrypt|Decrypt)/i', $key, -1, PREG_SPLIT_DELIM_CAPTURE);

        return !empty($this->toolData[$userId][ucfirst($pieces['0'])]) ? $this->toolData[$userId][ucfirst($pieces['0'])][strtolower($pieces['1'])]['total'] : 0;
    }

}