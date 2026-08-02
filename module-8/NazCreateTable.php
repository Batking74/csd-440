<?php
/*
    Name: Nazir Knuckles
    Date: August 2, 2026
    Assignment: Module 8.2 Programming Assignment
    Purpose: Creates the video_games table.
*/

$connection = mysqli_connect("localhost", "student1", "pass", "baseball_01");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS video_games (
    gameID INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    genre VARCHAR(50),
    platform VARCHAR(50),
    releaseYear INT,
    rating DECIMAL(3,1)
)";

if (mysqli_query($connection, $sql)) {
    echo "<h2>Table created successfully.</h2>";
} else {
    echo "<h2>Error creating table: " . mysqli_error($connection) . "</h2>";
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Table</title>
</head>
<body>
</body>
</html>