<?php 

/*

This is the login controller, which suprise suprise, handles logins

@DEPENDENCIES
-----------------------
-DB.PHP;- 
-Controller.class.php;-
-----------------------

*/

Class Login extends Rout {

	public function isLoggedIn() {

		if (isset($_SESSION["userID"])) {
			return true;
		} else {
			return false;
		}

	}


	public function getUserId() {

		return 1;

	}


	public function tryLogin() {

		
		
	}

}