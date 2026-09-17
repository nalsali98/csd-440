<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drop Soccer Players Table</title>
</head>
<body>

<h1>Drop Soccer Players Table</h1>

<?php

// Noor Al Salihi
// CSD 440
// Module 8.2 Programming Assignment
// This program drops the soccer_players table
// from the baseball_01 database.

$servername = "localhost";
$username = "student1";
$password = "pass";
$dbname = "baseball_01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL statement to drop the table
$sql = "DROP TABLE IF EXISTS soccer_players";

if ($conn->query($sql) === TRUE) {
    echo "<p>Soccer players table dropped successfully.</p>";
} else {
    echo "<p>Error dropping table: " . $conn->error . "</p>";
}

$conn->close();

?>

</body>
</html>