<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Logins extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

//=====================LOAD VIEW =====================

	public function Load_Login()
	{
		$this->load->view('V_Login');
	}


//==================LOGIN=============================

	public function Post_Login()
	{
		$userinfo = $this->input->post(NULL, TRUE);
		if ($this->form_validation->run('login') == FALSE)
		{
	            $this->load->view('V_Login');
       	}
        else
        {
            $this->load->model('M_Login');
			$this->M_Login->log_validation($userinfo);
            redirect('dashboard');
        }
	}

	public function Post_Registration()
    //take post data from registraiton form
	{
		$userinfo = $this->input->post(NULL, TRUE);
		// echo("<pre>");
		// var_dump($userinfo);
		// die();
		if ($this->form_validation->run('registration') == FALSE)
        {
            $this->load->view('V_Login');
        }
        else
        {
        	$this->load->model('M_Login');
			$this->M_Login->reg_validation($userinfo);
			redirect('dashboard');
        }

	}

	public function Already_Registered()
    //error message
	{
		$this->session->set_flashdata('user', 'This email is already in use');
         redirect('/');
	}

	public function Invalid_User()
	{
		$this->session->set_flashdata('user', 'This email/password combination is not valid');
		redirect('/main');
	}

	public function Get_All_Users()
	{
		$this->load->model('M_Users');
		$id = $this->session->userdata('id');
		$this->M_Users->get_all_users($id);
	}

	public function logout()
    //logout
	{
		$this->session->unset_userdata('id');
		$this->session->sess_destroy();
		redirect('/main');
	}
}
