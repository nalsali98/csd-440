<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Array</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 30px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #dddddd;
        }

        h1, h2 {
            color: #333333;
        }
    </style>
</head>

<body>

<h1>Customer Information</h1>

<?php

/*
    Name: Noor El-din Al salihi
    Assignment: Module 5.2 Programming Assignment
    Course: CSD440 Server-Side Scripting

    Purpose:
    This program creates an array of customers containing
    first name, last name, age, and phone number.

    The program displays all customers and then uses
    array methods to search for customer records
    using different fields.
*/

$customers = array(

    array(
        "firstName" => "John",
        "lastName" => "Smith",
        "age" => 25,
        "phone" => "206-555-1001"
    ),

    array(
        "firstName" => "Sarah",
        "lastName" => "Johnson",
        "age" => 32,
        "phone" => "253-555-1002"
    ),

    array(
        "firstName" => "Michael",
        "lastName" => "Brown",
        "age" => 41,
        "phone" => "425-555-1003"
    ),

    array(
        "firstName" => "Emily",
        "lastName" => "Davis",
        "age" => 28,
        "phone" => "206-555-1004"
    ),

    array(
        "firstName" => "David",
        "lastName" => "Wilson",
        "age" => 35,
        "phone" => "253-555-1005"
    ),

    array(
        "firstName" => "Jessica",
        "lastName" => "Taylor",
        "age" => 22,
        "phone" => "425-555-1006"
    ),

    array(
        "firstName" => "Daniel",
        "lastName" => "Anderson",
        "age" => 45,
        "phone" => "206-555-1007"
    ),

    array(
        "firstName" => "Ashley",
        "lastName" => "Thomas",
        "age" => 30,
        "phone" => "253-555-1008"
    ),

    array(
        "firstName" => "Christopher",
        "lastName" => "Moore",
        "age" => 38,
        "phone" => "425-555-1009"
    ),

    array(
        "firstName" => "Amanda",
        "lastName" => "Martin",
        "age" => 27,
        "phone" => "206-555-1010"
    )

);


// Display all customer records
echo "<h2>All Customers</h2>";

echo "<table>";

echo "
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Phone Number</th>
</tr>
";

foreach ($customers as $customer) {

    echo "<tr>";

    echo "<td>" . $customer["firstName"] . "</td>";
    echo "<td>" . $customer["lastName"] . "</td>";
    echo "<td>" . $customer["age"] . "</td>";
    echo "<td>" . $customer["phone"] . "</td>";

    echo "</tr>";
}

echo "</table>";


// Search by first name using array_column() and array_search()
$firstNames = array_column($customers, "firstName");

$firstNameSearch = array_search("Emily", $firstNames);

echo "<h2>Search by First Name</h2>";

if ($firstNameSearch !== false) {

    echo "Customer Found:<br>";

    echo "Name: "
        . $customers[$firstNameSearch]["firstName"]
        . " "
        . $customers[$firstNameSearch]["lastName"]
        . "<br>";

    echo "Age: "
        . $customers[$firstNameSearch]["age"]
        . "<br>";

    echo "Phone: "
        . $customers[$firstNameSearch]["phone"];

} else {

    echo "Customer was not found.";
}


// Search by last name
$lastNames = array_column($customers, "lastName");

$lastNameSearch = array_search("Wilson", $lastNames);

echo "<h2>Search by Last Name</h2>";

if ($lastNameSearch !== false) {

    echo "Customer Found:<br>";

    echo "Name: "
        . $customers[$lastNameSearch]["firstName"]
        . " "
        . $customers[$lastNameSearch]["lastName"]
        . "<br>";

    echo "Age: "
        . $customers[$lastNameSearch]["age"]
        . "<br>";

    echo "Phone: "
        . $customers[$lastNameSearch]["phone"];

} else {

    echo "Customer was not found.";
}


// Search by phone number
$phoneNumbers = array_column($customers, "phone");

$phoneSearch = array_search("425-555-1009", $phoneNumbers);

echo "<h2>Search by Phone Number</h2>";

if ($phoneSearch !== false) {

    echo "Customer Found:<br>";

    echo "Name: "
        . $customers[$phoneSearch]["firstName"]
        . " "
        . $customers[$phoneSearch]["lastName"]
        . "<br>";

    echo "Age: "
        . $customers[$phoneSearch]["age"]
        . "<br>";

    echo "Phone: "
        . $customers[$phoneSearch]["phone"];

} else {

    echo "Customer was not found.";
}


// Search by age
$ages = array_column($customers, "age");

$ageSearch = array_search(30, $ages);

echo "<h2>Search by Age</h2>";

if ($ageSearch !== false) {

    echo "Customer Found:<br>";

    echo "Name: "
        . $customers[$ageSearch]["firstName"]
        . " "
        . $customers[$ageSearch]["lastName"]
        . "<br>";

    echo "Age: "
        . $customers[$ageSearch]["age"]
        . "<br>";

    echo "Phone: "
        . $customers[$ageSearch]["phone"];

} else {

    echo "Customer was not found.";
}

?>

</body>
</html>