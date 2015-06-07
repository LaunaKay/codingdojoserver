<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(TRUE);
		$this->load->database();
	}

	public function get_courses()
	{
		$this->load->model('Course');
		$courses = $this->Course->get_all_courses()->result_array();
		$this->session->set_userdata('courses', $courses);
		redirect('add');
	}

	function form_validation()
	{
		$addCourse = $this->input->post(NULL, TRUE);
		$this->session->set_userdata('addCourse', $addCourse);
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[15]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('/add');
		}
		else
		{
			$this->addCourse();
		}
	}

	public function addCourse()
	{
		$this->load->model('Course');
		$this->Course->addCourse('addCourse');
		$courses = $this->Course->get_all_courses()->result_array();
		$this->session->set_userdata('courses', $courses);
		$this->session->set_flashdata('Add', 'Course added successfully');
		redirect('add');
	}


	public function destroyCourse()
	{
		$this->load->model('Course');
		$this->Course->destroyCourse();
		$courses = $this->Course->get_all_courses()->result_array();
		$this->session->set_userdata('courses', $courses);
		$this->session->set_flashdata('Delete', 'Course deleted successfully');
		redirect('add');
	}

	public function add()
	{
		$this->load->view('/add');
	}

	public function get_course($id)
	{
		$this->load->model('Course');
		$this->session->set_userdata('id', $id);
		$course = $this->Course->get_course_by_id($id)->result_array();
		$this->session->set_userdata('course', $course);
		redirect('deleteCourse');
		// var_dump($course);
		// die("course dump");
	}

	public function deleteCourse()
	{
		$this->load->view('destroy');
	}
}
