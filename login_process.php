<?php
session_start();
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check the user credentials in the database
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        // If user exists, set session variables and redirect to a dashboard or homepage
        $_SESSION['email'] = $email;
        header("Location: index.php");
    } else {
        // If login fails, redirect back to the login page with an error message
        echo "<script>alert('Incorrect password'); window.location='login.php';</script>";
        $_SESSION['login_error'] = "Invalid email or password";
        header("Location: login.php");
    }
}
?>
