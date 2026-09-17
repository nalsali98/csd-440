<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Soccer Players Query</title>
</head>
<body>

<h1>Soccer Players</h1>

<?php

// Noor Al Salihi
// CSD 440
// Module 8.2 Programming Assignment
// This program queries the soccer_players table
// and displays all records.

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

// Query all records
$sql = "SELECT * FROM soccer_players";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border='1' cellpadding='8'>";
    echo "<tr>";
    echo "<th>Player ID</th>";
    echo "<th>Player Name</th>";
    echo "<th>Team</th>";
    echo "<th>Position</th>";
    echo "<th>Age</th>";
    echo "<th>Market Value</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["player_id"] . "</td>";
        echo "<td>" . $row["player_name"] . "</td>";
        echo "<td>" . $row["team"] . "</td>";
        echo "<td>" . $row["position"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>$" . $row["market_value"] . " million</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "<p>No records found.</p>";
}

$conn->close();

?>

</body>
</html>