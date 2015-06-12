<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

//=====================LOAD VIEW =====================

	public function ###()
	{
		$this->Get_All_Users();
	}


//==================USERS=============================

	public function ###()
	{
		$this->load->model('M_Display');
		$allusers = $this->M_Display->get_all_users();
		$allusers = array('allusers'=>$allusers);
		$this->load->view('V_Display', $allusers);
	}
}
