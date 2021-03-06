<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function reg_validation($userinfo)
    {
            $password = $userinfo['password'];
            $username = $userinfo['username'];
            $userpresent = $this->userpresent($username);
            if($userpresent > 0)
            {
                redirect('alreadyregistered');
            }
            else
            {
                $this->addUser($userinfo);
                $id = $this->userpresent($username);
                $this->session->set_userdata('id', $id);
                redirect('/dashboard');
            }
    }

    public function log_validation($userinfo)
    {
            $username = $userinfo['username'];
            $password = $userinfo['password'];
            $id = $this->usermatch($username, $password);
            if ($id > 0)
            {
                $this->session->set_userdata('id', $id);
            }
           else
            {
                redirect('invalid');
            }
    }

    public function userpresent($username)
    {
        return $this->db->query("SELECT id FROM users WHERE username = '{$username}'")->row_array();
    }

    public function usermatch($username, $password)
    {
        return $this->db->query("SELECT id FROM users WHERE username = '{$username}' && password = '{$password}'")->row_array();
    }

    public function addUser($userinfo)
    {
        $userinfo = array(
            'name' => $userinfo['name'],
            'username' => $userinfo['username'],
            'password' => $userinfo['password'],
            'date_hired' => $userinfo['date_hired']);
        $this->db->insert('users', $userinfo);
    }
}