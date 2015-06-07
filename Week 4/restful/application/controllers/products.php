<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
// $this->output->enable_profiler(TRUE);
		$this->load->database();
	}
//load views====================================
	public function load_products_view()
	{
		$this->load->view('products');
	}

	public function load_products_view_new()
	{
		$this->set_flashdata('success', 'New product successfully added');
		$this->load->view('products');
	}

	public function load_show_view()
	{
		$this->load->view('show');
	}

	public function load_edit_view()
	{
		$this->load->view('edit');
	}

	public function load_new_view()
	{
		$this->load->view('new');
	}

	public function products_success()
//sets success message flashdata and loads product view
	{
		$success = $this->session->set_flashdata('success', 'Product was successfully added.');
		$this->load->view('products');
	}
//===================================================//
	public function c_create()
//Take post data
//Set session data
//Run insert query at ('restful/m_create')
//redirect to ('new_success') that sets flashdata success message and loads products view
	{
	$new_product = $this->input->post(NULL,TRUE);
	$this->session->set_userdata('new_product', $new_product);
	$this->load->model('restful');
	$this->restful->m_create();
	redirect('/get_all_products');
	}

	public function get_all_products()
//queries DB for products, sets new session array, sets flashdata success message and redirects to  new_success for flashdata success message
	{
	$this->load->model('restful');
	$all_products = $this->restful->m_get_all_products();
	$this->session->set_userdata('all_products', $all_products);
	redirect('/products_success');
	}

}