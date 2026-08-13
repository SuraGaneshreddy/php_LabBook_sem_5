<?php
$a = 20;
$b = 10;

echo "<h2>Arithmetic Operators</h2>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

echo "<h2>Comparison Operators</h2>";
var_dump($a == $b);
echo "<br>";
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);

echo "<h2>Logical Operators</h2>";
var_dump($a > 5 && $b < 20);
?>