<?php
// tests/AppBundle/Entity/PersonTest.php
namespace Tests\AppBundle\Entity;
 
use AppBundle\Entity\Person;
 
class PersonTest extends \PHPUnit_Framework_TestCase {
  
  public function testFormatName() {
    $person = new Person();
    $person->setGender('F');
    $person->setName('Milica Stevanovic');
    
   
    $this->assertEquals('Mrs. Milica Stevanovic', $person->formatName(),
      'If person is female it should be written Mrs. Milica Stevanovic');
    
    $person = new Person();
    $person->setGender('M');
    $person->setName('Nemanja Cenkovic');
    
    $this->assertEquals('Mr. Nemanja Cenkovic', $person->formatName(),
      'If person is male it should be written Mr. Nemanja Cenkovic');
  }
}
