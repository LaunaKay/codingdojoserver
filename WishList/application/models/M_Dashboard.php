<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Dashboard extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getwishlist($id)
    {
        return $this->db->query("SELECT wishlists.id, wishes.item, wishes.id, users.name, wishes.date_added
            FROM wishlists
            LEFT JOIN wishes ON wishes.id = wishlists.item_id
            LEFT JOIN users ON users.id = wishlists.user_id
            WHERE wishlists.user_id = '{$id}'")->result_array();
    }

    public function getwishes()
    {
        return $this->db->query("SELECT wishes.item, users.name, wishes.date_added
                FROM wishes
                LEFT JOIN users ON users.id = wishes.user_id")->result_array();
    }

    public function getitem($itemID)
    {
        return $this->db->query("SELECT wishes.item, users.name
            FROM wishes
            LEFT JOIN users ON users.id = wishes.user_id
            WHERE wishes.id = '{$itemID}'")->result_array();
    }
}