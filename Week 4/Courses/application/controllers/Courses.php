<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(FALSE);
	}

	public function addCourse()
	{

	}


	public function destroyCourse()
	{

	}

	public function add()
	{
		$this->load->view('add');
	}

	public function destroy()
	{
		$this->load->view('destroy');
	}
}
