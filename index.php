<?php

//Task 2: Variable Declaration and Data Types

//Declare Variables:
$firstName = "Alexian";
$age = 19;
$isMarried = false;

//Variable Output:
echo $firstName . " " . $age . " " .$isMarried;

echo "<br/>";

//Task 3: Conditionals

//If-Else Statements:
if ($age >= 18) {
    echo "You're an adult";
} else {
    echo "You're a minor";
}

echo "<br/>";

//Task 4: Loops

//For Loop:
for ($num1 = 1; $num1 <= 5; $num1++) {
    echo $num1;
}

echo "<br/>";

//While Loop:
$num2 = 5;
while ($num2 > 0) {
    echo $num2;
    $num2--;
}

//Task 5: Arrays

//Indexed Array:
$fruits = array("Apple", "Banana", "Orange");

//Associative Array:
$person = array(
    "name" => "Alexian",
    "age" => 19,
    "city" => "Davao City"
);


//Task 6: Functions

//Create a Function:
function addNumbers($addNum1, $addNum2) {
    $sum = $addNum1 + $addNum2;
    return $sum;
}

//Function Call:

echo "<br/>";
echo addNumbers(5, 5);

echo "<br/>";
echo addNumbers(50, 50);
?>