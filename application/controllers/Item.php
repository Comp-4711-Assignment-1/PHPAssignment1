<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends Application
{

	public function edit($category, $id)
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
			$item = $this->BodyModel->get($id);
		}
		else if($category == 'grip')
		{
			$this->load->model('GripModel');
			$item = $this->GripModel->get($id);
		}
		else if($category == 'sight')
		{
			$this->load->model('SightModel');
			$item = $this->SightModel->get($id);
		}
		else if($category == 'stock')
		{
			$this->load->model('StockModel');
			$item = $this->StockModel->get($id);
		}
		
		$this->data['id'] = $id;
		$this->data['category'] = $category;
		$this->data['name'] = $item->Name;
		$this->data['desc'] = $item->Description;
		$this->data['acc'] = $item->Accuracy;
		$this->data['fr'] = $item->FireRate;
		$this->data['dam'] = $item->Damage;
		$this->data['img'] = strtolower($item->Filename);
		$this->render();
	}

	public function save()
	{
		$role = $this->session->userdata('userrole');
		if ($role == ROLE_GUEST)
		{
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
			return;
		}

		$this->load->library('form_validation');
		$set = $this->input->post();
		$set = (object) $set;
		$category = $set->category;
		unset($set->category);


		if($category == 'barrel')
		{
			
			$this->load->model('BarrelModel');
			$this->form_validation->set_rules($this->BarrelModel->rules());

			if ($this->form_validation->run())
			{
				$this->BarrelModel->update($set);
				redirect('/Catalog/');
			} 
			else
			{
				$errors = validation_errors();
				echo $errors;
			}
		}
		else if($category == 'body')
		{
			$this->load->model('BodyModel');
			$this->form_validation->set_rules($this->BodyModel->rules());
			
			if ($this->form_validation->run())
			{
				$this->BodyModel->update($set);
				redirect('/Catalog/');
			} 
			else
			{
				$errors = validation_errors();
				echo $errors;
			}
		}
		else if($category == 'grip')
		{
			$this->load->model('GripModel');
			$this->form_validation->set_rules($this->GripModel->rules());
			
			if ($this->form_validation->run())
			{
				$this->GripModel->update($set);
				redirect('/Catalog/');
			} 
			else
			{
				$errors = validation_errors();
				echo $errors;
			}
		}
		else if($category == 'sight')
		{
			$this->load->model('SightModel');
			$this->form_validation->set_rules($this->SightModel->rules());
			
			if ($this->form_validation->run())
			{
				$this->SightModel->update($set);
				redirect('/Catalog/');
			} 
			else
			{
				$errors = validation_errors();
				echo $errors;
			}
		}
		else if($category == 'stock')
		{
			$this->load->model('StockModel');
			$this->form_validation->set_rules($this->StockModel->rules());
			
			if ($this->form_validation->run())
			{
				$this->StockModel->update($set);
				redirect('/Catalog/');
			} 
			else
			{
				$errors = validation_errors();
				echo $errors;
			}
		}

		
		
	}
}
	

