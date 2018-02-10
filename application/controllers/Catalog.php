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
		
		$this->load->model('ItemModel');

		$allItems = $this->ItemModel->all();
		$itemsArray = array();

		foreach ($allItems as $currentItem)
		{
			array_push($itemsArray, array(
				'name' => $currentItem->name,
				'desc' => $currentItem->desc,
				'attr1' => $currentItem->attr1,
				'attr2' => $currentItem->attr2,
				'attr3' => $currentItem->attr3,
				'img' => '<img src="' . $currentItem->img . '">'
			));
		}

		$this->data['items'] = $itemsArray;

		$this->render(); 
	}
}
