<?php

$config = require('config.php');
$db = new Database($config['database']);


$posts = $db->query('select * from post order by id DESC')->get();
$users = $db->query('select * from registration_user')->get();
$post_id = $_SESSION['user_id'];
//$profile = $_SESSION['profile'];
//$profilePath = $users[4]['profile'];
//dd($post_id);
$user_post = $db->query("SELECT * from post INNER JOIN registration_user on post.user_id = registration_user.user_id where post.user_id = '$post_id'")->get();
$profilePath = $db->query("SELECT * from registration_user where user_id = $post_id")->get();
//dd($users[4]['profile']);
//dd($profilePath['profile']);
require "Views/index.view.php";