<?php

function getConnection(){
    $conn = mysqli_connect("localhost", "root", "", "webtech");
    if(!$conn){
        die("Database connection failed");
    }
    return $conn;
}

function usernameExists($username, $password, $role){
    $conn = getConnection();
    if($role == 'Faculty'){
        $sql = "SELECT * FROM faculty WHERE name='$username' AND password='$password' AND role='$role'";
        $result = mysqli_query($conn, $sql);
        return mysqli_num_rows($result) > 0;
    }
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result) > 0;
}

function registerUser($name, $username, $password, $role){
    $conn = getConnection();

    if(usernameExists($username)){
        return "duplicate";
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, username, password, role)
            VALUES ('$name', '$username', '$password', '$role')";

    return mysqli_query($conn, $sql);
}
