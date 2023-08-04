<?php
require('connection.php');
session_start();

// Login
if (isset($_POST['login'])) {
    $email_username = $_POST['email_username'];
    $query = "SELECT * FROM `register_user` WHERE `email`='$email_username' OR `username`='$email_username'";
    $result = mysqli_query($con, $query);
    if ($result && mysqli_num_rows($result)==1) {
        $result_fetch = mysqli_fetch_assoc($result);
        if (password_verify($_POST['password'], $result_fetch['password'])) {
            echo "<script>window.location.href='index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Incorrect password'); window.location.href='index.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Email or username is not registered'); window.location.href='index.php';</script>";
        exit();
    }
}
// Registration
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_exist_query = "SELECT * FROM `register_user` WHERE `username`='$username' OR `email`='$email'";
    $result = mysqli_query($con, $user_exist_query);
    if ($result && mysqli_num_rows($result)>0) {
        $result_fetch = mysqli_fetch_assoc($result);
        if ($result_fetch['username'] == $username) {
            echo "<script>alert('$username - Username already taken'); window.location.href='index.php';</script>";
            exit();
        } else {
            echo "<script>alert('$email - Email already registered'); window.location.href='index.php';</script>";
            exit();
        }
    } else {
        $v_code = bin2hex(random_bytes(16));
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $query = "INSERT INTO `register_user`(`full_name`, `username`, `email`, `password`, `verification_code`, `is_verified`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password','$v_code','0')";
        if (mysqli_query($con, $query)) {
            echo "<script>alert('Registration successful'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Can not run query'); window.location.href='index.php';</script>";
            exit();
        }
    }
} else {
    echo "<script>alert('Server Down'); window.location.href='index.php';</script>";
}
?>