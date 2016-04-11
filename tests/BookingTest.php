<?php
// tests/acceptance/UserSubscriptionTest.php
require_once 'vendor/autoload.php';
class UserSubscriptionTest extends PHPUnit_Extensions_Selenium2TestCase
{
    public function setUp()
    {
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowserUrl('http://www.ezytestingserver.com/');
        $this->setBrowser('firefox');
    }
	
	public function validInputsProvider()
    {
        $inputs[] = [
            [
                'login_username'              => 'admin_testing',
                'login_password'              => 'admin',
            ]
        ];

        return $inputs;
    }
	
	public function tearDown()
	{
		$this->stop();
	}
	
	public function testSearch()
	{
		$this->url('http://www.ezytestingserver.com/');
		/* $this->byName('login_username')->value('admin_testing');
		$this->byName('login_password')->value('admin'); */
		$this->byId('form_flight_search')->submit();
		
		file_put_contents('step1.jpg', $this->currentScreenshot());

		$content = $this->byTag('body')->text();
		file_put_contents('step2.jpg', $this->currentScreenshot());
		$this->assertEquals('Everything is Good!', $content);
		
	}
	
	/* public function fillFormAndSubmit(array $inputs)
	{
		$form = $this->byId('login-form');
		foreach ($inputs as $input => $value) {
			$form->byName($input)->value($value);
		}
		$form->submit();
	} */
}