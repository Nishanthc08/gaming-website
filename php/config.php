<?php

$host = "localhost";
$dbname = "gaming-website";
$user = "postgres";
$pass = "nishu";

// Create connection
$conn = pg_connect("host=$host dbname=$dbname user=$user password=$pass");

// Check connection
if(!$conn) {
    die("Connection failed: ".pg_last_error());
}

?>