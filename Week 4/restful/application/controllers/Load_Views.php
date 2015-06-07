<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(TRUE);
		$this->load->database();
	}

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


}