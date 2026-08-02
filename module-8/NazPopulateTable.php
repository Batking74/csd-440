<?php
/*
    Name: Nazir Knuckles
    Date: August 2, 2026
    Assignment: Module 8.2 Programming Assignment
    Purpose: Populates the video_games table.
*/

$connection = mysqli_connect("localhost", "student1", "pass", "baseball_01");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "
INSERT INTO video_games(title, genre, platform, releaseYear, rating)
VALUES
('God of War Ragnarok','Action','PS5',2022,9.8),
('Minecraft','Sandbox','PC',2011,9.5),
('Spider-Man 2','Action','PS5',2023,9.4),
('Elden Ring','RPG','PC',2022,9.7),
('Rocket League','Sports','PC',2015,8.9)
";

if (mysqli_query($connection, $sql)) {
    echo "<h2>Records inserted successfully.</h2>";
} else {
    echo "<h2>Error inserting records: " . mysqli_error($connection) . "</h2>";
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Populate Table</title>
</head>
<body>
</body>
</html>