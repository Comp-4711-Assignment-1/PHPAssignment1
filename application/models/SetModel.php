<?php
/**
 * Model for gun barrels.
 *
 * @author Benny Wang
 * 
 */
class SetModel extends CSV_Model{
    function __construct() {
        parent::__construct('../assets/database/SetData.csv','id');
    }

    public function rules() {
        $config = array(
            ['field' => 'sight', 'label' => 'sightID', 'rules' => 'integer'],
            ['field' => 'stock', 'label' => 'stockID', 'rules' => 'integer'],
            ['field' => 'body', 'label' => 'bodyID', 'rules' => 'integer'],
            ['field' => 'barrel', 'label' => 'barrelID', 'rules' => 'integer'],
            ['field' => 'grip', 'label' => 'gripID', 'rules' => 'integer'],
        );
        return $config;
    }

}