<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboards extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

//=====================LOAD VIEW =====================

	public function Load_Dashboard()
	{
		//LOAD MODEL AND SET ID
		$this->load->model('M_Dashboard');
		$id = $this->session->userdata('id');

		//GET TODAYS APPOINTMENTS
		$today = $this->M_Dashboard->getToday($id['id']);

		//GET FUTURE APPOINTMENTS
		$future = $this->M_Dashboard->getFuture($id['id']);

		//CREATE ARRAY AND LOAD VIEW
		$tasks = array('today'=> $today, 'future'=>$future, 'id'=>$id);
		$this->load->view('V_dashboard', $tasks);
	}

	public function addTask()
	//add task to DB based on user's id
	{
		$task = $this->input->post(NULL, TRUE);

		// $this->form_validation->set_rules('date', 'Date', 'required|callback_date_valid');

		if ($this->form_validation->run('create') == FALSE)
		{
	        $this->session->set_flashdata('user', 'Please fill in all fields and future dates only');
	        redirect('dashboard');
       	}
        else
        {
        	$id = $this->session->userdata('id');
        	$task = array
            (
	            'date' => $task['date'],
	            'time' => $task['time'],
	            'task' => $task['task'],
	            'status'=> 'Pending',
	            'user_id'=> $id['id']
            );
	        $this->load->model('M_Dashboard');
			$this->M_Dashboard->addTask($task);
			redirect('dashboard');
        }
	}

	// public function date_valid($date)
	// {
	// 	$this->load->helper('date');
	// 	$today = now();
	// 	$today = unix_to_human($today);
	// 	$date = new DateTime($date);
	// 	$today = new DateTime($today);
	// 	$interval = $date->diff($today);
	// 	echo("<pre>");
	// 	var_dump($interval);
	// 	die();
	// 	if ($interval['d'] > 0 && $interval['m'] == 0)
	// 		return false;
	// 	elseif($interval['m'] > 0)
	// 		return false;
	// 	elseif($interval['y'] > 0)
	// 		return false;
	// 	else
	// 		return true;
	// }


	public function deleteTask($task)
	//delete task to DB based on task id
	{
		$this->load->model('M_Dashboard');
		$this->M_Dashboard->deleteTask($task);
		redirect('dashboard');
	}

	public function edit($task)
	//load edit view page
	{
		$this->load->model('M_Dashboard');
		$id = $this->session->userdata('id');
		$task = $this->M_Dashboard->getTask($task);
		$task = array('task'=> $task, 'id'=>$id);

		$this->load->view('V_edit', $task);
	}

	public function editTask()
	//edit task based on form input
	{
		$task = $this->input->post(NULL, TRUE);
		if ($this->form_validation->run('create') == FALSE)
		{
	        $this->load->view('V_edit');
       	}
        else
        {
        	$id = $this->session->userdata('id');
        	$task = array
            (
	            'date' => $task['date'],
	            'time' => $task['time'],
	            'task' => $task['task'],
	            'status'=> $task['status'],
	            'id' =>$task['id'],
	            'user_id'=> $id['id']
            );
	        $this->load->model('M_Dashboard');
			$this->M_Dashboard->editTask($task);
			redirect('dashboard');
        }
	}

}
