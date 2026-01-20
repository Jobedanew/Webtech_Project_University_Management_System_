
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Login</title>
</head>
<body>

<div class="box">
<h2>University Management System</h2>

<form method="post" action="../Controller/loginController.php">
<select name="role" required>
<option value="">Select User</option>
<option>Student</option>
<option>Faculty</option>
</select>

<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password"placeholder="Password" required>

<button name="login">Login</button>
</form>

<?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red; text-align:center;'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }
?>

<p><a href="register.php">New User? Register</a></p>
</div>

</body>
</html>
