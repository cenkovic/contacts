Feature: My Contacts
  In order to contact my friends
  As a contact list owner
  I need to be able to see contact information of my friends

  Scenario: Listing my friends
     When I go to homepage
     Then I should see "Nemanja Cenković"
      And I should see "Nenad Marjanović"
      And I should see "Daliborka Ćirić"
      And I should see "Milica Stevanović"
      And I should see "Jovica Sekulić"
