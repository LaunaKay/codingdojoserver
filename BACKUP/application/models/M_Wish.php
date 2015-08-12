<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Wish extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addwish($wish)
    {
        $id = $this->session->userdata('id');
        $wish = array
            (
            'item' => $wish['item'],
            'user_id' => $id['id']
            );
        $this->db->insert('wishes', $wish);
    }

    public function removewish($wishID)
    {
        $this->db->where('id', $wishID);
        $this->db->delete('wishes');
        $this->db->where('wish_id', $wishID);
        $this->db->delete('users');
    }

    public function removefromlist($wishID)
    {
        $id = $this->session->userdata('id');
        $this->db->where('item_id', $wishID);
        $this->db->where('user_id', $id['id']);
        $this->db->delete('wishlists');
    }

    public function addtolist($wishID)
    {
        $id = $this->session->userdata('id');
        $wishlist = array
        (
            'item_id' => $wishID,
            'user_id' => $id['id']
        );
        $this->db->insert('wishlists', $wishlist);
    }
}