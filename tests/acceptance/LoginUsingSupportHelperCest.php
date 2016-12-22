<?php



class HelperCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function tryToTestUsingSupportHelper(AcceptanceTester $I, Page\LoginPage $loginPage)
    {
      $I->wantTo('log in (using injected DrupalLogin helper from _support directory)');
      $loginPage->login('demo', 'demo');
      $I->seeElement('body.logged-in');
    }
}
