<?php
/*
    Name: Nazir Knuckles
    Date: August 2, 2026
    Assignment: Module 8.2 Programming Assignment
    Purpose: Drops the video_games table.
*/

$connection = mysqli_connect("localhost", "student1", "pass", "baseball_01");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DROP TABLE IF EXISTS video_games";

if (mysqli_query($connection, $sql)) {
    echo "<h2>Table dropped successfully.</h2>";
} else {
    echo "<h2>Error dropping table: " . mysqli_error($connection) . "</h2>";
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Drop Table</title>
</head>
<body>
</body>
</html>