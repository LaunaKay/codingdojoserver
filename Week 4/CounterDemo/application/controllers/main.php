<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		// echo "Welcome to CodeIgniter. The default Controller is Main.php";
        $this->session->set_userdata('number', rand(1,100));
        $this->load->view('index');


	}

    public function checkSession()
    {
        if($this->input->post('guess') < $this->session->userdata('number'))
        {
            die ("too low");
        }
                if($this->input->post('guess') > $this->session->userdata('number'))
        {
            die ("too high");
        }
                if($this->input->post('guess') == $this->session->userdata('number'))
        {
            die ("just right");
        }
    }
}

//end of main controller