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

		$itemArray = array();

		if($category == 'barrel')
		{
			$this->load->model('BarrelModel');
			$item = $this->BarrelModel->get($id);
		}
		else if($category == 'body')
		{
			$this->load->model('BodyModel');
			$item = $this->BodyModel->all();
		}
		else if($category == 'grip')
		{
			$this->load->model('GripModel');
			$item = $this->GripModel->all();
		}
		else if($category == 'sight')
		{
			$this->load->model('SightModel');
			$item = $this->SightModel->all();
		}
		else if($category == 'stock')
		{
			$this->load->model('StockModel');
			$item = $this->StockModel->all();
		}
		
		$this->data['id'] = $id;
		$this->data['category'] = $category;
		$this->data['name'] = $item->Name;
		$this->data['desc'] = $item->Description;
		$this->data['acc'] = $item->Accuracy;
		$this->data['fr'] = $item->FireRate;
		$this->data['dam'] = $item->Damage;
		$this->data['img'] = '<img src="/' . strtolower($item->Filename) . '" class="img-fluid">';
		$this->render();
	}

	public function save($category, $id)
	{
		if($category == 'barrel')
		{
			$this->load->model('BarrelModel');
			$this->load->library('form_validation');
			$this->form_validation->set_rules($this->SetModel->rules());
		}
		else if($category == 'body')
		{
			$this->load->model('BodyModel');
			$this->load->library('form_validation');
			$this->form_validation->set_rules($this->SetModel->rules());
		}
		else if($category == 'grip')
		{
			$this->load->model('GripModel');
			$this->load->library('form_validation');
			$this->form_validation->set_rules($this->SetModel->rules());
		}
		else if($category == 'sight')
		{
			$this->load->model('SightModel');
			$this->load->library('form_validation');
			$this->form_validation->set_rules($this->SetModel->rules());
		}
		else if($category == 'stock')
		{
			$this->load->model('StockModel');
			$this->load->library('form_validation');
			$this->form_validation->set_rules($this->SetModel->rules());
		}

		
		
	}
}
	

