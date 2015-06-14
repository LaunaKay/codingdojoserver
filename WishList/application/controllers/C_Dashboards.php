<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboards extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

//=====================LOAD VIEW =====================

	public function Load_Dashboard()
	{
		$this->load->model('M_Dashboard');
		$id = $this->session->userdata('id');
		$wishlist = $this->M_Dashboard->getwishlist($id['id']);

		$this->load->model('M_Dashboard');
		$id = $this->session->userdata('id');
		$wishes = $this->M_Dashboard->getwishes();

		$wishlist = array('wishlist'=> $wishlist, 'wishes'=>$wishes);
		// $wishes = array('wishes'=>$wishes);

		$this->load->view('V_dashboard', $wishlist);
	}

	public function Load_Item($itemID)
	{
		$this->load->model('M_Dashboard');
		$item = $this->M_Dashboard->getitem($itemID);
		$item = array('item'=> $item);
		$this->load->view('V_Item', $item);
	}

}
