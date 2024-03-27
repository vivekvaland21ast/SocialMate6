<?php
$config = require ('config.php');
$db = new Database($config['database']);

$post_id = $_SESSION['user_id'];

$user_post = $db->query("SELECT * from post INNER JOIN registration_user on post.user_id = registration_user.user_id where post.user_id = '$post_id'")->get();
$profilePath = $db->query("SELECT * from registration_user where user_id = '$post_id'")->get();

require "Views/profile.view.php";