<?php
/*
 * Name: Noor Al Salihi
 * Course: CSD-440 Server-Side Scripting
 * Assignment: Module 11.2 Programming Assignment
 * Date: October 10, 2026
 *
 * Purpose:
 * This program connects to the baseball_01 database and retrieves
 * all records from the soccer_players table created in Module 8.
 * The data is then displayed in a PDF document using FPDF.
 * The PDF includes general information, a table header, player data,
 * and a footer.
 */

// Include the FPDF library
require('fpdf19/fpdf.php');

// Create a custom PDF class
class SoccerPDF extends FPDF
{
    // Header displayed at the top of each PDF page
    function Header()
    {
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'FC Barcelona Soccer Players', 0, 1, 'C');

        $this->SetFont('Arial', '', 10);
        $this->Cell(0, 6, 'Module 11.2 Database PDF Report', 0, 1, 'C');

        $this->Ln(5);
    }

    // Footer displayed at the bottom of each PDF page
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);

        $this->Cell(
            0,
            10,
            'Noor Al Salihi - Page ' . $this->PageNo(),
            0,
            0,
            'C'
        );
    }
}

// Database connection information
$servername = "localhost";
$username = "student1";
$password = "pass";
$database = "baseball_01";

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Check the database connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Retrieve all soccer player records
$sql = "SELECT player_id, player_name, team, position, age, market_value
        FROM soccer_players
        ORDER BY player_id";

$result = $conn->query($sql);

// Make sure the query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Create the PDF
$pdf = new SoccerPDF();
$pdf->AddPage();

// General information about the data
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 8, 'General Information', 0, 1);

$pdf->SetFont('Arial', '', 10);
$description = "This report displays information about FC Barcelona soccer "
             . "players stored in the soccer_players table from Module 8. "
             . "The database contains each player's ID, name, team, position, "
             . "age, and estimated market value.";

$pdf->MultiCell(0, 6, $description);

$pdf->Ln(5);

// Table header
$pdf->SetFont('Arial', 'B', 9);

$pdf->Cell(15, 8, 'ID', 1, 0, 'C');
$pdf->Cell(45, 8, 'Player Name', 1, 0, 'C');
$pdf->Cell(35, 8, 'Team', 1, 0, 'C');
$pdf->Cell(35, 8, 'Position', 1, 0, 'C');
$pdf->Cell(15, 8, 'Age', 1, 0, 'C');
$pdf->Cell(45, 8, 'Market Value', 1, 1, 'C');

// Display database records
$pdf->SetFont('Arial', '', 9);

while ($row = $result->fetch_assoc()) {

    $pdf->Cell(15, 8, $row['player_id'], 1, 0, 'C');
    $pdf->Cell(45, 8, $row['player_name'], 1);
    $pdf->Cell(35, 8, $row['team'], 1);
    $pdf->Cell(35, 8, $row['position'], 1);
    $pdf->Cell(15, 8, $row['age'], 1, 0, 'C');

    $marketValue = '$' . number_format($row['market_value'], 2) . ' M';
    $pdf->Cell(45, 8, $marketValue, 1, 1, 'R');
}

// Table footer
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(
    190,
    8,
    'End of Soccer Players Database Report',
    1,
    1,
    'C'
);

// Close the database connection
$conn->close();

// Display the completed PDF in the browser
$pdf->Output('I', 'NoorSoccerPlayers.pdf');
?>