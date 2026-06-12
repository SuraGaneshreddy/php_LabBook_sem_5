<?php
function calculatePercentage($m1, $m2, $m3, $m4, $m5) {
    $total = $m1 + $m2 + $m3 + $m4 + $m5;
    $percentage = $total / 5;

    echo "Total Marks: $total<br>";
    return $percentage;
}

$percentage = calculatePercentage(80, 75, 90, 85, 70);
echo "Percentage: $percentage%";
?>