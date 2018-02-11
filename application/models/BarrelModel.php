<?php
/**
 * Model for gun barrels.
 *
 * @author Benny Wang
 * 
 */
class BarrelModel extends CSV_Model{
    function __construct() {
        parent::__construct('assets/database/BarrelData.csv','BarrelID');
    }
}