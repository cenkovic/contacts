Feature: My Contacts
  In order to contact my friends
  As a contact list owner
  I need to be able to see gender detail for my contacts

  Scenario: Gender details
    When I am on the homepage
    Then I should see gender detail for my contacts:
      | Contact           | Gender |
      | Nemanja Cenković  | M      |
      | Nenad Marjanović  | M      |
      | Daliborka Ćirić   | F      |
      | Milica Stevanović | F      |
      | Jovica Sekulić    | M      |