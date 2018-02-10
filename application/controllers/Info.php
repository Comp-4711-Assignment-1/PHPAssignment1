<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/info
	 */
	public function index()
	{
		$scenario = "Some scenario";
		header("Content-type: application/json");
		echo json_encode($scenario);
	}

	public function category($key)
	{

	}

	public function catalog($key)
	{

	}

	public function bundle($key)
	{

	}
}
