<?php
/*
    Name: Nazir Knuckles
    Date: August 10, 2026
    Assignment: Module 9 Programming Assignment
    Purpose: Provides a form for adding a new video game
             record to the video_games table.
*/

// Connect to the database.
$connection = mysqli_connect(
    "localhost",
    "student1",
    "pass",
    "baseball_01"
);

// Check the database connection.
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create a message for the user.
$message = "";

// Check whether the form was submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve and clean the form values.
    $title = trim($_POST["title"]);
    $genre = trim($_POST["genre"]);
    $platform = trim($_POST["platform"]);
    $releaseYear = trim($_POST["releaseYear"]);
    $rating = trim($_POST["rating"]);

    // Make sure all fields contain information.
    if (
        empty($title) ||
        empty($genre) ||
        empty($platform) ||
        empty($releaseYear) ||
        empty($rating)
    ) {

        $message = "Please complete all fields.";

    } else {

        /*
            Use a prepared statement to safely insert
            the user's information into the database.
        */
        $sql = "
            INSERT INTO video_games
            (title, genre, platform, releaseYear, rating)
            VALUES (?, ?, ?, ?, ?)
        ";

        $statement = mysqli_prepare($connection, $sql);

        if ($statement) {

            // Bind the form values to the SQL statement.
            mysqli_stmt_bind_param(
                $statement,
                "sssid",
                $title,
                $genre,
                $platform,
                $releaseYear,
                $rating
            );

            // Execute the INSERT statement.
            if (mysqli_stmt_execute($statement)) {

                $message = "Video game added successfully!";

            } else {

                $message = "Error adding video game: " .
                    mysqli_stmt_error($statement);
            }

            // Close the prepared statement.
            mysqli_stmt_close($statement);

        } else {

            $message = "Error preparing statement: " .
                mysqli_error($connection);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Nazir Forms</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #aaa;
            border-radius: 5px;
        }

        input[type="submit"] {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }

        .navigation {
            text-align: center;
            margin-top: 25px;
        }

        .navigation a {
            margin: 0 10px;
            color: #333;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Add a Video Game</h1>

    <?php if (!empty($message)) { ?>

        <div class="message">
            <?php echo htmlspecialchars($message); ?>
        </div>

    <?php } ?>

    <form method="POST" action="NazirForms.php">

        <label for="title">Title:</label>

        <input
            type="text"
            id="title"
            name="title"
            placeholder="Enter game title"
            required
        >

        <label for="genre">Genre:</label>

        <input
            type="text"
            id="genre"
            name="genre"
            placeholder="Enter genre"
            required
        >

        <label for="platform">Platform:</label>

        <input
            type="text"
            id="platform"
            name="platform"
            placeholder="Enter platform"
            required
        >

        <label for="releaseYear">Release Year:</label>

        <input
            type="number"
            id="releaseYear"
            name="releaseYear"
            placeholder="Enter release year"
            required
        >

        <label for="rating">Rating:</label>

        <input
            type="number"
            id="rating"
            name="rating"
            step="0.1"
            min="0"
            max="10"
            placeholder="Enter rating from 0 to 10"
            required
        >

        <input
            type="submit"
            value="Add Video Game"
        >

    </form>

    <div class="navigation">

        <a href="NazirIndex.php">Home</a>

        |

        <a href="NazirQuery.php">Search Games</a>

    </div>

</div>

</body>
</html>

<?php

// Close the database connection.
mysqli_close($connection);

?>