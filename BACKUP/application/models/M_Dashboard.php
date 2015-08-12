<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Dashboard extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getToday($id)
    //get appointments for specific user for today only
    {
        return $this->db->query("SELECT task,time,status,tasks.id
                                    FROM tasks
                                    LEFT JOIN users ON users.id = tasks.user_id
                                    WHERE tasks.date = DATE(NOW())
                                    AND tasks.user_id = '{$id}'")->result_array();
    }

    public function getFuture($id)
    //get appointments for specific user for future only
    {
        return $this->db->query("SELECT task,time,date,tasks.id
                                    FROM tasks
                                    LEFT JOIN users ON users.id = tasks.user_id
                                    WHERE tasks.date < DATE(NOW())
                                    AND tasks.user_id = '{$id}'")->result_array();
    }

    public function getTask($task)
    {
        return $this->db->query("SELECT task,time,date,tasks.id, status
                                    FROM tasks
                                    WHERE tasks.id = '{$task}'")->row_array();
    }

    public function addTask($task)
    //add task to DB based on user id
    {
        $this->db->insert('tasks', $task);
    }

    public function deleteTask($task)
    //delete task from DB based on task id
    {
        $this->db->where('id', $task['id']);
        $this->db->delete('tasks');
    }

    public function editTask($task)
    //edit task in DB based on form input and task id
    {
        $this->db->where('id', $task['id']);
        $this->db->update('tasks', $task);
    }
}