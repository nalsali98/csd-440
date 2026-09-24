<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Soccer Players Table</title>
</head>
<body>

<h1>Create Soccer Players Table</h1>

<?php

// Noor Al Salihi
// CSD 440
// Module 8.2 Programming Assignment
// This program connects to the baseball_01 database
// and creates the soccer_players table.

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

// SQL statement to create the table
$sql = "CREATE TABLE soccer_players (
    player_id INT AUTO_INCREMENT PRIMARY KEY,
    player_name VARCHAR(100) NOT NULL,
    team VARCHAR(100) NOT NULL,
    position VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    market_value DECIMAL(10,2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "<p>Soccer players table created successfully.</p>";
} else {
    echo "<p>Error creating table: " . $conn->error . "</p>";
}

$conn->close();

?>

</body>
</html>