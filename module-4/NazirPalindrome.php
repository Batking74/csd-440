<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nazir Palindrome</title>
</head>
<body>

<?php
/*
Name: Nazir Knuckles
Date: July 5, 2026
Assignment: Palindrome Assignment

Purpose:
This program determines whether a string is a palindrome by
comparing the original string to its reverse.
*/

/**
 * Determines whether a string is a palindrome.
 *
 * @param string $text
 * @return bool
 */
function isPalindrome($text)
{
    // Convert to lowercase and remove spaces
    $cleanText = strtolower(str_replace(" ", "", $text));

    // Reverse the string
    $reverseText = strrev($cleanText);

    // Compare original and reversed strings
    return $cleanText === $reverseText;
}

// Test strings (3 palindromes, 3 non-palindromes)
$strings = array(
    "racecar",
    "madam",
    "level",
    "computer",
    "programming",
    "hello"
);

echo "<h1>Palindrome Checker</h1>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>Original String</th>
        <th>Reversed String</th>
        <th>Result</th>
      </tr>";

// Loop through each test string
foreach ($strings as $word)
{
    $reverse = strrev(strtolower(str_replace(" ", "", $word)));

    echo "<tr>";
    echo "<td>$word</td>";
    echo "<td>$reverse</td>";

    // Display result
    if (isPalindrome($word))
    {
        echo "<td><strong>Palindrome</strong></td>";
    }
    else
    {
        echo "<td><strong>Not a Palindrome</strong></td>";
    }

    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>