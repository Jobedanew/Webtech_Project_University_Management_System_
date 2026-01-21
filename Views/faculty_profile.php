<?php
   session_start();
    require_once "../Model/faculty_model.php";

    if (!isset($_SESSION['faculty_id']) || $_SESSION['role'] !== 'Faculty') {
        die("Unauthorized access");
    }

    $faculty = getFacultyById($_SESSION['faculty_id']);

    if (!$faculty) {
        die("Faculty not found");  
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] == "success"){
        $flag=1;
    }
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="faculty_style.css">
    </head>
    <body>

        <div class="profile_container">
            <h2>Faculty Profile</h2>

            <form method="POST" action="../Controller/faculty_profile_controller.php">
                Name: <input type="text" name="name" value="<?= $faculty['name'] ?>"><br>
                Email: <input type="email" name="email" value="<?= $faculty['email'] ?>"><br>
                Department: <input type="text" name="department" value="<?= $faculty['department'] ?>"disabled><br>
                Phone: <input type="text" name="phone" value="<?= $faculty['phone'] ?>"><br>
                Role: <input type="text" name="role" value="<?= $faculty['role'] ?>" disabled><br>
                Password: <input type="text" name="password" value="<?= $faculty['password'] ?>"><br>
                Faculty ID:<input type="text" value="<?= $faculty['faculty_id'] ?>" disabled>
                <br><br>
                <button type="submit">Update</button>
            </form>

            <?php
                if(isset($flag) && $flag==1){
                    echo "<p style='color:green;'>Profile updated successfully</p>";
                    unset($_SESSION['status']);
                }
            ?>

            <a href="faculty_dashboard.php" class="back-btn">Back to Dashboard</a>

        </div>

    </body>
</html>
