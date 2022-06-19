<?php
//login_form_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class LoginForm extends WebTestCase {

	  function testCorrectPassword() {
		$this->get(VIRTUAL_PATH . '/login.php');
		$this->assertResponse(200);

        $this->setField("name", "John");
		$this->setField("password", "john123");
		$this->clickSubmit("Login");

		$this->assertResponse(200);
		$this->assertText("Welcome, John");
		   
		  
		  $this->setField("name", "rseyum"); 
		$this->setField("password", "admin123");
		$this->clickSubmit("Login");

		$this->assertResponse(200);
		$this->assertText("Welcome, Rahel");
	}
	
 	 function testFailedPassword() {
		$this->get(VIRTUAL_PATH . '/login.php');
		$this->assertResponse(200);

		$this->setField("name", "John");
		$this->setField("password", "XYZXYZ");//incorrect password
		$this->clickSubmit("Login");

		$this->assertResponse(200);
		$this->assertText("Login and/or password is incorrect");
	}

}



