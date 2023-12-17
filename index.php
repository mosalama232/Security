<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url('img.jpg'); /* Replace 'path/to/your/image.jpg' with your image file path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <h1>Homepage</h1>

    <button onclick="greetUser()">Say Hello</button>
    <p>Want to exit?<a href="login.php">Logout here</a></p>
    <?php
    // Include the PHP file for database connection
    include('db_connection.php');

    // Your PHP code to interact with the database can be placed here
    ?>

</body>
</html>
