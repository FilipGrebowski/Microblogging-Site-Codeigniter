// author: Filip Grebowski

<?php

class Messages_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getMessagesByPoster($name) {
        $sql = "SELECT * FROM Messages WHERE user_username = ? ORDER BY posted_at DESC";
        $query = $this->db->query($sql, array($name));
        return $query->result_array();
    }

    public function searchMessages($string) {
        $sql = "SELECT * FROM Messages WHERE text LIKE ? ORDER BY posted_at DESC";
        $query = $this->db->query($sql, array('%'.$string.'%'));
        return $query->result_array();
    }

    public function insertMessage($poster, $string) {
        $sql = "INSERT INTO Messages (user_username, text, posted_at) VALUES (?, ?, CURRENT_TIMESTAMP())";
        $this->db->query($sql, array($poster, $string));
    }

    public function getFollowedMessages($name) {
        $sql = "SELECT * FROM Messages WHERE user_username = ANY (SELECT followed_username FROM User_Follows WHERE follower_username = ?) ORDER BY posted_at DESC";
        $query = $this->db->query($sql, array($name));
        return $query->result_array();
    }
}
