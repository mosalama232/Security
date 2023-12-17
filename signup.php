<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="signup_process.php" method="POST">

        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" id="confirmpassword" name="confirmpassword" required><br><br>
        
        <input type="submit" value="Sign Up">
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </form>
</body>
</html>
