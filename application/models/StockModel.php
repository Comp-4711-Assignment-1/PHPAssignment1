<?php
/**
 * Model for gun stocks.
 *
 * @author Benny Wang
 * 
 */
class SightModel extends CSV_Model{
    function __construct() {
        parent::__construct('assets/database/StockModel.csv','StockID');
    }
}