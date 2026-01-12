<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Login</title>
</head>
<body>

<div class="box">
<h2> University Management System</h2>


<form method="post">

<select name="role" required>
    <option value="">Select User</option>
    <option value="Student">Student</option>
    <option value="Faculty">Faculty</option>
</select>

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">Login</button>
</form>

<p><a href="register.php">New User? Registers</a></p>
</div>

</body>
</html>
