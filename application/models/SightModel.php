<?php
/**
 * Model for gun sights.
 *
 * @author Benny Wang
 * 
 */
class SightModel extends CSV_Model{
    function __construct() {
        parent::__construct('../assets/database/SightData.csv','SightID');
    }
}