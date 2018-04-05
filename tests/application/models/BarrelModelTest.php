<?php

/**
 * Test class for Barrel Model
 * @author Will Murphy
 */
class BarrelModelTest extends PHPUnit_Framework_TestCase {
    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('BarrelModel');
        $this->BarrelModel = new BarrelModel();
    }

    
}