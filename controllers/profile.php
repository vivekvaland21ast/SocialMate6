<?php
$config = require ('config.php');
$db = new Database($config['database']);

$post_id = $_SESSION['user_id'];

$user_post = $db->query("SELECT * from post INNER JOIN registration_user on post.user_id = registration_user.user_id where post.user_id = '$post_id' order by post.time DESC")->get();
$profilePath = $db->query("SELECT * from registration_user where user_id = '$post_id'")->get();
$count = $db->query("SELECT count(user_id) from post where user_id = '$post_id'")->get();
//dd($count[0]["count(user_id)"]);
require "Views/profile.view.php";