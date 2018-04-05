<?php
/**
 * Model for gun grips.
 *
 * @author Benny Wang
 * 
 */
class GripModel extends CSV_Model{
    function __construct() {
        parent::__construct('assets/database/GripData.csv','id');
    }
}