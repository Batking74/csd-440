<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NazirMyInteger</title>
</head>
<body>

<pre>
<?php
/*
Name: Nazir Knuckles
Date: July 20, 2026
Assignment: MyInteger Class

Purpose:
This program creates a class that stores an integer and determines
whether the integer is even, odd, or prime. The program also
demonstrates getter and setter methods by creating two objects
and testing all class methods.
*/

/**
 * Class NazirMyInteger
 * Stores a single integer and provides methods
 * to determine if a number is even, odd, or prime.
 */
class NazirMyInteger
{
    // Stores the integer value.
    private $number;

    /**
     * Constructor
     * Initializes the object with an integer value.
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Getter method
     * Returns the current integer.
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Setter method
     * Updates the integer value.
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Determines whether a number is even.
     */
    public function isEven($number)
    {
        return ($number % 2 == 0);
    }

    /**
     * Determines whether a number is odd.
     */
    public function isOdd($number)
    {
        return ($number % 2 != 0);
    }

    /**
     * Determines whether the object's integer is prime.
     */
    public function isPrime()
    {
        if ($this->number < 2)
        {
            return false;
        }

        for ($i = 2; $i <= sqrt($this->number); $i++)
        {
            if ($this->number % $i == 0)
            {
                return false;
            }
        }

        return true;
    }
}

/* ---------------------------------------------------------
   Create two objects and test every method.
--------------------------------------------------------- */

$integer1 = new NazirMyInteger(12);
$integer2 = new NazirMyInteger(17);

echo "========== Object 1 ==========\n";
echo "Current Number: " . $integer1->getNumber() . "\n";
echo "Is Even? " . ($integer1->isEven($integer1->getNumber()) ? "Yes" : "No") . "\n";
echo "Is Odd? " . ($integer1->isOdd($integer1->getNumber()) ? "Yes" : "No") . "\n";
echo "Is Prime? " . ($integer1->isPrime() ? "Yes" : "No") . "\n\n";

echo "========== Object 2 ==========\n";
echo "Current Number: " . $integer2->getNumber() . "\n";
echo "Is Even? " . ($integer2->isEven($integer2->getNumber()) ? "Yes" : "No") . "\n";
echo "Is Odd? " . ($integer2->isOdd($integer2->getNumber()) ? "Yes" : "No") . "\n";
echo "Is Prime? " . ($integer2->isPrime() ? "Yes" : "No") . "\n\n";

/* ---------------------------------------------------------
   Test the setter method.
--------------------------------------------------------- */

echo "========== Testing Setter ==========\n";

$integer1->setNumber(29);

echo "Updated Number: " . $integer1->getNumber() . "\n";
echo "Is Even? " . ($integer1->isEven($integer1->getNumber()) ? "Yes" : "No") . "\n";
echo "Is Odd? " . ($integer1->isOdd($integer1->getNumber()) ? "Yes" : "No") . "\n";
echo "Is Prime? " . ($integer1->isPrime() ? "Yes" : "No") . "\n";

?>
</pre>

</body>
</html>