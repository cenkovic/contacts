<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="person_contact")
 */
class PersonContact {

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Person")
     */
    protected $person;

    /**
     * @ORM\Column(type="string", length=100)
     * @ORM\Id
     */
    protected $value;

    /**
     * @ORM\Column(type="string", length=100)
     * @ORM\Id
     */
    protected $type;

    /**
     * Set value
     *
     * @param string $value
     *
     * @return PersonContact
     */
    public function setValue($value) {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return PersonContact
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set person
     *
     * @param Person $person
     *
     * @return PersonContact
     */
    public function setPerson(Person $person) {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return Person
     */
    public function getPerson() {
        return $this->person;
    }

    public function iconForType() {
        switch ($this->getType()) {
            case 'email':
                return 'envelope';
            case 'phone':
                return 'phone';
            case 'address':
                return 'map-marker';
        }
    }

}
