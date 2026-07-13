<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Naz Customers</title>
</head>
<body>

<?php
/*
    Name: Nazir Knuckles
    Date: July 12, 2026
    Assignment: Customers Array Assignment
    Purpose: Create an array of customers, display all customer records,
    and use array methods to locate and display specific customer information.
*/

// Create an array containing customer information.
$customers = [
    ["firstName"=>"John", "lastName"=>"Smith", "age"=>28, "phone"=>"410-555-1001"],
    ["firstName"=>"Emma", "lastName"=>"Johnson", "age"=>35, "phone"=>"410-555-1002"],
    ["firstName"=>"Michael", "lastName"=>"Brown", "age"=>42, "phone"=>"410-555-1003"],
    ["firstName"=>"Olivia", "lastName"=>"Davis", "age"=>24, "phone"=>"410-555-1004"],
    ["firstName"=>"James", "lastName"=>"Wilson", "age"=>31, "phone"=>"410-555-1005"],
    ["firstName"=>"Sophia", "lastName"=>"Miller", "age"=>27, "phone"=>"410-555-1006"],
    ["firstName"=>"Daniel", "lastName"=>"Moore", "age"=>39, "phone"=>"410-555-1007"],
    ["firstName"=>"Ava", "lastName"=>"Taylor", "age"=>22, "phone"=>"410-555-1008"],
    ["firstName"=>"William", "lastName"=>"Anderson", "age"=>45, "phone"=>"410-555-1009"],
    ["firstName"=>"Mia", "lastName"=>"Thomas", "age"=>30, "phone"=>"410-555-1010"]
];


// Display all customers.
echo "<h2>Customer List</h2>";

echo "<table border='1' cellpadding='6'>";
echo "<tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Phone Number</th>
      </tr>";

foreach ($customers as $customer)
{
    echo "<tr>";
    echo "<td>{$customer['firstName']}</td>";
    echo "<td>{$customer['lastName']}</td>";
    echo "<td>{$customer['age']}</td>";
    echo "<td>{$customer['phone']}</td>";
    echo "</tr>";
}

echo "</table>";


// Search by first name.
echo "<h2>Search by First Name: Emma</h2>";

foreach ($customers as $customer)
{
    if ($customer["firstName"] == "Emma")
    {
        echo "Name: {$customer['firstName']} {$customer['lastName']}<br>";
        echo "Age: {$customer['age']}<br>";
        echo "Phone: {$customer['phone']}<br><br>";
    }
}


// Search by last name.
echo "<h2>Search by Last Name: Taylor</h2>";

foreach ($customers as $customer)
{
    if ($customer["lastName"] == "Taylor")
    {
        echo "Name: {$customer['firstName']} {$customer['lastName']}<br>";
        echo "Age: {$customer['age']}<br>";
        echo "Phone: {$customer['phone']}<br><br>";
    }
}


// Search by age.
echo "<h2>Customers Age 30 or Older</h2>";

foreach ($customers as $customer)
{
    if ($customer["age"] >= 30)
    {
        echo "{$customer['firstName']} {$customer['lastName']} - Age {$customer['age']} - {$customer['phone']}<br>";
    }
}


// Display customer using a specific array index.
echo "<h2>Customer at Array Index 4</h2>";

echo "Name: " .
     $customers[4]["firstName"] . " " .
     $customers[4]["lastName"] . "<br>";

echo "Age: " . $customers[4]["age"] . "<br>";

echo "Phone: " . $customers[4]["phone"] . "<br>";

?>

</body>
</html>