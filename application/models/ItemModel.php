<?php
/**
 * Description of an item
 *
 * @author Benny Wang
 * 
 */
class ItemModel extends CSV_Model{
    function __construct() {
        parent::__construct('assets/csv/Item.csv','ItemId');
    }
}