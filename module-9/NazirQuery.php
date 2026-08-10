<?php
/*
    Name: Nazir Knuckles
    Date: August 9, 2026
    Assignment: Module 9 Programming Assignment
    Purpose: Allows the user to search the video_games table
             based on form input.
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

// Store the user's search input.
$search = "";

// Check whether the form was submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $search = trim($_POST["search"]);

    /*
        Search the title, genre, and platform columns.
        The wildcard allows partial matches.
    */
    $sql = "
        SELECT *
        FROM video_games
        WHERE title LIKE ?
           OR genre LIKE ?
           OR platform LIKE ?
        ORDER BY title
    ";

    // Prepare the SQL statement.
    $statement = mysqli_prepare($connection, $sql);

    if ($statement) {

        $searchTerm = "%" . $search . "%";

        // Bind the search value to all three parameters.
        mysqli_stmt_bind_param(
            $statement,
            "sss",
            $searchTerm,
            $searchTerm,
            $searchTerm
        );

        // Execute the query.
        mysqli_stmt_execute($statement);

        // Get the query results.
        $result = mysqli_stmt_get_result($statement);

    } else {
        die("Error preparing query: " . mysqli_error($connection));
    }

} else {

    // Display all records when the page is first opened.
    $sql = "
        SELECT *
        FROM video_games
        ORDER BY title
    ";

    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die("Error retrieving records: " . mysqli_error($connection));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Nazir Query</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
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
            text-align: center;
            margin-bottom: 25px;
        }

        input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #aaa;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
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

    <h1>Search Video Games</h1>

    <form method="POST" action="NazirQuery.php">

        <label for="search">
            Search by title, genre, or platform:
        </label>

        <br><br>

        <input
            type="text"
            id="search"
            name="search"
            value="<?php echo htmlspecialchars($search); ?>"
            placeholder="Example: PS5, Action, Minecraft"
        >

        <input type="submit" value="Search">

    </form>

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

        // Check whether records were returned.
        if (mysqli_num_rows($result) > 0) {

            // Display each record.
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<tr>";

                echo "<td>" .
                    htmlspecialchars($row["gameID"]) .
                    "</td>";

                echo "<td>" .
                    htmlspecialchars($row["title"]) .
                    "</td>";

                echo "<td>" .
                    htmlspecialchars($row["genre"]) .
                    "</td>";

                echo "<td>" .
                    htmlspecialchars($row["platform"]) .
                    "</td>";

                echo "<td>" .
                    htmlspecialchars($row["releaseYear"]) .
                    "</td>";

                echo "<td>" .
                    htmlspecialchars($row["rating"]) .
                    "</td>";

                echo "</tr>";
            }

        } else {

            echo "<tr>";
            echo "<td colspan='6'>No matching records found.</td>";
            echo "</tr>";
        }

        ?>

    </table>

    <div class="navigation">
        <a href="NazirIndex.php">Home</a>
        |
        <a href="NazirForms.php">Add a Video Game</a>
    </div>

</div>

</body>
</html>

<?php

// Close the database connection.
mysqli_close($connection);

?>