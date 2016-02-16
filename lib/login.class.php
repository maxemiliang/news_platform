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

		return True;

	}


	public function getUserId() {

		return 1;

	}

}