<?php
session_start();
require_once "../Model/faculty_model.php";

if (!isset($_SESSION['faculty_id'])) {
    die("Unauthorized access");
}

$faculty_id = $_SESSION['faculty_id'];

/* Collect data */
$data = [
    'faculty_id' => $faculty_id, // LOCKED
    'name'       => trim($_POST['name']),
    'email'      => trim($_POST['email']),
    'department' => trim($_POST['department']),
    'phone'      => trim($_POST['phone']),
    'role'       => trim($_POST['role']),
    'password'   => $_POST['password']
];

/* Validation */
if ($data['name'] == "" || $data['email'] == "" || $data['password'] == "") {
    die("Name, Email and Password are required");
}

if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

/* Prevent ID tampering */
if (isset($_POST['faculty_id']) && $_POST['faculty_id'] !== $faculty_id) {
    die("Faculty ID cannot be changed");
}

/* Call model */
if (updateFaculty($data)) {
    $_SESSION['status'] = "success";
    header("Location: ../View/profile.php");
    exit();
} else {
    echo "Profile update failed";
}
