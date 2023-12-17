<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
    
</head>
<body>
    <h1>Login</h1>
    <form action="login_process.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
        <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
    </form>

</body>
</html>
