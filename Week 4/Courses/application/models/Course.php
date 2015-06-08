<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }

    public function get_all_courses()
    {
        return $this->db->query("SELECT * from courses ORDER BY date_added DESC");
    }

        public function get_course_by_id($id)
    {
        return $this->db->query("SELECT * from courses WHERE id = '{$id}'");
    }

    public function destroyCourse()
    {
        $this->db->where('id', $this->session->userdata('id'));
        $this->db->delete('courses');
    }

    public function addCourse()
    {
        $this->db->insert('courses', $this->session->userdata('addCourse'));
    }
}