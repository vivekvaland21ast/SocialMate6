<?php
require_once 'config.php';
require_once 'Database.php';

$config = require 'config.php';
$db = new Database($config['database']);

if (isset ($_POST["register"])) {
    $user_exist = "SELECT * FROM `registration_user` WHERE username=?";
    $statement = $db->query($user_exist, [$_POST['username']]);
    $result = $statement->find();
    if ($result) {
        echo "<script>alert('$result[username] already exists');window.location.href='/login';</script>";
    } else {
        $full_name = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        //$v_code = bin2hex(random_bytes(16));
        //$_SESSION['profile']= $_POST['profile'];
        $profileFile = file_get_contents($_FILES["profileImage"]["tmp_name"]);
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["profileImage"]["name"]);
        $_SESSION['profile'] = $targetFile;
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile)) {
            $query1 = "INSERT INTO `registration_user`(`full_name`, `username`, `email`, `password`,`profile`) VALUES (?,?,?,?,?)";
            $db->query($query1, [$full_name, $username, $email, $password, $targetFile]);

            echo "<script>alert('Registration successful');window.location.href='/login';</script>";
        } else {
            echo "<script>alert('Failed to upload profile image');window.location.href='/login';</script>";
        }
    }
}
