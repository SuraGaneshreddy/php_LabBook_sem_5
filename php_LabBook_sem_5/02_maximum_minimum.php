<?php
$num1 = 45;
$num2 = 78;

if ($num1 > $num2) {
    $max = $num1;
    $min = $num2;
} else {
    $max = $num2;
    $min = $num1;
}

echo "Number 1: $num1 <br>";
echo "Number 2: $num2 <br>";
echo "Maximum Number: $max <br>";
echo "Minimum Number: $min";
?>