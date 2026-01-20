<?php
session_start();
require_once('../Model/db.php');

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role     = $_POST['role'];

    if(usernameExists($username, $password, $role)){
    // In a real application, you would verify the password here
 
    $_SESSION['username'] = $username;
    
    if ($role == "Faculty") {
        $_SESSION['role'] = "Faculty";
        header("Location: faculty_dashboard.php");

    } else {
        $_SESSION['role'] = "Student";
    }
    header("Location: dashboard.php");

    }
    else {
        header("Location: index.php?error=invalid");
        exit();
    }

}
