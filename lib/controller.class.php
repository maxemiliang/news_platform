<?php


/*

This is the main router which handles the get requests on main and gives the correct file/response

@DEPENDENCIES:
------
-NONE-
------

*/

class Rout
{

	public $pReq;

	public $baseurl = "/news"; // has to be set manually if using on a subdir

	public $db;

	public function __construct($db)
	{

		$this->db = $db;

	}

	public function setDb($db)
	{

		$this->db = $db;

	}

	public function error($e)
	{

		echo "Error: ".$e;

	}


	public function redirect($redir, $s)
	{

		$_SESSION["redir"] = $s;

		header("location: {$this->baseurl}{$redir}");

	}


	public function render($file)
	{

		$v = [];

		global $v;

		$n = func_num_args();

		$args = func_get_args();

		for ($i = $n; $i > 1; $i--) {
			$v = $args[$i-1];
		}

		$base = $this->baseurl;

		include __DIR__."/../views/".$file;

	}


	public function get($req, $f)
	{

		if($_SERVER["REQUEST_METHOD"] === "GET") {

			global $pReq;

			$params = $req;

			$aReq = $_SERVER["REQUEST_URI"];

			if (strpos($params, ':') !== false) { // checking for params

				$params = substr($aReq, (strpos($aReq, "/", strlen($this->baseurl)+1) + 1));

				$pReq = explode(":", $req);

			} else {

				$params = '';

			}

			$curl = $this->baseurl.$req;

			if($aReq === $curl) {

				return $f();

			} else if ($aReq === $this->baseurl.$pReq[0].$params) {

				return $f($params);

			} else {

				/*$this->error(404);*/

			}

		} else {

		}

	}


	public function post($req, $f)
	{

		if($_SERVER["REQUEST_METHOD"] === "POST") {

			$aReq = $_SERVER["REQUEST_URI"];

			$curl = $this->baseurl.$req;

			if($aReq === $curl) {

				return $f($_POST);

			} else {

				/*$this->error(404);*/

			}


		} else {

		}

	}

}