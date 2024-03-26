<?php

$config = require ('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];

$posts = $db->query("select * from post where id = {$id}")->findOrFail();


require "Views/index.view.php";
