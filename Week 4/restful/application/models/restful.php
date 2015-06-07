<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class restful extends CI_Model
{
    public function __construct()
	{
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }

    public function m_create()
//run query to insert new product taking session data from c_create
    {
    	$this->db->insert('products', $this->session->userdata('new_product'));
    }

    public function m_get_all_products()
//run query to get all products currently in DB for display
    {
    	return $this->db->query("SELECT * FROM products ORDER BY date_added DESC");
    }
}
?>