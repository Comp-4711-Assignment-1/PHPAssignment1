<?php
/**
 * Model for gun barrels.
 *
 * @author Benny Wang
 * 
 */
class BarrelModel extends CSV_Model{
    function __construct() {
        parent::__construct('../assets/database/BarrelData.csv','id');
    }

    public function rules() {
        $config = array(
            ['field' => 'id', 'label' => 'id', 'rules' => 'integer|required'],
            ['field' => 'name', 'label' => 'Item Name', 'rules' => 'alpha_numeric_spaces|required'],
            ['field' => 'desc', 'label' => 'Description', 'rules' => 'alpha_numeric_spaces|required'],
            ['field' => 'acc', 'label' => 'Accuracy', 'rules' => 'integer|required'],
            ['field' => 'fr', 'label' => 'Fire Rate', 'rules' => 'integer|required'],
            ['field' => 'dam', 'label' => 'Damage', 'rules' => 'integer|required'],
            ['field' => 'img', 'label' => 'Image', 'rules' => 'required'],
        );
        return $config;
    }
}