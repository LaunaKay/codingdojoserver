<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function reg_validation($userinfo)
    {
        if ($this->form_validation->run('registration') == FALSE)
        {
            $this->load->view('V_login');
        }
        else
        {
            $email = $userinfo['email'];
            $password = $userinfo['password'];
            $userpresent = $this->userpresent($email);
            if(count($userpresent) > 0)
            {
                $this->session->set_flashdata('user', 'This email is already in use');
                $this->load->view('V_login');
            }
            else
            {
                $this->addUser($userinfo);
                $id = $this->getID($email);
                $this->session->set_userdata('id', $id);
                redirect('/display');
            }
        }
    }

    public function log_validation($userinfo)
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|MD5');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('V_Login');
        }
        else
        {
            $email = $userinfo['email'];
            $password = $userinfo['password'];
            $userpresent = $this->userpresent($email);
            $id = $this->getID($email, $password);
            $this->session->set_userdata('id', $id);
            redirect('display');
            }
    }

    public function userpresent($email)
    {
        return $this->db->query("SELECT id FROM users WHERE email = '{$email}'")->row_array();
    }

    public function getID($email, $password)
    {
        return $this->db->query("SELECT id FROM users WHERE email = '{$email}' && password = '{$password}'")->row_array();
    }

    public function addUser($userinfo)
    {
        $this->db->insert('users', $userinfo);
    }

}