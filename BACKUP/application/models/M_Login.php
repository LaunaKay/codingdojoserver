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
            $email = $userinfo['email'];
            $userpresent = $this->userpresent($email);
            if($userpresent > 0)
            {
                $this->session->set_flashdata('user', 'This username is already in use.');
                redirect('/main');
            }
            else
            {
                $this->addUser($userinfo);
                $id = $this->userpresent($email);
                $this->session->set_userdata('id', $id);
                redirect('/dashboard');
            }
    }

    public function log_validation($userinfo)
    //validate user's login information
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
                $this->session->set_flashdata('user', 'This email/password combination is not valid.');
                redirect('/main');
            }
    }

    public function userpresent($email)
    //check to see if user exists in database
    {
        return $this->db->query("SELECT id, name FROM users WHERE email = '{$email}'")->row_array();
    }

    public function usermatch($email, $password)
    //match users password and username
    {
        return $this->db->query("SELECT id, name FROM users WHERE email = '{$email}' && password = '{$password}'")->row_array();
    }

    public function addUser($userinfo)
    //add user to DB after validation
    {
        $userinfo = array(
            'name' => $userinfo['name'],
            'email' => $userinfo['email'],
            'password' => $userinfo['password'],
            'date_of_birth' => $userinfo['date_of_birth']);
        $this->db->insert('users', $userinfo);
    }
}