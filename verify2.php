<?php

require("connection.php");

if (isset($_GET['email']) && isset($_GET['v_code'])) {
    $query = "SELECT * FROM `registration_user` WHERE `email`= ? AND `verification_code`= ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$_GET['email'], $_GET['v_code']]);
    $result = $statement->fetch();

    if ($result) {
        if ($result["is_verified"] == 0) {
            $update = "UPDATE `registration_user` SET `is_verified`='1' WHERE `email`=?";
            $statement = $pdo->prepare($update);
            if ($statement->execute([$result['email']])) {
                echo "
                <script>
                    alert('Email verification successful');
                    window.location.href='login.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Failed to verify email');
                    window.location.href='login.php';
                </script>";
            }
        } else {
            echo "
            <script>
                alert('Email already registered');
                window.location.href='login.php';
            </script>";
        }
    } else {
        echo "
        <script>
            alert('Email not found or verification code is incorrect');
            window.location.href='login.php';
        </script>";
    }
}
?>
