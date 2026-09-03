<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noor MyInteger</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        h1, h2 {
            color: #333333;
        }

        .result {
            border: 1px solid #999999;
            padding: 15px;
            margin-bottom: 20px;
            width: 400px;
        }
    </style>
</head>

<body>

<h1>MyInteger Class Test</h1>

<?php

/*
    Name: Noor El-din Al salihi
    Assignment: Module 6.2 Programming Assignment
    Course: CSD440 Server-Side Scripting

    Purpose:
    This program defines a class named NoorMyInteger.
    The class stores one integer and includes methods
    to determine if a number is even, odd, or prime.
    It also includes getter and setter methods.
    Two objects are created to test all methods.
*/

class NoorMyInteger {

    private $number;

    // Constructor
    public function __construct($number) {
        $this->number = $number;
    }

    // Getter method
    public function getNumber() {
        return $this->number;
    }

    // Setter method
    public function setNumber($number) {
        $this->number = $number;
    }

    // Checks if a number is even
    public function isEven($number) {
        return $number % 2 == 0;
    }

    // Checks if a number is odd
    public function isOdd($number) {
        return $number % 2 != 0;
    }

    // Checks if the stored number is prime
    public function isPrime() {

        if ($this->number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($this->number); $i++) {
            if ($this->number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}


// Create first object
$integer1 = new NoorMyInteger(7);

// Create second object
$integer2 = new NoorMyInteger(10);


// Test first object
echo "<div class='result'>";
echo "<h2>Object 1</h2>";

echo "Stored Number: " . $integer1->getNumber() . "<br>";

echo "Is 7 Even? ";
echo $integer1->isEven(7) ? "Yes<br>" : "No<br>";

echo "Is 7 Odd? ";
echo $integer1->isOdd(7) ? "Yes<br>" : "No<br>";

echo "Is 7 Prime? ";
echo $integer1->isPrime() ? "Yes<br>" : "No<br>";

echo "</div>";


// Test second object
echo "<div class='result'>";
echo "<h2>Object 2</h2>";

echo "Stored Number: " . $integer2->getNumber() . "<br>";

echo "Is 10 Even? ";
echo $integer2->isEven(10) ? "Yes<br>" : "No<br>";

echo "Is 10 Odd? ";
echo $integer2->isOdd(10) ? "Yes<br>" : "No<br>";

echo "Is 10 Prime? ";
echo $integer2->isPrime() ? "Yes<br>" : "No<br>";

echo "</div>";


// Test setter method
echo "<div class='result'>";
echo "<h2>Setter Test</h2>";

$integer2->setNumber(13);

echo "New Stored Number: " . $integer2->getNumber() . "<br>";

echo "Is 13 Prime? ";
echo $integer2->isPrime() ? "Yes<br>" : "No<br>";

echo "</div>";

?>

</body>
</html>