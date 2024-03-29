<?php
$config = require ('config.php');
$db = new Database($config['database']);

$post_id = $_SESSION['user_id'];
$currentUser = $db->query("SELECT * from post INNER JOIN registration_user on post.user_id = registration_user.user_id where post.user_id = '$post_id'")->get();
$profilePath = $db->query("SELECT * from registration_user where user_id = '$post_id'")->get();
//$count = $db->query("SELECT count(user_id) from post where user_id = '$post_id'")->get();
//$friend_info = $db->query("SELECT * from registration_user")->get();
//$mainPosts = $db->query("SELECT * from post INNER JOIN registration_user on post.user_id = registration_user.user_id")->get();
//dd($count[0]["count(user_id)"]);
//dd($_REQUEST['user_id']);
// $id=get_current_user();
//dd($friend_info);
//dd($currentUser);

if (isset($_REQUEST['user_id'])) {
    $request_userId = $_REQUEST['user_id'];
    $user = $db->query("SELECT * from post INNER JOIN registration_user on post.user_id = registration_user.user_id where registration_user.user_id='$request_userId'")->get();
    $count = $db->query("SELECT count(user_id) from post where user_id = '$request_userId'")->get();
}
require "Views/friend.view.php";
