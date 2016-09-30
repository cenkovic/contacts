<?php

use Behat\MinkExtension\Context\MinkContext;
use Behat\Gherkin\Node\TableNode;
use Behat\Testwork\Call\Exception\FatalThrowableError;
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
  
  /**
     * @Then I should see links:
     */
    public function iShouldSeeLinks(TableNode $table)
    {
        foreach($table as $value) {
            $this->assertPageContainsText($value['Link']);
        }
    }
    /**
     * @When I check contacts details for :arg1 then I should see:
     */
    public function iCheckContactsDetailsForThenIShouldSee($arg1, TableNode $table)
    {
        foreach($table as $value){
            $this->assertSession()->elementContains('css', 'div[contact="'.$arg1.'"]', $this->fixStepArgument($value['Info']));
        }
    }
}
