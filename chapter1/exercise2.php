<?php
/**Write a PHP program that computes the total cost of this restaurant meal:
 * Two hamburgers at $4.95 each, one chocolate milkshake at $1.95, and one cola at 85 cents.
 * The sales tax rate is 7.5%, and you left a pre-tax tip of 16%.
 */
$hamburger_price = 4.95;
$milkshake_price = 1.95;
$cola_price = .85;
$tax_rate = .075;
$tip_rate = .16;

$cost_of_food = $hamburger_price * 2 + $milkshake_price + $cola_price;
$tip_amount = $cost_of_food * $tip_rate;
$tax_amount = $cost_of_food * $tax_rate;

$total_cost = $cost_of_food * ($tip_amount + $tax_amount);

print 'The total cost of the meal is $' . $total_cost;

?>