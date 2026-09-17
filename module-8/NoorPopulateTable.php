<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Populate Soccer Players Table</title>
</head>
<body>

<h1>Populate Soccer Players Table</h1>

<?php

// Noor Al Salihi
// CSD 440
// Module 8.2 Programming Assignment
// This program adds soccer player records
// to the soccer_players table.

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

// Insert records into the table
$sql = "INSERT INTO soccer_players
        (player_name, team, position, age, market_value)
        VALUES
        ('Lamine Yamal', 'Barcelona', 'Forward', 19, 200.00),
        ('Pedri', 'Barcelona', 'Midfielder', 23, 140.00),
        ('Raphinha', 'Barcelona', 'Forward', 29, 90.00),
        ('Frenkie de Jong', 'Barcelona', 'Midfielder', 29, 45.00),
        ('Ronald Araujo', 'Barcelona', 'Defender', 27, 35.00),
        ('Robert Lewandowski', 'Barcelona', 'Forward', 38, 10.00),
        ('Dani Olmo', 'Barcelona', 'Midfielder', 28, 60.00),
        ('Ferran Torres', 'Barcelona', 'Forward', 26, 40.00),
        ('Jules Kounde', 'Barcelona', 'Defender', 27, 65.00),
        ('Gavi', 'Barcelona', 'Midfielder', 22, 40.00)";

if ($conn->query($sql) === TRUE) {
    echo "<p>Soccer player records added successfully.</p>";
} else {
    echo "<p>Error adding records: " . $conn->error . "</p>";
}

$conn->close();

?>

</body>
</html>