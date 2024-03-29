<?php

$config = require('config.php');
$db = new Database($config['database']);

$post_id = $_SESSION['user_id'];
$posts = $db->query('select * from post order by id DESC')->get();
$users = $db->query("SELECT * from registration_user where user_id<>'$post_id'")->get();

//$profile = $_SESSION['profile'];

$user_post = $db->query("SELECT * from post INNER JOIN registration_user on post.user_id = registration_user.user_id where post.user_id = '$post_id'")->get();
$profilePath = $db->query("SELECT * from registration_user where user_id = '$post_id'")->get();
$mainPosts = $db->query("SELECT * from post INNER JOIN registration_user on post.user_id = registration_user.user_id order by post.time DESC")->get();
//dd($mainPost);
//dd($profilePath[0]["profile"]);
//dd($users["profile"]);
//dd($mainPosts["username"]);

require "Views/index.view.php";