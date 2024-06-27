<?php

session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
    <div class="container">
        <h1>Welcome to the Gaming Website!</h1>
        <p>You are logged in.</p>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>