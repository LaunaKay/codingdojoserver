<?php

class Users extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->output->enable_profiler(FALSE);
    }

public function new_user()
{
    echo "This is the Users controller new_user method.";
}

}