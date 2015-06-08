<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginC extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function load_login()
	{
		$this->load->view('login');
	}

	public function load_welcome()
	{
		$this->load->view('welcome');
	}


	public function process_registration()

	{
		$login = $this->input->post(NULL, TRUE);

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('/login');
		}
		else
		{
			$email = $login['email'];
			$this->load->model('loginM');
			$user = $this->loginM->finduseremail($email)->result_array();
			if(count($user) > 0)
				{
					$this->session->set_flashdata('no user', 'This email is already in use');
					$this->load->view('login');
				}
			else
			{
					$this->session->set_userdata('user', $user);
					redirect('/welcome');
			}
		}
	}

	public function process_login()
	{
		$login = $this->input->post(NULL, TRUE);

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('/login');
		}
		else
		{
			$email = $login['email'];
			$password = $login['password'];
			$this->load->model('loginM');
			$user = $this->loginM->finduser($email, $password)->result_array();
			if(count($user) == 1)
				{
					$this->session->set_userdata('user', $user);
					redirect('/welcome');
				}
			else
			{
				$this->session->set_flashdata('no user', 'This email and password are not a valid combination');
				$this->load->view('login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect("/");
	}
}
