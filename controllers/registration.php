<?php
require_once 'config.php';
require_once 'Database.php';

$dbConfig = require 'config.php';
$db = new Database($dbConfig['database']);

if (isset ($_POST["register"])) {
    $user_exist = "SELECT * FROM `registration_user` WHERE username=?";
    $statement = $db->query($user_exist, [$_POST['username']]);
    $result = $statement->find();

    if ($result) {
        echo "<script>alert('$result[username] already exists');window.location.href='login.php';</script>";
    } else {
        $full_name = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $v_code = bin2hex(random_bytes(16));

        $profileFile = file_get_contents($_FILES["profileImage"]["tmp_name"]);
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["profileImage"]["name"]);
        //dd($targetFile);
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile)) {
            $query1 = "INSERT INTO `registration_user`(`full_name`, `username`, `email`, `password`,`profile`, `verification_code`, `is_verified`) VALUES (?,?,?,?,?,?,?)";
            $db->query($query1, [$full_name, $username, $email, $password, $targetFile, $v_code, 0]);

            echo "<script>alert('Registration successful');window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Failed to upload profile image');window.location.href='login.php';</script>";
        }
    }
}
