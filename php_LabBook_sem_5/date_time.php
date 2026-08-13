<?php

date_default_timezone_set("Asia/Kolkata");
$date1 = date("d-m-y : d-M-y : H:i:s : l");
// The outcome of Date function is always a string. So, String cannot be compared with the date function
echo "$date1";

$date_1 = new DateTime("2026-07-07");
$date_2 = new DateTime("2006-09-06");
$Age_year = date_diff($date_1,$date_2);
echo "<br>";
echo "Age in years is : " . $Age_year->y;












































































?>