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

		$itemsArray = array();

		// Load barrels
		$this->load->model('BarrelModel');
		$barrels = $this->BarrelModel->all();
		$itemsArray = $this->addToList($barrels, $itemsArray);

		// Load bodies
		$this->load->model('BodyModel');
		$bodies = $this->BodyModel->all();
		$itemsArray = $this->addToList($bodies, $itemsArray);

		// Load grips
		$this->load->model('GripModel');
		$grips = $this->GripModel->all();
		$itemsArray = $this->addToList($grips, $itemsArray);

		// Load sights
		$this->load->model('SightModel');
		$sights = $this->SightModel->all();
		$itemsArray = $this->addToList($sights, $itemsArray);	

		// Load stock
		$this->load->model('StockModel');
		$stocks = $this->StockModel->all();
		$itemsArray = $this->addToList($stocks, $itemsArray);

		$this->data['items'] = $itemsArray;
		$this->render(); 
	}

	public function addToList($new, $old)
	{
		foreach ($new as $n)
		{
			array_push($old, array(
				'name' => $n->Name,
				'desc' => $n->Description,
				'acc' => $n->Accuracy,
				'fr' => $n->FireRate,
				'dmg' => $n->Damage,
				'img' => '<img src="' . $n->Filename . '" class="img-fluid">'
			));
		}

		return $old;
	}
}
