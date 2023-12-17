<?php
session_start();
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check the user credentials in the database
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    //$result = mysqli_query($connection, $query);

    if (mysqli_query($connection, $query)) {
        // Redirect to login page after successful signup
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . mysqli_error($connection);
        exit();
    }
}
?>
