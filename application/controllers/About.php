<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/About
	 */
	public function index()
	{
		$this->data['pagetitle'] = 'App name - About';
		$this->data['pagebody'] = 'About';
		$this->render(); 
	}
}
