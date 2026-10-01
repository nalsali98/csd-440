<?php
/*
 * File: NoorJSONResponse.php
 * Name: Noor Al Salihi
 * Course: CSD 440
 * Module: 10.2 Programming Assignment
 * Purpose: Receives form data, validates the information,
 *          converts it to JSON using json_encode(),
 *          and displays the JSON result.
 */

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = trim($_POST["firstName"] ?? "");
    $lastName = trim($_POST["lastName"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $age = trim($_POST["age"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $city = trim($_POST["city"] ?? "");
    $state = trim($_POST["state"] ?? "");
    $language = trim($_POST["language"] ?? "");
    $student = trim($_POST["student"] ?? "");
    $comments = trim($_POST["comments"] ?? "");

    if (
        $firstName === "" ||
        $lastName === "" ||
        $email === "" ||
        $age === "" ||
        $phone === "" ||
        $city === "" ||
        $state === "" ||
        $language === "" ||
        $student === "" ||
        $comments === ""
    ) {
        $error = "Error: All fields must be completed.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Error: Please enter a valid email address.";
    } else {

        $userData = [
            "firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "age" => (int)$age,
            "phone" => $phone,
            "city" => $city,
            "state" => $state,
            "favoriteProgrammingLanguage" => $language,
            "studentStatus" => $student,
            "comments" => $comments
        ];

        $jsonData = json_encode($userData, JSON_PRETTY_PRINT);

        if ($jsonData === false) {
            $error = "Error: The data could not be converted to JSON.";
        }
    }

} else {
    $error = "Error: No form data was submitted.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Noor JSON Results</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 40px;
        }

        .container {
            width: 600px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px #cccccc;
        }

        h1 {
            text-align: center;
        }

        pre {
            background-color: #eeeeee;
            padding: 20px;
            border-radius: 5px;
            overflow-x: auto;
        }

        .error {
            background-color: #eeeeee;
            padding: 15px;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>JSON Form Results</h1>

    <?php if ($error !== ""): ?>

        <div class="error">
            <?php echo htmlspecialchars($error); ?>
        </div>

    <?php else: ?>

        <h2>JSON Encoded Data</h2>

        <pre><?php echo htmlspecialchars($jsonData); ?></pre>

    <?php endif; ?>

    <a href="NoorJSON.php">Return to Form</a>

</div>

</body>
</html>