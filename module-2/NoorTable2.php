<?php
/*
Name: Noor Al Salihi
Date: August 21, 2026
Assignment: Module 2.2 Programming Assignment
Purpose: Create an HTML table using nested PHP loops and display
         PHP-generated random numbers in each cell.
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Module 2.2 - PHP Random Number Table</title>
</head>

<body>

    <h1>PHP Random Number Table</h1>
    <p>This table displays random numbers generated using PHP nested loops.</p>

    <table border="1">
        <tbody>

            <?php
            // Outer loop creates five rows for the table.
            for ($row = 1; $row <= 5; $row++) {
            ?>

                <tr>

                    <?php
                    // Inner loop creates five cells in each row.
                    for ($column = 1; $column <= 5; $column++) {

                        // Generate a random number between 1 and 100.
                        $randomNumber = rand(1, 100);
                    ?>

                        <td><?php echo $randomNumber; ?></td>

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