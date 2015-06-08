<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductM extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
    }

    public function get_all_products()
    {
        return $this->db->query("SELECT * from products ORDER BY date_added DESC");
    }

    public function new_product()
    {
        $this->db->insert('products', $this->session->userdata('new_product'));
    }

    public function remove_product($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products');
    }

    public function get_product_by_id($id)
    {
        return $this->db->query("SELECT * from products WHERE id = '{$id}'");
    }

    public function edit_product($id)
    {
        $this->db->where('id', $id);
        $this->db->update('products', $this->session->userdata('edit_product'));
    }





}