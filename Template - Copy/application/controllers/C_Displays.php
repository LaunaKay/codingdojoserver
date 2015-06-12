<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Displays extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

//=====================LOAD VIEW =====================

	public function Load_Display()
	{
		$this->Get_All_Users();
	}


//==================USERS=============================

	public function Get_All_Users()
	{
		$this->load->model('M_Display');
		$allusers = $this->M_Display->get_all_users();
		$allusers = array('allusers'=>$allusers);
		$this->load->view('V_Display', $allusers);
	}
}
