@managing_suppliers
Feature: Managing suppliers
    In order to have up to date suppliers list
    As a Administrator
    I want to be able to manage suppliers

    Background:
        Given I am logged in as an administrator

    @ui
    Scenario: Adding a new supplier
        When I want to create a new supplier
        And I set its name as "Adam"
        And I set its email as "adam@adam.com"
        And I create it
        Then I should have a new "Adam" supplier with "adam@adam.com" email
