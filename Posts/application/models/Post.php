<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   public function addPost($description)
    {
        $this->db->insert('posts', $description);
    }

    public function displayPosts()
    {
        return $this->db->query("SELECT description FROM posts")->result_array();
    }
}