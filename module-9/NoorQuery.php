<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Soccer Players</title>
</head>
<body>

<h1>Search Soccer Players</h1>

<?php

// Noor Al Salihi
// CSD 440
// Module 9.2 Programming Assignment
// This program searches the soccer_players table
// based on a player name entered by the user.

$servername = "localhost";
$username = "student1";
$password = "pass";
$dbname = "baseball_01";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<form method="post" action="">
    <label for="player_name">Enter Player Name:</label>
    <input type="text" id="player_name" name="player_name" required>
    <input type="submit" name="search" value="Search">
</form>

<?php

if (isset($_POST["search"])) {

    $playerName = $_POST["player_name"];

    $stmt = $conn->prepare(
        "SELECT player_id, player_name, team, position, age, market_value
         FROM soccer_players
         WHERE player_name LIKE ?"
    );

    $searchName = "%" . $playerName . "%";
    $stmt->bind_param("s", $searchName);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        echo "<h2>Search Results</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Player ID</th>
                <th>Player Name</th>
                <th>Team</th>
                <th>Position</th>
                <th>Age</th>
                <th>Market Value</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["player_id"] . "</td>";
            echo "<td>" . $row["player_name"] . "</td>";
            echo "<td>" . $row["team"] . "</td>";
            echo "<td>" . $row["position"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>$" . number_format($row["market_value"], 2) . "</td>";
            echo "</tr>";
        }

        echo "</table>";

    } else {
        echo "<p>No players found.</p>";
    }

    $stmt->close();
}

$conn->close();

?>

<br>
<a href="NoorIndex.php">Back to Main Page</a>

</body>
</html>