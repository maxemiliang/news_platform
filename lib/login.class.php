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


	public function getUserId() {

		return $_SESSION["userID"];

	}


	public function tryLogin($l) // accepts arrays with the structure of ["username"] followed by ["password"]!
	{

		$q = $this->db->prepare("SELECT * FROM users WHERE username=?;");

		$r = $q->execute(array($l["username"]));

		$v = $q->fetchAll();

		if (count($v) == 1) { 

			if (password_verify($l["password"], $v[0]["password"])) {

				$_SESSION["userID"] = $v[0]["uID"];

				$_SESSION["priv"] = $v[0]["privileges"];

				return true;

			} else {

				return false;

			}

		} else {

			return false;
		}


	}


	public function tryLogout() 
	{

		unset($_SESSION["userID"]);

		return true;

	}


	public function createUser($username, $password, $priv)
	{

		$q = $this->db->prepare("SELECT * FROM users WHERE username=?;");

		$r = $q->execute(array($username));

		$v = $q->fetchAll();

		if (count($v) <= 0) {

			if (strlen($password) >= 8 && strlen($username) >= 5) {
				$password = password_hash($password, PASSWORD_DEFAULT); //prepare password

				$sth = $this->db->prepare("INSERT INTO users (username, password, privileges) VALUES (?, ?, ?);");

				if($sth->execute(array($username, $password, $priv))) {

					return 1; // added

				} else {

					return 3; // error with execute

				}
			} else {

				return 2; //  error with length

			}

		} else {

			return 4; // error user found 

		}
	}

}