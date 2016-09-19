<?php


namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Person;

class LoadPersonData extends AbstractFixture  implements OrderedFixtureInterface  {
  public function load(ObjectManager $manager) {

    foreach($this->_getPersonData() as $personData) {
      $person = new Person();
      $person->setName($personData['name']);
      $person->setGender($personData['gender']);

      $manager->persist($person);
      $this->addReference($personData['name'], $person);
    }

    $manager->flush();
  }

  private function _getPersonData() {
    return array(
      array(
        'name' => 'Nemanja Cenković',
        'gender' => 'M',
      ),
      array(
        'name' => 'Nenad Marjanović',
        'gender' => 'M',
      ),
      array(
        'name' => 'Jovan Jokić',
        'gender' => 'M',
      ),
      array(
        'name' => 'Ivan Dudaš',
        'gender' => 'M',
      ),
      array(
        'name' => 'Daliborka Ćirić',
        'gender' => 'F',
      ),
      array(
        'name' => 'Milica Stevanović',
        'gender' => 'F',
      ),
      array(
        'name' => 'Jovica Sekulić',
        'gender' => 'M',
      ),
      array(
        'name' => 'Peki Petrović',
        'gender' => 'M',
      ),
    );
  }

  /**
   * Get the order of this fixture
   *
   * @return integer
   */
  public function getOrder() {
    return 1;
  }
}