<?php

/*

This is the login controller, which suprise suprise, handles logins

@DEPENDENCIES
-----------------------
-DB.PHP;-
-Controller.class.php;-
-----------------------

*/

Class Login extends Rout
{

	public function isLoggedIn()
	{

		if (isset($_SESSION["userID"])) {
			return true;
		} else {
			return false;
		}

	}


	public function getUserId()
	{

		return 1;

	}


	public function tryLogin()
	{



	}

	public function createUser($username, $password, $priv)
	{

		$q = $this->db->prepare("SELECT * FROM users WHERE username=?;");

		$r = $q->execute(array($username));

		$v = $q->fetchAll();

		if (count($v) > 0) {

			$password = password_hash($password, PASSWORD_DEFAULT); //prepare password

			$sth = $this->db->prepare("INSERT INTO users (username, password, privileges) VALUES (?, ?, ?);");

			if($sth->execute(array($username, $password, $priv))) {

				return true;

			} else {

				return false;

			}

		} else {

			return false;

		}
	}

}