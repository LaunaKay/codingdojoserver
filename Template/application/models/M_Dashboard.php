<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Dashboard extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getwishlist($id)
    //get wishlist for specific user
    {
        return $this->db->query("SELECT wishes.item, (SELECT users.name FROM users WHERE wishes.user_id = users.id) as NAME, DATE_FORMAT(wishes.date_added, '%M, %d, %Y') as date_added, wishes.id
                FROM wishes
                LEFT JOIN wishlists ON wishlists.item_id = wishes.id
                LEFT JOIN users ON wishlists.user_id = users.id
                WHERE '{$id}'  = wishlists.user_id")->result_array();
    }

    public function getadded($id)
    //get created items for specific user
    {
        return $this->db->query("SELECT wishes.item, users.name, wishes.id, DATE_FORMAT(wishes.date_added, '%M %d, %Y') as date_added
            FROM wishes
            LEFT JOIN users ON users.id = wishes.user_id
            WHERE wishes.user_id = '{$id}'")->result_array();
    }

    public function getwishes($id)
    //get all wishes except for those on user's wishlist
    {
        return $this->db->query("SELECT wishes.item, (SELECT users.name FROM users WHERE wishes.user_id = users.id) AS NAME, wishes.id, DATE_FORMAT(wishes.date_added, '%M %d, %Y') as date_added
            FROM wishes
            LEFT JOIN wishlists ON wishes.id = wishlists.item_id
            LEFT JOIN users ON wishlists.user_id = users.id
            WHERE '{$id}' NOT IN (SELECT user_id FROM wishlists WHERE wishes.id = wishlists.item_id)
            AND '{$id}' NOT IN (wishes.user_id)
            GROUP BY wishes.item") ->result_array();
    }


    public function getitem($itemID)
    //get single wishlist item
    {
        return $this->db->query("SELECT wishes.item, users.name
            FROM wishes
            LEFT JOIN wishlists on wishes.id = wishlists.item_id
            LEFT JOIN users ON users.id = wishlists.user_id
            WHERE wishes.id = '{$itemID}'")->result_array();
    }
}