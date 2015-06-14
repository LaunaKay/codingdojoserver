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
	//add wish to DB based on user's id.
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
	//remove wish from wishlist
	{
		$this->load->model('M_Wish');
		$this->M_Wish->removewish($wishID);
		redirect('dashboard');
	}


}
