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

		$barrelsArray = array();
		$bodiesArray = array();
		$gripsArray = array();
		$sightsArray = array();
		$stocksArray = array();

		// Load barrels
		$this->load->model('BarrelModel');
		$barrels = $this->BarrelModel->all();
		$barrelsArray = $this->addToList(CATEGORY_BARREL, $barrels, $barrelsArray, $role);

		// Load bodies
		$this->load->model('BodyModel');
		$bodies = $this->BodyModel->all();
		$bodiesArray = $this->addToList(CATEGORY_BODY, $bodies, $bodiesArray, $role);

		// Load grips
		$this->load->model('GripModel');
		$grips = $this->GripModel->all();
		$gripsArray = $this->addToList(CATEGORY_GRIP, $grips, $gripsArray, $role);

		// Load sights
		$this->load->model('SightModel');
		$sights = $this->SightModel->all();
		$sightsArray = $this->addToList(CATEGORY_SIGHT, $sights, $sightsArray, $role);	

		// Load stock
		$this->load->model('StockModel');
		$stocks = $this->StockModel->all();
		$stocksArray = $this->addToList(CATEGORY_STOCK, $stocks, $stocksArray, $role);

		$this->data['barrels'] = $barrelsArray;
		$this->data['bodies'] = $bodiesArray;
		$this->data['grips'] = $gripsArray;
		$this->data['sights'] = $sightsArray;
		$this->data['stocks'] = $stocksArray;
		$this->render(); 
	}

	public function addToList($category, $new, $old, $role)
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
				$tmp['edit'] = '<a href="/Item/Edit/' . $category . '/' . $n->id . '" role="button" class="btn btn-lg btn-danger">Edit</a>';
			}

			array_push($old, $tmp);
		}

		return $old;
	}
}
