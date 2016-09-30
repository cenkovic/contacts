Feature: My Contact Detil
  In order to contact my friend
  As a contact list owner
  I need to be able to see single contact information

  Scenario: Single contact detail
    Given I am on the homepage
     When I check contacts details for "Nemanja Cenković" then I should see:
      | Info                       |
      | +381641566311              |
      | cenkovic@propulsionapp.com |
      | Nasticeva 6/6, Beograd     |