<?php
/** Write a PHP program that uses the increment operator (++) and the combined 
 * multiplication operator (*=) to print put the numbers from 1 to 5 and the powers 
 * of 2 from (2¹) to 32 (2⁵)
 */
$increment = 1;
$base = 2;
$power = 1;

$power *= $base;
print "$increment, $power </br>";
$increment++;
$power *= $base;
print "$increment, $power </br>";
$increment++;
$power *= $base;
print "$increment, $power </br>";
$increment++;
$power *= $base;
print "$increment, $power </br>";
$increment++;
$power *= $base;
print "$increment, $power </br>";
?>