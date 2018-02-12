<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/About
	 */
	public function index()
	{
		$teamList = array();
		$this->data['pagetitle'] = 'About';
		$this->data['pagebody'] = 'About';
		array_push($teamList, $this->addTeamMember("Benny Wang"));
		array_push($teamList, $this->addTeamMember("Tim Bruecker"));
		array_push($teamList, $this->addTeamMember("Will Murphy"));
		$this->data['teamMembers'] = $teamList;
		
		$this->render(); 
	}

	/**
	 * Adds a team member.
	 * @return teamMember The new team member
	 */
	function addTeamMember($name) 
	{
		$teamMember = array(
			'name' => $name
		);
		return $teamMember;
	}
}
