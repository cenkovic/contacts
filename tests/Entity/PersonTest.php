<?php

use AppBundle\Entity\Person;
use AppBundle\Entity\PersonContact;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonTest
 *
 * @author danilo
 */
class PersonContactTest extends \PHPUnit_Framework_TestCase{
    
    public function testPersoneNubmer() {
        $p = new PersonContact();
        
        $p ->setType("phone");
        $p ->setValue("+381641565875");
        $this->assertEquals("+381(64)1565875", $p->getFormatValue(),"Number representation for +381641565875 should be +381(64)1565875");
        
        $p ->setType("email");
        $p ->setValue("daniloa@grebovic.com");
        $this->assertEquals("daniloa@grebovic.com", $p->getFormatValue());
       
        
        
    }
    
    
}
