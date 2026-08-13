<?php

// Index Array
// Single Dimension Array
$array_one = array("One", "Two", "three");
$array_two = ["five", "six", "Seven", 8];

//Traverse the arrays
//Data Extractions

foreach($array_one as $key =>$first){
  if($first == "three"){
    echo "$key - $first .";
    break;
  }
  echo "$key - $first !  <br>";
}
echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r(array_push($array_one,"Four"));
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r(array_pop($array_one));
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r($array_two);
echo "</pre>";

$array_three = array_merge($array_one,$array_two);

echo "<pre>";
print_r($array_three);
echo "</pre>";

echo "<pre>";
print_r(array_keys($array_one));
echo "</pre>";

echo "<pre>";
print_r(array_flip($array_one));
echo "</pre>";

echo "<pre>";
print_r(array_values($array_one));
echo "</pre>";

























































?>