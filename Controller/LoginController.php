<?php
session_start();
require_once('../Model/db.php');
require_once('../Model/faculty_model.php');

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role     = $_POST['role'];

    if(usernameExists($username, $password, $role)){
    // In a real application, you would verify the password here
 
    $_SESSION['username'] = $username;
    
    if ($role == "Faculty") {
        $_SESSION['role'] = "Faculty";
        header("Location: ../Views/faculty_dashboard.php");
        exit();

    } else {
        $_SESSION['role'] = "Student";
        header("Location: ../Views/dashboard.php");
        exit();
    }
    
    }

    else {
    $_SESSION['error'] = "Invalid username or password";
    header("Location: ../Views/index.php");
    exit();
}

}
