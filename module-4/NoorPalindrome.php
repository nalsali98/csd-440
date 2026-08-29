<?php
/*
    Name: Noor El-din Al salihi
    Date: August 28, 2026
    Assignment: Module 4.2 Programming Assignment

    Purpose:
    This program checks six strings to determine whether each string
    is a palindrome. It displays the original string, reversed string,
    and the result of the palindrome test.
*/

// Function that tests whether a string is a palindrome
function checkPalindrome($text)
{
    // Convert the string to lowercase so capitalization does not affect the test
    $cleanText = strtolower($text);

    // Reverse the string
    $reversedText = strrev($cleanText);

    // Compare the original cleaned string with the reversed string
    if ($cleanText == $reversedText) {
        return "Palindrome";
    } else {
        return "Not a Palindrome";
    }
}

// Six example strings: three palindromes and three non-palindromes
$strings = array(
    "racecar",
    "level",
    "madam",
    "computer",
    "school",
    "programming"
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>

<body>

    <h1>Palindrome Checker</h1>

    <p>
        This program checks six strings to determine whether they are
        palindromes.
    </p>

    <?php
    // Loop through each string and display the palindrome test results
    foreach ($strings as $text) {

        // Reverse the current string for display
        $reversed = strrev($text);

        echo "<h3>String Test</h3>";
        echo "<p><strong>Original String:</strong> " . $text . "</p>";
        echo "<p><strong>Reversed String:</strong> " . $reversed . "</p>";
        echo "<p><strong>Result:</strong> " . checkPalindrome($text) . "</p>";
        echo "<hr>";
    }
    ?>

</body>

</html>