<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    // Check if the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?error=Invalid email format");
        exit();
    }

    // Check if the username already exists in the database
    $check_query = "SELECT * FROM users WHERE email='$email'";
    $check_result = mysqli_query($connection, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // If username exists, redirect back to the signup page with an error message
        echo "<script>alert('Email already exists'); window.location='signup.php';</script>";
        header("Location: signup.php?error=Email already exists");
        print ("Email already exists!");
        exit();
    } else {
        // Encrypt the password using password_hash() function
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $hashed_confirmpassword = password_hash($confirmpassword, PASSWORD_DEFAULT);

        // Insert new user into the database
        $insert_query = "INSERT INTO users (firstname, lastname, email, password, confirmpassword) VALUES ('$firstname', '$lastname', '$email', '$hashed_password', '$hashed_confirmpassword')";
        if (mysqli_query($connection, $insert_query)) {
            // Redirect to login page after successful signup
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($connection);
            exit();
        }
    }
}
?>
