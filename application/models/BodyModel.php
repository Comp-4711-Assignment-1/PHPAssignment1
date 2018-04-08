<?php
/**
 * Model for gun bodies.
 *
 * @author Benny Wang
 * id,Name,Description,Accuracy,FireRate,Damage,Filename
 */
class BodyModel extends CSV_Model{
    function __construct() {
        parent::__construct('../assets/database/BodyData.csv','id');
    }

    public function rules() {
        $config = array(
            ['field' => 'id', 'label' => 'id', 'rules' => 'integer|required'],
            ['field' => 'name', 'label' => 'Item Name', 'rules' => 'alpha_numeric|required'],
            ['field' => 'desc', 'label' => 'Description', 'rules' => 'alpha_numeric|required'],
            ['field' => 'acc', 'label' => 'Accuracy', 'rules' => 'integer|required'],
            ['field' => 'fr', 'label' => 'Fire Rate', 'rules' => 'integer|required'],
            ['field' => 'dam', 'label' => 'Damage', 'rules' => 'integer|required'],
            ['field' => 'img', 'label' => 'Image', 'rules' => 'alpha_numeric|required'],
        );
        return $config;
    }
}