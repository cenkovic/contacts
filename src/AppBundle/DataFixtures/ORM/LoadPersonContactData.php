<?php


namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Person;
use AppBundle\Entity\PersonContact;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPersonContactData extends AbstractFixture  implements OrderedFixtureInterface  {
  public function load(ObjectManager $manager) {

    foreach($this->_getPersonContactData() as $personContactData) {
      $personContact = new PersonContact();
      /** @var Person $person */
      $person = $this->getReference($personContactData['person']);
      $personContact->setPerson($person);
      $personContact->setType($personContactData['type']);
      $personContact->setValue($personContactData['value']);

      $manager->persist($personContact);
    }

    $manager->flush();
  }

  private function _getPersonContactData() {
    return array(
      array(
        'person' => 'Nemanja Cenković',
        'type' => 'phone',
        'value' => '+381641566311',
      ),
      array(
        'person' => 'Nemanja Cenković',
        'type' => 'email',
        'value' => 'cenkovic@propulsionapp.com',
      ),
      array(
        'person' => 'Nemanja Cenković',
        'type' => 'address',
        'value' => 'Nasticeva 6/6, Beograd',
      ),
      array(
        'person' => 'Nenad Marjanović',
        'type' => 'phone',
        'value' => '+38111221122',
      ),
      array(
        'person' => 'Nenad Marjanović',
        'type' => 'email',
        'value' => 'marjanovic@propulsionapp.com',
      ),
      array(
        'person' => 'Daliborka Ćirić',
        'type' => 'phone',
        'value' => '001191122112',
      ),
      array(
        'person' => 'Milica Stevanović',
        'type' => 'email',
        'value' => 'milica@propulsionapp.com',
      ),
      array(
        'person' => 'Jovica Sekulić',
        'type' => 'address',
        'value' => 'Bogu iza nogu',
      ),
    );
  }

  /**
   * Get the order of this fixture
   *
   * @return integer
   */
  public function getOrder() {
    return 2;
  }
}