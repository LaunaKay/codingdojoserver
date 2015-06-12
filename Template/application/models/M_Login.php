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
            $password = $this->encrypt->encode($userinfo['password']);
            $email = $userinfo['email'];
            $userpresent = $this->userpresent($email);
            if($userpresent > 0)
            {
                redirect('alreadyregistered');
            }
            else
            {
                $this->addUser($userinfo);
                $id = $this->userpresent($email);
                $this->session->set_userdata('id', $id);
                redirect('/display');
            }
    }

    public function log_validation($userinfo)
    {
            $email = $userinfo['email'];
            $password = $userinfo['password'];
            $id = $this->usermatch($email, $password);
            if ($id > 0)
            {
                $this->session->set_userdata('id', $id);
            }
           else
            {
                redirect('invalid');
            }
    }

    public function userpresent($email)
    {
        return $this->db->query("SELECT id FROM users WHERE email = '{$email}'")->row_array();
    }

    public function usermatch($email, $password)
    {
        return $this->db->query("SELECT id FROM users WHERE email = '{$email}' && password = '{$password}'")->row_array();
    }

    public function addUser($userinfo)
    {
        $userinfo = array(
            'first_name' => $userinfo['first_name'],
            'last_name' => $userinfo['last_name'],
            'email' => $userinfo['email'],
            'password' => $userinfo['password']);
        $this->db->insert('users', $userinfo);
    }
}