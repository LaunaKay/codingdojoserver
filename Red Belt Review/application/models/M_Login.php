<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function reg_validation($userinfo)
    //validate user's registration information
    {
            $password = $userinfo['password'];
            $username = $userinfo['username'];
            $userpresent = $this->userpresent($username);
            if($userpresent > 0)
            {
                $this->session->set_flashdata('user', 'This username is already in use.');
                redirect('/main');
            }
            else
            {
                $this->addUser($userinfo);
                $id = $this->userpresent($username);
                $this->session->set_userdata('id', $id);
                redirect('/books');
            }
    }

    public function log_validation($userinfo)
    //validate user's login information
    {
            $username = $userinfo['username'];
            $password = $userinfo['password'];
            $id = $this->usermatch($username, $password);
            if ($id <1)
            {
                $this->session->set_flashdata('user', 'This email/password combination is not valid.');
                redirect('/main');
            }
            else
                $this->session->set_userdata('id', $id);
    }

    public function userpresent($username)
    //check to see if user exists in database
    {
        return $this->db->query("SELECT id, name FROM users WHERE username = '{$username}'")->row_array();
    }

    public function usermatch($username, $password)
    //match users password and username
    {
        return $this->db->query("SELECT id, username FROM users WHERE username = '{$username}' && password = '{$password}'")->row_array();
    }

    public function addUser($userinfo)
    //add user to DB after validation
    {
        $userinfo = array(
            'name' => $userinfo['name'],
            'username' => $userinfo['username'],
            'password' => $userinfo['password'],
            'date_hired' => $userinfo['date_hired']);
        $this->db->insert('users', $userinfo);
    }
}