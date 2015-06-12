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
	$this->load->model('M_Login');
	$this->M_Login->log_validation($userinfo);
	}

	public function Post_Registration()
	{
	$userinfo = $this->input->post(NULL, TRUE);
	$this->load->model('M_Login');
	$this->M_Login->reg_validation($userinfo);
	}

	public function Get_All_Users()
	{
		$this->load->model('M_Users');
		$id = $this->session->userdata('id');
		$this->M_Users->get_all_users($id);
	}
}
