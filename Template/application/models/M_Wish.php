<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Wish extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addwish($wish)
    //add wish to DB - need to add to wishlist table as well for many to many
    {
        $id = $this->session->userdata('id');
        $wish = array
            (
            'item' => $wish['item'],
            'user_id' => $id['id']
            );
        $this->db->insert('wishes', $wish);
        //insert to wishlist on correct keys
    }

    public function removewish($wishID)
    {
        $this->db->where('id', $wishID);
        $this->db->delete('wishes');
        $this->db->where('item_id', $wishID);
        $this->db->delete('wishlists');
        //remove from all applicable lists unless adding foreign keys
    }

}