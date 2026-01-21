<?php
require_once('db.php');


/* Fetch faculty by ID */
function getFacultyById($faculty_id) {

    $conn = getConnection();

    $faculty_id = mysqli_real_escape_string($conn, $faculty_id); 
    $sql = "SELECT * FROM faculty WHERE faculty_id = '$faculty_id'"; 
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Database query failed: " . mysqli_error($conn));
    }

    return mysqli_fetch_assoc($result); // returns full row
}


/* Update faculty profile (ID never changes) */
function updateFaculty($data) {
    $conn = getConnection();

    $faculty_id = mysqli_real_escape_string($conn, $data['faculty_id']);
    $name       = mysqli_real_escape_string($conn, $data['name']);
    $email      = mysqli_real_escape_string($conn, $data['email']);
    $department = mysqli_real_escape_string($conn, $data['department']);
    $phone      = mysqli_real_escape_string($conn, $data['phone']);
    $role       = mysqli_real_escape_string($conn, $data['role']);
    $password   = mysqli_real_escape_string($conn, $data['password']);

    $sql = "UPDATE faculty SET 
            name = '$name',
            email = '$email',
            department = '$department',
            phone = '$phone',
            role = '$role',
            password = '$password'
            WHERE faculty_id = '$faculty_id'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return false; // real failure
    }

    return true; // SUCCESS even if no row changed
}

?>
