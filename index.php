<?php

error_reporting(E_ALL);
ini_set('display_errors',1); // DEV ENV

require "lib/main.php";

// Database connection
require "lib/db.php";

$app = new Rout($db);
/*$app->setDb($db);*/

$login = new Login($db);

if($login->createUser("admin", "admin", 999)) {

    echo "Cool! :D";

} else {

    echo "not so cool";

}

$posts = new Posts($db);
$posts->setDb($db);


$app->get("/", function() use($app)
{

	$app->render("home.php");

});


$app->get("/news", function() use($app, $posts)
{

    $post = [];

    foreach($posts->getPosts() as $row) {
        $post[] = $row;
    }

  	$app->render("news.php", $post);

});


$app->get("/post/:id", function($id) use($app, $posts)
{

    $r = $posts->getPost($id);

    $app->render("article.php", $r);

});


$app->get("/post", function() use ($app, $login)
{

	$app->render("add.php");

});


$app->post("/post/add", function() use ($app, $posts, $login)
{

	$cont = [];

	$cont[] = $_POST["title"];
	$cont[] = $_POST["text"];
	$cont[] = "default.jpg";
	$cont[] = $login->getUserId();

	$posts->addPost($cont);

});


$app->post("/login", function () use ($app, $login)
{

});


/* FOR TESTING PURPOSES

$app->get("/news/redir", function() use ($app)
{

	$app->redirect("/news");

});

*/