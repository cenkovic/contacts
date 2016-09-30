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
 * Defines application features from the specific context.
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

  public function elementAttributeExists($selectorType, $selector, $attribute) {
    $element = $this->assertSession()->elementExists($selectorType, $selector);
    if (!$element->hasAttribute($attribute)) {
      $message = sprintf('The attribute "%s" was not found in the element matching %s "%s".', $attribute, $selectorType, $selector);
      throw new ExpectationException($message, $this->getSession());
    }
    return $element;
  }

  /**
   * @When I check contacts details for :arg1 then I should see:
   */
  public function iCheckContactsDetailsForThenIShouldSee($arg1, TableNode $table) {
    foreach ($table as $info) {
      $this->assertSession()->elementContains('css', 'div[contact="' . $arg1 . '"]', $this->fixStepArgument($info['Info']));
    }
   

}
}