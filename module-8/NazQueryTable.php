<?php
/*
    Name: Nazir Knuckles
    Date: August 2, 2026
    Assignment: Module 8.2 Programming Assignment
    Purpose: Displays all records in the video_games table.
*/

$connection = mysqli_connect("localhost", "student1", "pass", "baseball_01");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM video_games";

$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Query Table</title>

    <style>
        table{
            border-collapse:collapse;
            width:80%;
        }

        th,td{
            border:1px solid black;
            padding:8px;
            text-align:center;
        }

        th{
            background:#f2f2f2;
        }
    </style>

</head>
<body>

<h2>Video Games Table</h2>

<table>

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Genre</th>
    <th>Platform</th>
    <th>Release Year</th>
    <th>Rating</th>
</tr>

<?php

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){

        echo "<tr>";

        echo "<td>".$row["gameID"]."</td>";
        echo "<td>".$row["title"]."</td>";
        echo "<td>".$row["genre"]."</td>";
        echo "<td>".$row["platform"]."</td>";
        echo "<td>".$row["releaseYear"]."</td>";
        echo "<td>".$row["rating"]."</td>";

        echo "</tr>";
    }

}else{

    echo "<tr><td colspan='6'>No records found.</td></tr>";

}

mysqli_close($connection);

?>

</table>

</body>
</html>