<?php

require ("connection.php");
require "functions.php";
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function sendMail($email, $v_code)
{

    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'Projecttesting145@gmail.com';                     //SMTP username
        $mail->Password = 'lqhw lmwi ngxr gfxv';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('Projecttesting145@gmail.com', 'Project Testing');
        $mail->addAddress($email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'E-mail varification from Project Testing';
        $mail->Body = "Thank you for ragistration<br>Click link to verify your email <a href='http://localhost/php/SocialMate4/verify.php?email=$email&v_code=$v_code'>verifiy</a>";

        $mail->send();
        //echo 'Message has been sent';
        return true;
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}
//login
if (isset ($_POST["login"])) {
    //$query = "select * from `registration_user` where email='$_POST[email_username]' OR username='$_POST[email_username]'";
    $query = "SELECT * FROM `registration_user` WHERE username='$_POST[email_username]'";
    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $result_fetch['password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $result_fetch['user_id'];
                $_SESSION['username'] = $result_fetch['username'];
                header('location: /');
            } else {
                echo "
                    <script>
                        alert('Password is invalid');
                        window.location.href='login.php';
                    </script>";
            }

        } else {
            echo "
                <script>
                    alert('User is not registered');
                    window.location.href='login.php';
                </script>";
        }
    } else {
        echo "
                <script>
                    alert('Email and Password are not registered');
                    window.location.href='login.php';
                </script>";
    }

}

//registration
if (isset ($_POST["register"])) {
    //$user_exist = "select * from `registration_user` where username='$_POST[username]' OR email='$_POST[email]'";
    $user_exist = "SELECT * FROM `registration_user` WHERE username='$_POST[username]'";
    $result = mysqli_query($con, $user_exist);
    $full_name = mysqli_real_escape_string($con, $_POST['fullname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $v_code = bin2hex(random_bytes(16));
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) {
                echo "
                <script>
                    alert('$result_fetch[username] already exist');
                    window.location.href='login.php';
                </script>";

            } else {
                echo "
                <script>
                    alert('$result_fetch[email] already exist');
                    window.location.href='login.php';
                </script>";
            }
        } else {
            // File upload handling
            $profileFile = file_get_contents($_FILES["profileImage"]["tmp_name"]);
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($_FILES["profileImage"]["name"]);

            // Move uploaded file to target directory
            if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $targetFile)) {
                $query1 = "INSERT INTO `registration_user`(`full_name`, `username`, `email`, `password`,`profile`, `verification_code`, `is_verified`) VALUES ('$full_name','$username','$email','$password','$targetFile','$v_code',0)";
                if (mysqli_query($con, $query1)) {
                    echo "
                    <script>
                        alert('Registration successful');
                        window.location.href='login.php';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Server down');
                        window.location.href='login.php';
                    </script>";
                }
            } else {
                echo "
                <script>
                    alert('Failed to upload profile image');
                    window.location.href='login.php';
                </script>";
            }
        }
    } else {
        echo "
        <script>
        alert('cannot run query');
        window.location.href='login.php';
        </script>";
    }
}