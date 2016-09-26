<?php

namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Person;

class PersonTest extends \PHPUnit_Framework_TestCase {

  public function testGetGenderString() {
    $person = new Person();
    $person->setGender('F');

    $this->assertEquals('Female', $person->getGenderString(),
      'Gender string representation for female person should be "Female"');
  }

}