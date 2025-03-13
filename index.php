<!DOCTYPE html>
<html>
<head>
    <title>Php Intro</title>
</head>
<body>

<?php

//exercise 1

$a = 15;
$b = 7;

$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;

echo "Sum: " . $sum . "<br>";
echo "Difference: " . $difference . "<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quotient . "<br>";

//exercise 2

$number = 10; 

if ($number % 2 == 0) {
    echo "$number is an Even number.<br>";
} else {
    echo "$number is an Odd number.<br>";
}


if ($number > 0) {
    echo "$number is a Positive number.<br>";
} elseif ($number < 0) {
    echo "$number is a Negative number.<br>";
} else {
    echo "$number is Zero.<br>";
}

//exercise 3

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo $i . "<br>";
    }
}

$fib1 = 0;
$fib2 = 1;

for ($i = 1; $i <= 10; $i++) {
    $fib_next = $fib1 + $fib2;
    
    if ($fib_next % 2 == 0) {
        echo $fib_next . "<br>";
    }

    $fib1 = $fib2;
    $fib2 = $fib_next;
}

?>

<!--exercise 4-->

<form method="POST">
    <label for="name">Enter your name:</label>
    <input type="text" name="name" required>
    <button type="submit">Submit</button>
</form>

<?php

function greet($name) {
    return "Hello, $name! Welcome!";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
    $name = htmlspecialchars($_POST["name"]); 
    echo "<p>" . greet($name) . "</p>";
}

?>

<form method="POST">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" required>
    <button type="submit">Calculate Square</button>
</form>

<?php
function square($num) {
    return $num * $num;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
    $num = $_POST["number"];
    echo "<p>The square of $num is: " . square($num) . "</p>";
}
?>

<!--exercise 5-->

<?php
$submitted_text = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["user_text"])) {
    $submitted_text = htmlspecialchars($_POST["user_text"]); 
}
?>

<form method="POST">
    <label for="user_text">Enter something:</label>
    <input type="text" name="user_text" required>
    <button type="submit">Submit</button>
</form>

<?php
if (!empty($submitted_text)) {
    echo "<p>You entered: <strong>$submitted_text</strong></p>";
}
?>

</body>
</html>