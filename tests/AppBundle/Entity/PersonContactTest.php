<?php

namespace Tests\AppBundle\Entity;
 
use AppBundle\Entity\PersonContact;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonTest
 *
 * @author daliborka
 */
class PersonContactTest extends \PHPUnit_Framework_TestCase {
    //put your code here
    
    public function testSetIcons(){
        $person = new PersonContact();
       // $person->setType('email');
       // $person->setType('phone');
        $person->setType('address');
        
       // $this->assertEquals('envelope', $person->iconForType(),'icon representation for email should be "envelope"');
       // $this->assertEquals('phone', $person->iconForType(),'icon representation for email should be "phone"');
        $this->assertEquals('map-marker', $person->iconForType(),'icon representation for email should be "map-marker"');
    }
        
}
