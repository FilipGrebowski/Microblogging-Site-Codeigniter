// author: Filip Grebowski

<?php

class Users_model extends CI_Model {

    public function checkLogin($username, $pass) {
        $this->load->helper('security');
        $hashPassword = do_hash($pass, 'sha1');

        $this->db->select('username', 'password');
        $this->db->from('Users');
        $this->db->where('username', $username);
        $this->db->where('password', $hashPassword);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        }
        else {
            return false;
        }
    }

    public function isFollowing($follower, $followed) {
        $this->db->select('follower_username', 'followed_username');
        $this->db->from('User_Follows');
        $this->db->where('follower_username', $follower);
        $this->db->where('followed_username', $followed);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        }
        else {
            return false;
        }
    }

    public function follow($followed) {
        $currentUser = $this->session->username;
        
    }
}

// Alternative way of getting the results. Non-codeigniter but SQL.

/* $sql = "SELECT username, password FROM Users WHERE username = ? AND password = ?";
        $query = $this->db->query($sql, array($username, $hashPassword));

        if (sizeOf($query->result()) == 1) {
            echo "user exists";
        }
        else {
            echo "user does not exist";
        } */
