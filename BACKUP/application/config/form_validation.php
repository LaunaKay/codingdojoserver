<?php

$config = array(
        'registration' => array(
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'required|trim|min_length[3]'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|trim|valid_email'
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
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|trim|min_length[3]'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|trim|min_length[8]'
                )
        ),
        'create' => array(
                array(
                        'field' => 'task',
                        'label' => 'Task',
                        'rules' => 'required|trim|min_length[3]'
                ),
                array(
                        'field' => 'date',
                        'label' => 'Date',
                        'rules' => 'required|trim|min_length[3]'
                ),
                array(
                        'field' => 'time',
                        'label' => 'Time',
                        'rules' => 'required|trim|min_length[3]'
                )

        )
);