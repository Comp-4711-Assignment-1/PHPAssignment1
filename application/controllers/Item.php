<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends Application
{

	public function Edit($category, $id)
	{
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST)
		{
			return;
		}
		
		$this->data['pagetitle'] = 'Edit ' . $category . " - " . $id;
		$this->data['pagebody'] = 'ItemEdit';

		$this->render();
	}
	
}
