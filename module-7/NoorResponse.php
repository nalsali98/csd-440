<?php

/*
    Name: Noor Al Salihi
    Assignment: Module 7.2 Programming Assignment
    Purpose: Validate the seven fields submitted from NoorForm.html.
    If all information is valid, display the submitted information.
    Otherwise, display an error message.
*/

// Get submitted form values.
$firstName = trim($_POST["firstName"] ?? "");
$lastName = trim($_POST["lastName"] ?? "");
$email = trim($_POST["email"] ?? "");
$age = trim($_POST["age"] ?? "");
$birthDate = trim($_POST["birthDate"] ?? "");
$favoriteColor = trim($_POST["favoriteColor"] ?? "");
$contactMethod = trim($_POST["contactMethod"] ?? "");

// Array used to store validation errors.
$errors = [];

// Check first name.
if (empty($firstName)) {
    $errors[] = "First name is required.";
}

// Check last name.
if (empty($lastName)) {
    $errors[] = "Last name is required.";
}

// Check email.
if (empty($email)) {
    $errors[] = "Email address is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}

// Check age.
if ($age === "") {
    $errors[] = "Age is required.";
} elseif (!filter_var($age, FILTER_VALIDATE_INT)
    || $age < 1
    || $age > 120) {

    $errors[] = "Age must be a number between 1 and 120.";
}

// Check birth date.
if (empty($birthDate)) {
    $errors[] = "Birth date is required.";
}

// Check favorite color.
if (empty($favoriteColor)) {
    $errors[] = "Favorite color is required.";
}

// Check contact method.
if (empty($contactMethod)) {
    $errors[] = "Preferred contact method is required.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Noor Form Response</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }

        .container {
            width: 550px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px #cccccc;
        }

        h1 {
            text-align: center;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #cccccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #eeeeee;
        }

        a {
            display: inline-block;
            margin-top: 20px;
        }

    </style>

</head>

<body>

<div class="container">

<?php

// If errors exist, display the error page.
if (!empty($errors)) {

    echo "<h1 class='error'>Form Error</h1>";

    echo "<p>Please correct the following problem(s):</p>";

    echo "<ul>";

    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }

    echo "</ul>";

    echo "<a href='NoorForm.html'>Return to Form</a>";

} else {

    // Display submitted information when all fields are valid.

    echo "<h1 class='success'>Form Submitted Successfully</h1>";

    echo "<p>Thank you. The information entered is shown below.</p>";

    echo "<table>";

    echo "<tr>
            <th>Field</th>
            <th>Information Entered</th>
          </tr>";

    echo "<tr>
            <td>First Name</td>
            <td>" . htmlspecialchars($firstName) . "</td>
          </tr>";

    echo "<tr>
            <td>Last Name</td>
            <td>" . htmlspecialchars($lastName) . "</td>
          </tr>";

    echo "<tr>
            <td>Email</td>
            <td>" . htmlspecialchars($email) . "</td>
          </tr>";

    echo "<tr>
            <td>Age</td>
            <td>" . htmlspecialchars($age) . "</td>
          </tr>";

    echo "<tr>
            <td>Birth Date</td>
            <td>" . htmlspecialchars($birthDate) . "</td>
          </tr>";

    echo "<tr>
            <td>Favorite Color</td>
            <td>" . htmlspecialchars($favoriteColor) . "</td>
          </tr>";

    echo "<tr>
            <td>Preferred Contact Method</td>
            <td>" . htmlspecialchars($contactMethod) . "</td>
          </tr>";

    echo "</table>";

    echo "<a href='NoorForm.html'>Submit Another Form</a>";
}

?>

</div>

</body>

</html>