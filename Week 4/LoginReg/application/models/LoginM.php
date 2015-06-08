<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginM extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function finduser($email, $password)
    {
        return $this->db->query("SELECT * FROM users WHERE email = '{$email}' && password = '{$password}'");
    }

    public function finduseremail($email)
    {
        return $this->db->query("SELECT * FROM users WHERE email = '{$email}'");
    }
}