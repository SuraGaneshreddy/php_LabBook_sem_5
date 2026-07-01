<?php
echo "<h2>Using For Loop</h2>";
for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br><h2>Using Foreach Loop</h2>";
$numbers = [5, 6, 7, 8, 9, 10];

foreach ($numbers as $number) {
    echo $number . " ";
}
?>