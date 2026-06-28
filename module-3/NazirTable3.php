<?php
/*
    Name: Nazir
    Date: June 28, 2026
    Assignment: Module 3 - PHP Table with Function

    Purpose:
    Display a table where each cell contains the sum of two randomly
    generated numbers using a function stored in an external file.
*/

// Include the external function file
include 'tableFunctions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Random Number Table</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 30px;
        }

        table {
            margin: auto;
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            width: 70px;
            height: 45px;
            text-align: center;
            font-size: 18px;
        }

        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<h2>Random Number Sum Table</h2>

<table>

<?php
// Create a 5x5 table
for ($row = 1; $row <= 5; $row++) {

    echo "<tr>";

    for ($col = 1; $col <= 5; $col++) {

        // Generate two random numbers
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);

        // Display the sum returned by the function
        echo "<td>" . addNumbers($number1, $number2) . "</td>";
    }

    echo "</tr>";
}
?>

</table>

</body>
</html>