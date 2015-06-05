<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(FALSE);
	}

	public function generate()
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for($i = 0; $i<14; $i++)
		{
			$randomString .= $characters[rand(0, $charactersLength-1)];
		}
		$this->session->set_userdata('randomString', $randomString);

		if($this->session->userdata('counter'))
		{
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		}
		else
		{
			$this->session->set_userdata('counter',1);
		}
		redirect('random');
	}


	public function random()
	{
		$this->load->view('random');
	}
}
