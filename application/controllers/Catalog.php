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

		$barrelsArray = array();
		$bodiesArray = array();
		$gripsArray = array();
		$sightsArray = array();
		$stocksArray = array();

		// Load barrels
		$this->load->model('BarrelModel');
		$barrels = $this->BarrelModel->all();
		$barrelsArray = $this->addToList($barrels, $barrelsArray);

		// Load bodies
		$this->load->model('BodyModel');
		$bodies = $this->BodyModel->all();
		$bodiesArray = $this->addToList($bodies, $bodiesArray);

		// Load grips
		$this->load->model('GripModel');
		$grips = $this->GripModel->all();
		$gripsArray = $this->addToList($grips, $gripsArray);

		// Load sights
		$this->load->model('SightModel');
		$sights = $this->SightModel->all();
		$sightsArray = $this->addToList($sights, $sightsArray);	

		// Load stock
		$this->load->model('StockModel');
		$stocks = $this->StockModel->all();
		$stocksArray = $this->addToList($stocks, $stocksArray);

		$this->data['barrels'] = $barrelsArray;
		$this->data['bodies'] = $bodiesArray;
		$this->data['grips'] = $gripsArray;
		$this->data['sights'] = $sightsArray;
		$this->data['stocks'] = $stocksArray;
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
				'img' => '<img src="/' . strtolower($n->Filename) . '" class="img-fluid">'
			));
		}

		return $old;
	}
}
