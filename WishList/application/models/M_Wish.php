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
        $this->db->where('item_id', $wishID);
        $this->db->delete('wishlists');
    }

}