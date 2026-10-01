<?php
/*
 * File: NoorJSON.php
 * Name: Noor Al Salihi
 * Course: CSD 440
 * Module: 10.2 Programming Assignment
 * Purpose: Displays a form that collects user data
 *          and sends it to NoorJSONResponse.php.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Noor JSON Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 40px;
        }

        .container {
            width: 500px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px #cccccc;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333333;
            color: white;
            border: none;
            margin-top: 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555555;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>JSON User Information Form</h1>

    <form action="NoorJSONResponse.php" method="post">

        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required>

        <label for="language">Favorite Programming Language:</label>
        <select id="language" name="language" required>
            <option value="">Select a language</option>
            <option value="PHP">PHP</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
            <option value="JavaScript">JavaScript</option>
        </select>

        <label for="student">Student Status:</label>
        <select id="student" name="student" required>
            <option value="">Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments" rows="4" required></textarea>

        <input type="submit" value="Convert to JSON">

    </form>

</div>

</body>
</html>