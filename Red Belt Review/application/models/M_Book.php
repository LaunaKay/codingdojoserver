<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Book extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addbook($book)
    {
        $this->db->insert('books', $book);
        $book= $this->db->query("SELECT books.id
            FROM books
            WHERE books.name = $book['name']->row_array();
            echo("<pre>");
            var_dump($book);
            die();
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