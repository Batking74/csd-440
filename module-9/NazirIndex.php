<?php
/*
    Name: Nazir Knuckles
    Date: August 10, 2026
    Assignment: Module 9 Programming Assignment
    Purpose: Provides navigation links to the Module 9 programs
             and the programs created in Module 8.
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nazir Video Game Database</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 40px;
        }

        .container {
            background-color: white;
            max-width: 700px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h1 {
            color: #222;
        }

        h2 {
            color: #444;
            margin-top: 30px;
        }

        a {
            display: block;
            width: 300px;
            margin: 12px auto;
            padding: 12px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #555;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Video Game Database</h1>

    <p>
        Welcome to my Video Game Database.
        Select a program below.
    </p>

    <h2>Module 9 Programs</h2>

    <a href="NazirQuery.php">Search Video Games</a>

    <a href="NazirForms.php">Add a Video Game</a>

    <h2>Module 8 Programs</h2>

    <a href="NazCreateTable.php">Create Video Games Table</a>

    <a href="NazPopulateTable.php">Populate Video Games Table</a>

    <a href="NazQueryTable.php">View All Video Games</a>

    <a href="NazDropTable.php">Drop Video Games Table</a>

</div>

</body>
</html>