<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function addMessage()
    {
        $description = $this->input->post(NULL, TRUE);
        $this->load->model('Post');
        $this->Post->addPost($description);
        redirect ('/');
    }

    public function postview_load()
    {
        $this->load->model('Post');
    	$posts = array('posts' =>$this->Post->displayPosts());
 		$this->load->view('postview', $posts);
    }
}
