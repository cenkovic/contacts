Feature: My Contacts
  In order to filter my friends by gender
  As a contact list owner
  I need to be able to filter my friends clicking on filter links

  Scenario: Displaying filters
    When I go to homepage
    Then I should see links:
      | Link    |
      | All     |
      | Females |
      | Males   |
