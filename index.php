<?php

require("lib/main.php");

// Database connection
require "lib/db.php";

$app = new Rout();

$login = new Login();

$posts = new Posts();
$posts->setDb($db);


$app->get("/", function() use($app){

	$app->render("home.php");

});

$app->get("/news", function() use($app, $posts){

    $post = [];

    foreach($posts->getPosts() as $row) {
        $post[] = $row;
    }

  	$app->render("news.php", $post);

});

$app->get("/post/:id", function($id) use($app, $posts) {

    $r = $posts->getPost($id);

    $app->render("article.php", $r);

});

$app->post("/add/post", function() use ($app, $posts, $login){

});


/* FOR TESTING PURPOSES

$app->get("/news/redir", function() use ($app){

	$app->redirect("/news/news");

});

*/