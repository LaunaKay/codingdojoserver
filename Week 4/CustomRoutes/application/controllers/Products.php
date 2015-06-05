<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(FALSE);
	}

	public function show($num1)
	{
		echo "This is the Products controller with the show method. You gave me " . $num1 . ".";
	}

	public function edit($num1)
	{
		echo "This is the Products controller with the edit method. You gave me " . $num1 . ".";
	}
}