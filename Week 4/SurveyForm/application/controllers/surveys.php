<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function form()
	{
        $this->load->view('form');
	}

    public function process_form()
    {
        //set counter when form submitted
        if($this->session->userdata('counter'))
            {
                $counter = $this->session->userdata('counter');
                $this->session->set_userdata('counter',$counter+1);
            }
        else
        {
            $this->session->set_userdata('counter',1);
        }
        $newData = $this->input->post(NULL,TRUE);
        $this->session->set_userdata($newData);
        redirect('result');

    }

    public function result()
    {
        $this->load->view('result');
    }
}

//end of main controller