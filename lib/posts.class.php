<?php


/*

This is the class that handles the posts like getting them and adding them

@DEPENDENCIES:
----------------------
-login.class.php;-
-Controller.class.php;-
----------------------

*/

class Posts extends Login {

	public $posts;
	protected $db;

	public function setDb($db) {

		$this->db = $db;

	}


	public function addPosts() {

		// to come :D

	}


	public function getPosts(){

		return $this->db->query("SELECT articles.*, users.username FROM articles LEFT JOIN users ON users.uID=articles.userID;", PDO::FETCH_ASSOC);

	}


	public function getPost($id) {

		$sql = "SELECT articles.*, users.username FROM articles LEFT JOIN users ON users.uID = articles.userID WHERE articles.aID = ? LIMIT 1;";

		$sth = $this->db->prepare($sql);

		$sth->execute(array($id));

		$result = $sth->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

}