Here's our starter login test page (we'll create a file named login-test.php and put it in the test folder)

<?php
//login-test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class LoginForm extends WebTestCase {
    //happy path
    function testCorrectPassword() {
   	 $this->get(VIRTUAL_PATH . '/login.php');
   	 $this->assertResponse(200);
       $this->setField("name", "John");
		$this->setField("password", "john123");
		$this->clickSubmit("Login");

		$this->assertResponse(200);
		$this->assertText("Welcome, John");
    }
    //sad path
    function testFailedPassword() {
   	 $this->get(VIRTUAL_PATH . '/login.php');
   	 $this->assertResponse(200);

    $this->setField("name", "John");
		$this->setField("password", "xyz123");
		$this->clickSubmit("Login");

		$this->assertResponse(200);
		$this->assertText("Login and/or password is incorrect");

    }

}
