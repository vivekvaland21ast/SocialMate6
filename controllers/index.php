<?php

$config = require('config.php');
$db = new Database($config['database']);


$posts = $db->query('select * from post order by id DESC')->get();
$users = $db->query('select * from registration_user')->get();
dd($users);
require "Views/index.view.php";