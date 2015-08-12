<?php

$config = array(
        'registration' => array(
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'required|trim|min_length[3]'
                ),
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required|trim|alpha_dash|min_length[3]'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|trim|min_length[8]'
                ),
                array(
                        'field' => 'password_confirmation',
                        'label' => 'Password Confirmation',
                        'rules' => 'required|trim|matches[password]'
                ),
        ),
        'login' => array(
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required|alpha_dash|trim|min_length[3]'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|trim|min_length[8]'
                )
        ),
        'create' => array(
                array(
                        'field' => 'item',
                        'label' => 'Item/Product',
                        'rules' => 'required|trim|min_length[3]'
                )
        )
);