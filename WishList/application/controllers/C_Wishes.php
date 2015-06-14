<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Wishes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

//=====================LOAD VIEW =====================

	public function load_create()
	{
		$this->load->view('V_Create');
	}


//===================WISHES=========================
	public function createwish()
	{
		$wish = $this->input->post(NULL, TRUE);
		if ($this->form_validation->run('create') == FALSE)
		{
	        $this->load->view('V_Create');
       	}
        else
        {
	        $this->load->model('M_Wish');
			$this->M_Wish->addwish($wish);
			redirect('dashboard');
        }
	}

	public function removewish($wishID)
	{
		$this->load->model('M_Wish');
		$this->M_Wish->removewish($wishID);
		redirect('dashboard');
	}



//==================USERS=============================

	// public function create()
	// {
	// 	$this->load->model('M_Wishes');
	// 	$allusers = $this->M_Display->get_all_users();
	// 	$allusers = array('allusers'=>$allusers);
	// 	$this->load->view('V_Display', $allusers);
	// }
}
