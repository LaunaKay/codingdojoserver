<?php

class Sessions extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
    }

    public function new_session ()
    {
        Echo "This is the new_session method in the Sessions controller.";
    }

    public function destroy ()
    {
        Echo "This is the destroy method in the Sessions controller.";
    }
}