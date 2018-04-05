<?php
/**
 * Model for gun barrels.
 *
 * @author Benny Wang
 * 
 */
class SetModel extends CSV_Model{
    function __construct() {
        parent::__construct('assets/database/SetData.csv','id');
    }
}