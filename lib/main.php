<?php

session_start([
    'cookie_lifetime' => 86400,
]);

$_SESSION["priv"] = 0;

require "controller.class.php";
require "login.class.php";
require "posts.class.php";