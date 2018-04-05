<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Set extends Application
{

	public function Create()
	{
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST)
		{
			return;
		}

		$this->data['pagetitle'] = 'Create';
		$this->data['pagebody'] = 'SetCreate';

		$this->render();
	}

	public function Edit($set)
	{
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST)
		{
			return;
		}
		
		$this->data['pagetitle'] = 'Edit Set ' . $set;
		$this->data['pagebody'] = 'SetEdit';

		$this->render();
	}
	
}
