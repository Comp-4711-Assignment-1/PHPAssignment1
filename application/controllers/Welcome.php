<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->equipSet(1);
	}

	public function equipSet($key)
	{
		$role = $this->session->userdata('userrole');
		$this->data['pagetitle'] = 'Home - Set ' . $key . " - " . $role;
		$this->data['pagebody'] = 'Home';

		$this->load->model('SetModel');
		$set = $this->SetModel->get($key);
		$itemsList = array();

		$sight = $this->getSight($set->SightID);
		$itemsList = $this->addToList($sight, $itemsList);

		$stock = $this->getStock($set->StockID);
		$itemsList = $this->addToList($stock, $itemsList);

		$body = $this->getBody($set->BodyID);
		$itemsList = $this->addToList($body, $itemsList);

		$barrel = $this->getBarrel($set->BarrelID);
		$itemsList = $this->addToList($barrel, $itemsList);

		$grip = $this->getGrip($set->GripID);
		$itemsList = $this->addToList($grip, $itemsList);

		$totalAcc = $sight->Accuracy + $stock->Accuracy + $body->Accuracy + $barrel->Accuracy + $grip->Accuracy;
		$totalFr = $sight->FireRate + $stock->FireRate + $body->FireRate + $barrel->FireRate + $grip->FireRate;
		$totalDmg = $sight->Damage + $stock->Damage + $body->Damage + $barrel->Damage + $grip->Damage;

		$this->data['items'] = $itemsList;
		$this->data['tAcc'] = $totalAcc;
		$this->data['tFr'] = $totalFr; 
		$this->data['tDmg'] = $totalDmg;

		if ($role == ROLE_USER || $role == ROLE_ADMIN)
		{
			$this->data['customize'] = '<a href="/Set/edit/' . $key . '" role="button" class="btn btn-lg btn-warning" style="color: white;">Edit Set</a>';
			$this->data['create'] = '<a href="/Set/create" role="button" class="btn btn-lg btn-success">Create Set</a>';
		}
		else
		{
			$this->data['customize'] = '';
			$this->data['create'] = '';
		}

		$this->loadSets();

		$this->render(); 
	}

	private function loadSets()
	{
		$this->load->model('SetModel');
		
		$sets = array();
		foreach ($this->SetModel->all() as $set)
		{
			array_push($sets, array('set' => '<a class="dropdown-item" href="/set/' . $set->id . '">Set ' . $set->id . '</a>'));
		}
		$this->data['sets'] = $sets;
	}

	public function getSight($key)
	{
		$this->load->model('SightModel');
		$x = $this->SightModel->get($key);
		$this->data['sight'] = '<img src="/' . strtolower($x->Filename) . '"
									style="position: absolute; 
									width: 190px; height: 50px; 
									top: 120px; left: 250px;" />';
		return $x;
	}

	public function getStock($key)
	{
		$this->load->model('StockModel');
		$x = $this->StockModel->get($key);
		$this->data['stock'] = '<img src="/' . strtolower($x->Filename) . '"
									style="position: absolute; 
									width: 150px; height: 91px; 
									top: 250px; left: 40px;" />';
		return $x;
	}

	public function getBody($key)
	{
		$this->load->model('BodyModel');
		$x = $this->BodyModel->get($key);
		$this->data['body'] = '<img src="/' . strtolower($x->Filename) . '"
									style="position: absolute; 
									width: 240px; height: 70px; 
									top: 260px; left: 228px;" />';
		return $x;
	}

	public function getBarrel($key)
	{
		$this->load->model('BarrelModel');
		$x = $this->BarrelModel->get($key);
		$this->data['barrel'] = '<img src="/' . strtolower($x->Filename) . '"
									style="position: absolute; 
									width: 150px; height: 40px; 
									top: 262px; left: 492px;" />';
		return $x;
	}

	public function getGrip($key)
	{
		$this->load->model('GripModel');
		$x = $this->GripModel->get($key);
		$this->data['grip'] = '<img src="/' . strtolower($x->Filename) . '"
									style="position: absolute; 
									width: 100px; height: 135px; 
									top: 400px; left: 290px;" />';
		return $x;
	}

	public function addToList($item, $list)
	{
		$array = array(
			'name' => $item->Name,
			'desc' => $item->Description,
			'acc' => $item->Accuracy,
			'fr' => $item->FireRate,
			'dmg' => $item->Damage
		);

		array_push($list, $array);

		return $list;
	}
}
