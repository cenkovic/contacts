<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="person")
 */
class Person {

  /**
   * Returns gender full string representation
   *
   * @return string
   */
  public function getGenderString() {
    return $this->getGender() === 'M' ? 'Male' : 'Female';
  }

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $name;

  /**
   * @ORM\Column(type="string", length=1)
   */
  protected $gender;


  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set name
   *
   * @param string $name
   *
   * @return Person
   */
  public function setName($name) {
    $this->name = $name;

    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Set gender
   *
   * @param string $gender
   *
   * @return Person
   */
  public function setGender($gender) {
    $this->gender = $gender;

    return $this;
  }

  /**
   * Get gender
   *
   * @return string
   */
  public function getGender() {
    return $this->gender;
  }

}
