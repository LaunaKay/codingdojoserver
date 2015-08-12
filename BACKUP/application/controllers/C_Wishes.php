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
	//remove wish from wishlist and database
	{
		$this->load->model('M_Wish');
		$this->M_Wish->removewish($wishID);
		redirect('dashboard');
	}

	public function addtolist($wishID)
	//add to wishlist
	{
		$this->load->model('M_Wish');
		$this->M_Wish->addtolist($wishID);

		redirect('dashboard');
	}

	public function removefromlist($wishID)
	//remove from wishlist
	{
		$this->load->model('M_Wish');
		$this->M_Wish->removefromlist($wishID);
		redirect('dashboard');
	}

	public function wishedby($wishID)
	//list of users who wished for item
	{
        return $this->db->query("SELECT wishes.item, users.name
            FROM wishes
            LEFT JOIN wishlists ON wishlists.item_id = wishes.item_id
            LEFT JOIN users ON users.id = wishlist.user_id
            WHERE wishes.id = '{$wishID}'")->result_array();
    }

}
