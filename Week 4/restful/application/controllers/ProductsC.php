<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductsC extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(TRUE);
		$this->load->database();
	}

	public function load_all_products()
	{
		$this->load->view('products');
	}

	public function load_new()
	{
		$this->load->view('new');
	}

	public function load_edit()
	{
		$this->load->view('edit');
	}

	public function show()
	{
		$this->load->view('show');
	}

	public function get_all_products()
//queries DB and sets session data. Redirects to all_products
	{
		$this->load->model('ProductM');
		$products = $this->ProductM->get_all_products()->result_array();
		$this->session->set_userdata('products', $products);
		redirect('/all_products');
	}

	public function new_product()
//inserts at DB based on POST, redirect to get_all_products
	{
	$new_product = $this->input->post(NULL,TRUE);
	$this->session->set_userdata('new_product', $new_product);
	$this->load->model('ProductM');
	$this->ProductM->new_product();
	redirect('successful_add');
	}

	public function successful_add()
	{
		$this->get_all_products();
		$this->session->set_flashdata('created', "Product successfully created");
		$this->load->view('products');
	}

	public function remove_product($id)
	{
		$this->load->model('ProductM');
		$this->ProductM->remove_product($id);
		redirect('successful_remove');
	}

	public function successful_remove()
	{
		$this->get_all_products();
		$this->session->set_flashdata('removed', "Product successfully removed");
		$this->load->view('products');
	}

	public function display_product($id)
	{
		$this->load->model('ProductM');
		$current_product = $this->ProductM->get_product_by_id($id)->result_array();
		$this->session->set_userdata('current_product', $current_product);
		redirect('edit');
	}

	public function update($id)
	{
		$edit_product = $this->input->post(NULL,TRUE);
		$this->session->set_userdata('edit_product', $edit_product);
		$this->load->model('ProductM');
		$this->ProductM->edit_product($id);
		redirect('successful_update');
	}

	public function successful_update()
	{
		$this->get_all_products();
		$this->session->set_flashdata('updated', "Product successfully updated");
		$this->load->view('products');
	}

		public function show_product($id)
	{
		$this->load->model('ProductM');
		$current_product = $this->ProductM->get_product_by_id($id)->result_array();
		$this->session->set_userdata('current_product', $current_product);
		redirect('show');
	}


}
