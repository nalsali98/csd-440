<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Soccer Player</title>
</head>
<body>

<h1>Add a Soccer Player</h1>

<?php

// Noor Al Salihi
// CSD 440
// Module 9.2 Programming Assignment
// This program allows the user to add a new
// soccer player to the soccer_players table.

$servername = "localhost";
$username = "student1";
$password = "pass";
$dbname = "baseball_01";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {

    $playerName = $_POST["player_name"];
    $team = $_POST["team"];
    $position = $_POST["position"];
    $age = $_POST["age"];
    $marketValue = $_POST["market_value"];

    $stmt = $conn->prepare(
        "INSERT INTO soccer_players
        (player_name, team, position, age, market_value)
        VALUES (?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "sssid",
        $playerName,
        $team,
        $position,
        $age,
        $marketValue
    );

    if ($stmt->execute()) {
        echo "<p>Player added successfully!</p>";
    } else {
        echo "<p>Error adding player: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

$conn->close();

?>

<form method="post" action="">

    <p>
        <label for="player_name">Player Name:</label>
        <input type="text" id="player_name" name="player_name" required>
    </p>

    <p>
        <label for="team">Team:</label>
        <input type="text" id="team" name="team" required>
    </p>

    <p>
        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required>
    </p>

    <p>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
    </p>

    <p>
        <label for="market_value">Market Value:</label>
        <input type="number" step="0.01"
               id="market_value"
               name="market_value" required>
    </p>

    <input type="submit" name="submit" value="Add Player">

</form>

<br>

<a href="NoorIndex.php">Back to Main Page</a>

</body>
</html>
