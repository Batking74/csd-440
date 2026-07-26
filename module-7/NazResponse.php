<?php
/*
    Name: Nazir Knuckles
    Date: July 26, 2026
    Assignment: PHP Form Assignment

    Purpose:
    Validate the submitted form data. If all fields
    are valid, display the information in a formatted
    table. Otherwise, display all validation errors.
*/


/*---------------------------------------------
    Retrieve submitted form data
----------------------------------------------*/

$fullName = trim($_POST["fullname"]);
$age = trim($_POST["age"]);
$email = trim($_POST["email"]);
$birthDate = trim($_POST["birthdate"]);
$favoriteColor = trim($_POST["color"]);
$major = trim($_POST["major"]);
$gender = isset($_POST["gender"]) ? $_POST["gender"] : "";


/*---------------------------------------------
    Store validation errors
----------------------------------------------*/

$errors = array();


/*---------------------------------------------
    Validate Full Name
----------------------------------------------*/

if ($fullName == "")
{
    $errors[] = "Full Name is required.";
}


/*---------------------------------------------
    Validate Age
----------------------------------------------*/

if ($age == "")
{
    $errors[] = "Age is required.";
}
elseif (!is_numeric($age) || $age < 1 || $age > 120)
{
    $errors[] = "Age must be between 1 and 120.";
}


/*---------------------------------------------
    Validate Email
----------------------------------------------*/

if ($email == "")
{
    $errors[] = "Email Address is required.";
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $errors[] = "Please enter a valid email address.";
}


/*---------------------------------------------
    Validate Birth Date
----------------------------------------------*/

if ($birthDate == "")
{
    $errors[] = "Birth Date is required.";
}


/*---------------------------------------------
    Validate Favorite Color
----------------------------------------------*/

if ($favoriteColor == "")
{
    $errors[] = "Favorite Color is required.";
}


/*---------------------------------------------
    Validate Major
----------------------------------------------*/

if ($major == "")
{
    $errors[] = "Please select a major.";
}


/*---------------------------------------------
    Validate Gender
----------------------------------------------*/

if ($gender == "")
{
    $errors[] = "Please select a gender.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Results</title>

    <!-- Page Styling -->
    <style>

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 650px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        td {
            border: 1px solid #999;
            padding: 10px;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }

        a {
            text-decoration: none;
            color: blue;
        }

    </style>

</head>

<body>

<div class="container">

<?php

/*---------------------------------------------
    Check for validation errors
----------------------------------------------*/

if (count($errors) > 0)
{

    echo "<h2 class='error'>Form Submission Errors</h2>";

    echo "<ul>";

    /* Display each error message */

    foreach ($errors as $error)
    {
        echo "<li>$error</li>";
    }

    echo "</ul>";

    echo "<p><a href='NazForm.html'>Return to the Form</a></p>";

}
else
{

    echo "<h2 class='success'>Information Submitted Successfully</h2>";

    /* Display submitted information */

    echo "<table>";

    echo "<tr>";
    echo "<td><strong>Full Name</strong></td>";
    echo "<td>$fullName</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><strong>Age</strong></td>";
    echo "<td>$age</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><strong>Email Address</strong></td>";
    echo "<td>$email</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><strong>Birth Date</strong></td>";
    echo "<td>$birthDate</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><strong>Favorite Color</strong></td>";
    echo "<td>
            <span style='display:inline-block;
                         width:20px;
                         height:20px;
                         background:$favoriteColor;
                         border:1px solid black;'>
            </span>
            $favoriteColor
          </td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><strong>Major</strong></td>";
    echo "<td>$major</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><strong>Gender</strong></td>";
    echo "<td>$gender</td>";
    echo "</tr>";

    echo "</table>";

}

?>

</div>

</body>

</html>