<?php
/**
 * @file
 *
 * Codeception page helper for Drupal login.
 */
namespace Page;

class LoginPage
{
    public static $URL = 'user/login';
    public static $usernameField = '#user-login #edit-name';
    public static $passwordField = '#user-login #edit-pass';
    public static $loginButton = '#user-login input[type=submit]';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function login($name, $password)
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->fillField(self::$usernameField, $name);
        $I->fillField(self::$passwordField, $password);
        $I->click(self::$loginButton);

        return $this;
    }
}
