<?php

class Game_model
{

    private $point_model;

    function __construct($db)
    {
        if (is_object($db)) {
            $this->db = $db;
        } else {
            throw new Exception('invalid db: ' . __CLASS__);
        }

        $this->point_model = new Point_model($this->db);
    }

    function get_game($gameId)
    {
        $sql = "SELECT * FROM game_data WHERE id = ?";

        try {
            return $this->db->fetchRow($sql, $gameId);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    function get_games($userId)
    {
        $sql = "SELECT * FROM game_data WHERE user_id = ?";

        try {
            return $this->db->fetchAll($sql, $userId);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    function save_game($userId, $xmlRequest, $gameId = null)
    {
        $data = $this->_formatSaveGameData($xmlRequest);

        try {
            if ($this->get_game($gameId)) {
                if ($this->update_game($gameId, $data)) {
                    return $gameId;
                } else {
                    return false;
                }
            } else {
                return $this->insert_game($data);
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    function insert_game($gameData)
    {
        //TODO: validate data

        try {
            $this->db->insert('game_data', $gameData);

            return $this->db->lastInsertId();
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    function update_game($gameId, $gameData)
    {
        // TODO: validate data
        try {
            unset($gameData['created_on']);

            if ($this->db->update('game_data', $gameData, 'id = ' . $this->db->quote($gameId))) {
                return $gameId;
            } else {
                return false;
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    function save_game_action( $userId, $gameId, $userAction, $messageId, $cipherId, $rawData )
    {
        $field_values['user_id'] = $userId;
        $field_values['game_id'] = $gameId;
        $field_values['user_action'] = $userAction;
        $field_values['message_id'] = $messageId;
        $field_values['cipher_id'] = $cipherId;
        $field_values['raw_data'] = $rawData;
        $field_values['created_on'] = date( "Y-m-d H:i:s" );
        $field_values['updated_on'] = date( "Y-m-d H:i:s" );

        try {
            $this->db->insert( 'decryptions_games', $field_values );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    function _formatSaveGameData($xml)
    {
        $field_values['user_id'] = $xml->user_id;
        $field_values['game_data'] = $xml->game_data;
        $field_values['created_on'] = date("Y-m-d H:i:s");
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        return $field_values;
    }

    function get_all_user_game_data($userId)
    {
        $sql = "SELECT * FROM games";

        try {
            $rawGames = $this->db->fetchAll($sql);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }

        $sql = "SELECT decryptions_games.game_id, game_name,count(decryptions_games.game_id ) AS total FROM decryptions_games
                LEFT JOIN games ON games.id = decryptions_games.game_Id
                WHERE user_id = ? GROUP BY game_Id";

        $totalPoints = 0;
        $totalCompleted = 0;
        try {
            $games = $this->db->fetchAll($sql, $userId);

            foreach ($games as $id => $game) {
                $games[$id]['points'] = $this->get_user_points($userId, $game['game_id']);
                $totalPoints += $games[$id]['points'];
                $totalCompleted += $game['total'];
            }


            foreach ($rawGames as $game) {
                if (!is_array($games) || count($games) == 0) {
                    $games[$game['id']] = $game;
                    $games[$game['id']]['points'] = 0;
                    $games[$game['id']]['total'] = 0;

                }
            }

            $games['totalPoints'] = $totalPoints;
            $games['totalCompleted'] = $totalCompleted;
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }

        return $games;
    }

    function get_user_completed($userId)
    {
        //$sql = "SELECT count( game_id ) AS total FROM decryptions_games WHERE user_id = ?";
        $sql = "SELECT game_id, game_name,count(game_id ) AS total FROM decryptions_games
                LEFT JOIN games ON games.id = decryptions_games.game_Id
                WHERE user_id = ? GROUP BY game_Id";
        try {
            return $this->db->fetchAll($sql, $userId);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    function get_user_points($userId, $gameId = null)
    {
        $points = 0;
        $sql = "SELECT points_games.points FROM decryptions_games
            LEFT JOIN points_games ON points_games.game_id = decryptions_games.game_id AND points_games.message_id = decryptions_games.message_id 
            WHERE user_id = ?";

        if (!empty($gameId) && is_numeric($gameId)) {
            $sql .= " AND points_games.game_id = " . $this->db->quote($gameId);
        }

        try {
            $decryptions = $this->db->fetchAll($sql, $userId);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }

        if (is_array($decryptions) && count($decryptions) > 0) {
            foreach ($decryptions as $decryption) {
                $points += $this->point_model->calculate_game_points($decryption);
            }
        }

        return $points;
    }

    function get_game_messages()
    {
        $sql = "SELECT points_games.id, points_games.game_id, points_games.points, points_games.message_id, games.game_name
                FROM points_games
                LEFT JOIN games ON games.id = points_games.game_id";

        try {
            return $this->db->fetchAll($sql);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    function save_game_data( $data )
    {
        try {
            $userId = $this->db->fetchOne( "SELECT user_id FROM game_data WHERE user_id = ? AND game_id = ?", array( $data['user_id'], $data['game_id'] ) );
        }
        catch( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }

        try {
            $data['updated_on'] = date( "Y-m-d H:i:s" );

            // if record exists already update it
            if( !empty( $userId ) && $userId == $data['user_id'] ) {
                $this->db->update( 'game_data', $data, 'user_id = ' . $this->db->quote( $data['user_id'] ) . ' AND game_id = ' . $this->db->quote( $data['game_id'] ) );
            }
            else {
                $data['created_on'] = date( "Y-m-d H:i:s" );
                $this->db->insert( 'game_data', $data );
            }

        }
        catch( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    function load_game( $userId, $gameId )
    {
        $sql = "SELECT * FROM game_data WHERE user_id = ? AND game_id = ?";

        try {
            return $this->db->fetchAll( $sql, array( $userId, $gameId ) );
        }
        catch( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    function save_message_points($gameId, $messageId, $points)
    {
        try {
            $this->db->update('points_games', array('points' => $points), 'game_id = ' . $this->db->quote($gameId) . ' AND id = ' . $this->db->quote($messageId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

}