<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model
{
    public $id;
    public $mail;
    public $pass;

    public function getUserInfos($login, $pass)
    {
        // $res = $this->db->get_where('users', array('mail' => $login, 'pass' => $pass));
        $this->db->select('u.id, u.mail, u.pass, r.level');
        $this->db->from('users as u');
        $this->db->from('rights as r');
        $this->db->where('r.user_id = u.id');
        $this->db->where('u.mail', $login);
        $this->db->where('u.pass', $pass);
        $query = $this->db->get();

        return $query->row();
    }
}

?>