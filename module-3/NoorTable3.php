<?php
/*
Name: Noor Al Salihi
Date: August 21, 2026
Assignment: Module 3.2 Programming Assignment
Purpose: Create an HTML table using nested PHP loops and display
         the sum of two random numbers in each cell.
*/

// Include the external file that contains the addition function.
require_once 'NoorFunctions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Module 3.2 - PHP Function Table</title>
</head>

<body>

    <h1>PHP Random Number Sum Table</h1>
    <p>
        Each cell displays the sum of two random numbers
        using a function stored in an external PHP file.
    </p>

    <table border="1">
        <tbody>

            <?php
            // Outer loop creates five rows.
            for ($row = 1; $row <= 5; $row++) {
            ?>

                <tr>

                    <?php
                    // Inner loop creates five cells in each row.
                    for ($column = 1; $column <= 5; $column++) {

                        // Generate two random numbers between 1 and 100.
                        $randomNumberOne = rand(1, 100);
                        $randomNumberTwo = rand(1, 100);

                        // Call the external function and store the returned sum.
                        $sum = addRandomNumbers($randomNumberOne, $randomNumberTwo);
                    ?>

                        <td><?php echo $sum; ?></td>

                    <?php
                    }
                    ?>

                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>

</body>

</html>