<?php

/**
 * Test class for Barrel Model
 * @author Will Murphy
 */
class BarrelModelTest extends PHPUnit_Framework_TestCase {
    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('BarrelModel');
        $this->item = new BarrelModel();
        $this->item->BarrelID = 3;
        $this->item->Name = 'Stock Barrel';
        $this->item->Description = 'Short Range Barrel';
        $this->item->Accuracy = -2;
        $this->item->FireRate = 10;
        $this->item->Damage = 1;    
    }

    function testSetup() {
        $this->assertSame('Stock Barrel', $this->item->Name);
        $this->assertSame(3, $this->item->BarrelID);
    }
    
}