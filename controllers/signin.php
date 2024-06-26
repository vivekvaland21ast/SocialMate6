<?php
require_once 'config.php';
require_once 'Database.php';

$config = require 'config.php';
$db = new Database($config['database']);

if (isset ($_POST["login"])) {
    $query = "SELECT * FROM `registration_user` WHERE username=?";
    $statement = $db->query($query, [$_POST['email_username']]);
    $result = $statement->find();
    
    if ($result) {
        //dd($result);
        if (password_verify($_POST['password'], $result['password'])) {
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['username'] = $result['username'];
            header('location: /');
            exit;
        } else {
            echo "<script>alert('Password is invalid');window.location.href='/login';</script>";
            exit;
        }
    } else {
        echo "<script>alert('User is not registered');window.location.href='/login';</script>";
        exit;
    }
}
