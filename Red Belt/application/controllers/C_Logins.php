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

	public function logout()
    //logout
	{
		$this->session->unset_userdata('id');
		$this->session->sess_destroy();
		redirect('/main');
	}
}
