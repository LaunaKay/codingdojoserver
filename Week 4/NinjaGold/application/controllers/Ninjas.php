<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninjas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(FALSE);
	}

	public function process_gold()
	{
			if ($this->input->post('farm'))
			{
				$this->gold = rand(10,20);
				$this->session->set_userdata('message', 'You entered a farm and earned ' . $this->gold . ' golds.    ');
			}
			if ($this->input->post('cave'))
			{
				$this->gold = rand(5,10);
				$this->session->set_userdata('message', 'You entered a cave and earned ' . $this->gold . ' golds.    ');
			}
			if ($this->input->post('house'))
			{
				$this->gold = rand(2,5);
				$this->session->set_userdata('message', 'You entered a house and earned ' . $this->gold . ' golds.    ');
			}
			if ($this->input->post('casino'))
			{
				$this->gold = rand(-50,50);
				if ($this->gold > 0)
				{
					$this->session->set_userdata('message', 'You entered a casino and earned ' . $this->gold . ' golds.    ');
				}
				else
					$this->session->set_userdata('message', '<p class = "lost"> You entered a casino and lost ' . $this->gold . ' golds. OUCH!!</p>');
			}


			$this->session->set_userdata('score', $this->session->score += $this->gold);
			$this->session->set_userdata('log', $this->session->userdata('log') . $this->session->userdata('message') . '     ' . date("m/d/y h:i:s") . '<br>');

			redirect('/');


	}

	public function reset()
	{
		$this->session->set_userdata('score','0');
		$this->session->set_userdata('log', '');

		redirect('/');
	}

	public function gold()
	{
		if(!$this->session->score)
			$this->session->set_userdata('score','0');
		$this->load->view('gold');
	}

}
