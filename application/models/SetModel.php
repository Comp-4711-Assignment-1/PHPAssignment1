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
            ['field' => 'SightID', 'label' => 'sight', 'rules' => 'integer'],
            ['field' => 'BarrelID', 'label' => 'stock', 'rules' => 'integer'],
            ['field' => 'BodyID', 'label' => 'body', 'rules' => 'integer'],
            ['field' => 'StockID', 'label' => 'barrel', 'rules' => 'integer'],
            ['field' => 'GripID', 'label' => 'grip', 'rules' => 'integer'],
        );
        return $config;
    }

}