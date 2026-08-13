<?php
/*
 * Name: Noor Al Salihi
 * Date: August 12, 2026
 * Assignment: Module 1.3 Programming Assignment
 * Purpose: Demonstrate basic PHP code working with standard HTML.
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Noor's First PHP Program</title>
</head>

<body>

    <h1>My First PHP Program</h1>
    <p>Welcome to my first PHP program for CSD440 Server-Side Scripting.</p>

    <?php
    // First PHP code snippet: Display student and course information.
    $studentName = "Noor Al Salihi";
    $courseName = "CSD440 Server-Side Scripting";

    echo "<h2>Student Information</h2>";
    echo "<p>Name: $studentName</p>";
    echo "<p>Course: $courseName</p>";
    ?>

    <?php
    // Second PHP code snippet: Display a simple calculation.
    $firstNumber = 10;
    $secondNumber = 5;
    $total = $firstNumber + $secondNumber;

    echo "<h2>PHP Calculation</h2>";
    echo "<p>$firstNumber + $secondNumber = $total</p>";
    ?>

</body>

</html>