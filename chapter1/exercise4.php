<?php
/** Write a PHP program that sets the variable $first_name to your first name and
 * $last_name to your last name separated by a space. Also print out the lenght of
 * that string
 */
$first_name = 'Rubén';
$last_name = 'Cisneros';
$complete_name = "$first_name $last_name";
printf('Name: %s, Lenght of name: %d', $complete_name, strlen($complete_name));
?>