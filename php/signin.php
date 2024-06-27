<?php

require 'config.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE username=$1";
    $result = pg_query_params($conn, $sql, array($username));

    if(pg_num_rows($result) > 0) {
        $row = pg_fetch_assoc($result);
        $id = $row['id'];
        $hashed_password = $row['password'];

        if(password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            header("Location: welcome.php");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found with that username";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>Signin</title>
     <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <div class="container">
        <h1>Signin</h1>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username" required> 
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Signin</button>
        </form>
        <a href="signup.php">Don't have an account? Signup</a>
    </div>

</body>
</html>