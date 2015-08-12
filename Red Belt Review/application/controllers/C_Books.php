<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Books extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

//=====================LOAD VIEW =====================

	public function Load_Books()
	{
		// $this->load->model('M_Dashboard');
		// $id = $this->session->userdata('id');
		// $wishlist = $this->M_Dashboard->getwishlist($id['id']);

		// $this->load->model('M_Dashboard');
		// $id = $this->session->userdata('id');
		// $wishes = $this->M_Dashboard->getwishes($id['id']);

		// $this->load->model('M_Dashboard');
		// $id = $this->session->userdata('id');
		// $created = $this->M_Dashboard->getadded($id['id']);

		// $wishlist = array('wishlist'=> $wishlist, 'wishes'=>$wishes, 'created' => $created, 'id'=>$id);
		$this->load->view('V_books');
	}

//=======================LOAD ITEM=====================

	public function Load_Book()
	{
		$this->load->view('V_book');
	}

	public function Load_Add()
	{
		$this->load->view('V_add');
	}

	public function Load_User()
	{
		$this->load->view('V_user');
	}


//==================QUERIES===================
	public function addBook()
	{
		$id = $this->session->userdata('id');
        $book = array
            (
	            'title' => $book['title'],
	            'author' => $book['author'],
	            'rating' => $book['rating'],
	            'review' => $book['review'],
            );
        $this->load->model('M_Book');
        $this->M_Book->addBook($book);
        echo("<pre>");
        var_dump();
        die();
	}

}
