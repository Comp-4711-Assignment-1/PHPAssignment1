<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/Catalog
	 */
	public function index()
	{
		$this->data['pagetitle'] = 'App name - Catalog';
		$this->data['pagebody'] = 'Catalog';
		$this->render(); 
	}
}
