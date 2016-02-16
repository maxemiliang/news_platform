<?php

session_start([
    'cookie_lifetime' => 86400,
]);

require "controller.class.php";
require "login.class.php";
require "posts.class.php";