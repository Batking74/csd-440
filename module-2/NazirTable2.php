<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }

        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            width: 50px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
/*
 * Name: Nazir Knuckles
 * Date: June 21, 2026
 * Assignment: Table 2 - PHP Nested Loops
 * Purpose: Create an HTML table populated with random numbers generated using PHP nested loops.
 */
?>

<h1>Random Number Table</h1>

<table>

<?php
// Create 5 rows
for ($row = 1; $row <= 5; $row++) {
?>

<tr>

<?php
    // Create 5 columns in each row
    for ($column = 1; $column <= 5; $column++) {

        // Generate a random number between 1 and 100
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

</table>

</body>
</html>