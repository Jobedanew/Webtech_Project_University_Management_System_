<?php
require_once('db.php');


/* Fetch faculty by ID */
function getFacultyById($id) {
    $conn = getConnection();
    $sql = "SELECT * FROM faculty WHERE faculty_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

/* Update faculty profile (ID never changes) */
function updateFaculty($data) {
    $conn = getConnection();

    $sql = "UPDATE faculty SET 
            name = ?, 
            email = ?, 
            department = ?, 
            phone = ?, 
            role = ?, 
            password = ?
            WHERE faculty_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssss",
        $data['name'],
        $data['email'],
        $data['department'],
        $data['phone'],
        $data['role'],
        $data['password'],
        $data['faculty_id']
    );

    return $stmt->execute();
}
?>
