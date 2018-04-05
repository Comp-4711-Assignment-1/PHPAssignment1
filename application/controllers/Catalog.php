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
		$role = $this->session->userdata('userrole');
		$this->data['pagetitle'] = 'App name - Catalog' . " - " . $role;
		$this->data['pagebody'] = 'Catalog';

		$itemsArray = array();

		// Load barrels
		$this->load->model('BarrelModel');
		$barrels = $this->BarrelModel->all();
		$itemsArray = $this->addToList($barrels, $itemsArray, $role);

		// Load bodies
		$this->load->model('BodyModel');
		$bodies = $this->BodyModel->all();
		$itemsArray = $this->addToList($bodies, $itemsArray, $role);

		// Load grips
		$this->load->model('GripModel');
		$grips = $this->GripModel->all();
		$itemsArray = $this->addToList($grips, $itemsArray, $role);

		// Load sights
		$this->load->model('SightModel');
		$sights = $this->SightModel->all();
		$itemsArray = $this->addToList($sights, $itemsArray, $role);	

		// Load stock
		$this->load->model('StockModel');
		$stocks = $this->StockModel->all();
		$itemsArray = $this->addToList($stocks, $itemsArray, $role);

		$this->data['items'] = $itemsArray;
		$this->render(); 
	}

	public function addToList($new, $old, $role)
	{
		foreach ($new as $n)
		{
			$tmp = array(
				'name' => $n->Name,
				'desc' => $n->Description,
				'acc' => $n->Accuracy,
				'fr' => $n->FireRate,
				'dmg' => $n->Damage,
				'img' => '<img src="/' . strtolower($n->Filename) . '" class="img-fluid">',
				'edit' => ''
			);

			if ($role == ROLE_ADMIN)
			{
				$tmp['edit'] = '<a href="" role="button" class="btn btn-lg btn-danger">Edit</a>';
			}

			array_push($old, $tmp);
		}

		return $old;
	}
}
