<?php


/*

This is the class that handles the posts like getting them and adding them

@DEPENDENCIES:
----------------------
-login.class.php;-
-Controller.class.php;-
----------------------

*/

class Posts extends Login
{

	public $posts;
	/* Unnecesary but wont delete it just yet!
	protected $db;

	public function setDb($db) {

		$this->db = $db;

	}
	*/


	public function addPost($post)
	{ // $post should be an array consisting of title, text, img and userID

		if ($this->isLoggedIn()) {

			$sql = "INSERT INTO articles (title, text, img, userID, date) VALUES (?, ?, ?, ?, NOW());";

			$sth = $this->db->prepare($sql);

			$sth->execute($post);

			$this->redirect("/post");

		} else {

			$this->redirect("/post", "Du måste vara inloggad för att lägga till en post");

		}


	}


	public function getPosts()
	{

		return $this->db->query("SELECT articles.*, users.username FROM articles LEFT JOIN users ON users.uID=articles.userID;", PDO::FETCH_ASSOC);

	}


	public function getPost($id)
	{

		$sql = "SELECT articles.*, users.username FROM articles LEFT JOIN users ON users.uID = articles.userID WHERE articles.aID = ? LIMIT 1;";

		$sth = $this->db->prepare($sql);

		$sth->execute(array($id));

		$result = $sth->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

}