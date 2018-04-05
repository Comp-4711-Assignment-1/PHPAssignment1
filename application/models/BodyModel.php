<?php
/**
 * Model for gun bodies.
 *
 * @author Benny Wang
 * 
 */
class BodyModel extends CSV_Model{
    function __construct() {
        parent::__construct('assets/database/BodyData.csv','id');
    }
}