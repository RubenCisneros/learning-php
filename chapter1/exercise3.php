<?php
/**Modify your solution to the previos excersise to print out a formatted bill.
 * For each item in the meal, print the price, quantity, and total cost. Print the pre-tax
 * food and drink total, the post-tax total, and the total with tax and tip. Make sure that
 * prices in your output are vertically aligned.
 */
$hamburger_price = 4.95;
$milkshake_price = 1.95;
$cola_price = .85;
$tax_rate = .075;
$tip_rate = .16;

$cost_of_food = $hamburger_price * 2 + $milkshake_price + $cola_price;
$tax_amount = $cost_of_food * $tax_rate;
$tip_amount = $cost_of_food * $tip_rate;

printf("%d %-9s at \$%.2f each: \$%5.2f </br>", 1, 'Hamburger', $hamburger_price, $hamburger_price * 2);
printf("%d %-9s at \$%.2f each: \$%5.2f </br>", 1, 'Milkshake', $milkshake_price, $milkshake_price);
printf("%d %-9s at \$%.2f each: \$%5.2f </br>", 1, 'Cola', $cola_price, $cola_price);
printf("%-25s: \$%5.2f </br>",'Food total', $cost_of_food);
printf("%-25s: \$%5.2f </br>", 'Food and Tax total', $cost_of_food + $tax_amount);
printf("%-25s: \$%5.2f </br>", 'Food, Tax, and Tip total', $cost_of_food + $tax_amount + $tip_amount);
?>