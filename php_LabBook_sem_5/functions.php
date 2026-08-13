<?php

// types of functions
// 1. User-defined functions
// 2. Built-in functions

$str1 = "     Hello     ";
$str2 = "World!";
echo $str1 . " " . $str2;
echo "<br>";
echo strlen($str1); // built-in function
echo "<br>";
echo strlen($str2);
echo "<br>";
echo strrev($str1); // built-in function
echo "<br>";
$str3 = trim($str1); // built-in function
echo strlen($str3 . $str2);
echo "<br>";
echo str_ireplace(["Hello", "World!"], ["Hi", "Universe"], $str3 . " " . $str2); // built-in function
$str4 = "hi i am learning php. i am good at it. i am enjoying it.";
echo "<br>";
echo ucfirst($str4);
echo "<br>";
echo ucwords($str4);