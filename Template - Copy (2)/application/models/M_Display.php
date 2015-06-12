<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Display extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_users()
    {
        return $this->db->query("SELECT * FROM users")->result_array();
    }

}