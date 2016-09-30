<?php

use Behat\MinkExtension\Context\MinkContext;
use Behat\Gherkin\Node\TableNode;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Mink\Exception\ElementNotFoundException;
use Behat\Mink\Exception\ExpectationException;
use Behat\MinkExtension\Context\RawMinkContext;
use Behat\Mink\Element\NodeElement;
use Behat\Behat\Context\Step;

/**
 * Defines application featuh ures from the specific context.
 */
class FeatureContext extends MinkContext {

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct() {
        
    }

    /**
     * @Then I should see gender detail for my contacts:
     */
    public function iShouldSeeGenderDetailForMyContacts(TableNode $table) {
        foreach ($table as $info) {
            $this->assertSession()->elementContains('css', 'div[contact="' . $info['Contact'] . '"]', $info['Contact']);
            $this->assertSession()->elementContains('css', 'div[contact="' . $info['Contact'] . '"] > h5.person-gender > span', $this->fixStepArgument($info['Gender']));
        }
    }

}
