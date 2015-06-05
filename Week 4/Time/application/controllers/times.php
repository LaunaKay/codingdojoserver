<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(FALSE);
	}

	public function main()
	{
        $getDate = date('M d, Y');
        $getTime = time();
        $getTime = date('g:i a');
        $this->session->set_userdata('date', $getDate);
        $this->session->set_userdata('time', $getTime);
        $this->load->view('main');
    }
}

//end of main controller