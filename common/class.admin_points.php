<?php

/**
 *  @property Point_model $point_model
 *  @property Difficulty_model $difficulty_model
 *  @property Cipher_model $cipher_model
 *  @property Game_model $game_model
 */
class Admin_points {

    function __construct($db) {
        if (is_object($db)) {
            $this->db = $db;
        } else {
            throw new Exception('invalid db');
        }

        $this->point_model = new Point_model($this->db);
        $this->difficulty_model = new Difficulty_model($this->db);
        $this->cipher_model = new Cipher_model($this->db);
        $this->game_model = new Game_model($this->db);
    }

    function displayPointsForm() {
        $form = new HTML_QuickForm2('pointsForm', 'post', array('class' => 'form-horizontal'));

        $form->addDataSource(new HTML_QuickForm2_DataSource_Array($this->setDefaults()));
                
        $difficulties = $this->difficulty_model->get_difficulties();

        $fsCustom = $form->addElement('fieldset')->setLabel('Difficulty');

        if (is_array($difficulties) && count($difficulties) > 0) {
            foreach ($difficulties as $difficulty) {
                $$difficulty['difficulty_name'] = $fsCustom->addElement('text', 'difficulties[' . $difficulty['id'] . ']', array( 'class' => 'input-mini'))->setLabel(ucfirst($difficulty['difficulty_name']));
            }
        }

        $ciphers = $this->cipher_model->get_ciphers(false);

        $fsCustom3 = $form->addElement('fieldset')->setLabel('Message Boards Cipher Revealed');

        if (is_array($ciphers) && count($ciphers) > 0) {
            foreach ($ciphers as $cipher) {
                $$cipher['cipher_name'] = $fsCustom3->addElement('text', 'ciphers[' . $cipher['id'] . '][revealed]', array( 'class' => 'input-mini'))->setLabel(ucfirst($cipher['cipher_name']));
            }
        }

        $fsCustom4 = $form->addElement('fieldset')->setLabel('Message Boards Cipher Not Revealed');

        if (is_array($ciphers) && count($ciphers) > 0) {
            foreach ($ciphers as $cipher) {
                $$cipher['cipher_name'] = $fsCustom4->addElement('text', 'ciphers[' . $cipher['id'] . '][unrevealed]', array( 'class' => 'input-mini'))->setLabel(ucfirst($cipher['cipher_name']));
            }
        }

        $fsCustom5 = $form->addElement('fieldset')->setLabel('Game Messages');

        $gameMessages = $this->game_model->get_game_messages();

        if (is_array($gameMessages) && count($gameMessages) > 0) {
            $lastGameName = '';
            foreach ($gameMessages as $gameMessage) {
                if ($gameMessage['game_name'] != $lastGameName) {
                    $i = 1;
                }
                $fsCustom5->addElement('text', 'games[' . $gameMessage['game_id'] . '][' . $gameMessage['id'] . '][points]', array( 'class' => 'input-mini'))->setLabel($gameMessage['game_name'] . ' msg ' . $gameMessage['message_id']);
                $lastGameName = $gameMessage['game_name'];
                $i++;
            }
        }

        $form->addElement('submit', 'submitForm', array('value' => 'Save', 'style' => 'display:block;clear:both', 'class' => 'btn btn-primary'));
        
        if ($form->validate()) {

            $this->save_difficulty_points($_REQUEST['difficulties']);

            $this->save_cipher_points($_REQUEST['ciphers']);

            $this->save_game_points($_REQUEST['games']);
            header("location: /admin/points.php");
            exit;
        }
        
        $template = ' <div class="control-group">
                    <label class="control-label qf-label<qf:required> required</qf:required>" for="{id}">{label}</label>
                    <div class="controls">
                    {element}
                    <span class="help-inline element<qf:error> error</qf:error>"><qf:error>{error}</qf:error></span>
                    </div>
                    </div>';
        
        $renderer = HTML_QuickForm2_Renderer::factory('default')->setTemplateForClass(
                'HTML_QuickForm2_Element_Input', $template );

        $template = '<div class="element<qf:error> error</qf:error>"><qf:error>{error}</qf:error>' .
                '<label for="{id}" class="qf-label<qf:required> required</qf:required>">{label}</label>' .
                '{element}' .
                '<qf:label_2><div class="qf-label-1">{label_2}</div></qf:label_2></div>';



        return $form->render($renderer);
    }

    function save_difficulty_points($points) {
        if (is_array($points) && count($points) > 0) {
            foreach ($points as $diffId => $point) {
                $this->difficulty_model->save_difficulty_points($diffId, $point);
            }
        }
    }

    function save_cipher_points($ciphers) {
        if (is_array($ciphers) && count($ciphers) > 0) {
            foreach ($ciphers as $cipherId => $points) {
                
                $this->cipher_model->save_cipher_points($cipherId, $points['revealed'], $points['unrevealed']);
            }
        }
    }

    public function setDefaults() {
        $defaults = array();

        $difficultyPoints = $this->difficulty_model->get_points();

        if (is_array($difficultyPoints) && count($difficultyPoints) > 0) {
            foreach ($difficultyPoints as $points) {
                $defaults['difficulties'][$points['difficulty_id']] = $points['points'];
            }
        }

        $cipherPoints = $this->cipher_model->get_points();

        if (is_array($cipherPoints) && count($cipherPoints)) {
            foreach ($cipherPoints as $points) {
                $defaults['ciphers'][$points['cipher_id']]['points'] = $points['points'];
                $defaults['ciphers'][$points['cipher_id']]['revealed'] = $points['revealed_points'];
                $defaults['ciphers'][$points['cipher_id']]['unrevealed'] = $points['unrevealed_points'];
            }
        }

        $gameMessagePoints = $this->game_model->get_game_messages();

        if (is_array($gameMessagePoints)) {
            foreach ($gameMessagePoints as $gameMessagePoint) {
                $defaults['games'][$gameMessagePoint['game_id']][$gameMessagePoint['id']]['points'] = $gameMessagePoint['points'];
            }
        }

        return $defaults;
    }

    public function save_game_points($games) {
        if (is_array($games) && count($games) > 0) {
            foreach ($games as $gameId => $messages) {
                foreach ($messages as $messageId => $points) {
                    $this->game_model->save_message_points($gameId, $messageId, $points['points']);
                }
            }
        }
    }

}