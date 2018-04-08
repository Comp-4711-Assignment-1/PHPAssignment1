<?php
/**
 * Model for gun stocks.
 *
 * @author Benny Wang
 * 
 */
class StockModel extends CSV_Model{
    function __construct() {
        parent::__construct('assets/database/StockData.csv','StockID');
    }
}