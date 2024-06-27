<?php

require 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, password) VALUES ($1, $2, $3)";
    $result = pg_query_params($conn, $sql, array($username, $email, $password));

    if($result) {
        header("Location: signin.php");
    } else {
        echo "Error: ".pg_last_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <div class="container">
        <h1>Signup</h1>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Signup</button>
        </form>
        <a href="signin.php">Already have an account? Sign I</a>
    </div>

</body>
</html>