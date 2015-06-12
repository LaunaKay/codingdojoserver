<?php

$config = array(
        'registration' => array(
                array(
                        'field' => 'first_name',
                        'label' => 'First Name',
                        'rules' => 'required|trim|alpha'
                ),
                array(
                        'field' => 'last_name',
                        'label' => 'Last Name',
                        'rules' => 'required|trim|alpha'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|min_length[8]|MD5'
                ),
                array(
                        'field' => 'passwordconf',
                        'label' => 'Password Confirmation',
                        'rules' => 'matches[password]'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|valid_email'
        ),
        'login' => array(
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|min_length[8]|MD5'
                )
        )
        )
);