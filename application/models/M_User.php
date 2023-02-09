<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

    function auth() {
        $result = $this->db->get_where('users', array('user_nip' => $username, 'pass' => $password));

        if ($result->num_rows() > 0) {
        return $result->result();
        } else {
        return false;
        }
    }
}