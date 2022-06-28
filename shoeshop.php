<?php
$user_amount_of_shoes = readline("Enter the amount of shoes: ");
$user_customercard= readline("do you have a customer card? (y/n)");
$shoes=100;



if ($user_customercard == "y" && $user_amount_of_shoes > 1)

{
    $shoecost= $user_amount_of_shoes * $shoes *0.9;
}
else
{
    $shoecost= $user_amount_of_shoes * $shoes;
}
echo "Your total is:\n$ " . sprintf("%.2f", $shoecost) ."for $user_amount_of_shoes shoes thank you for shopping with us!";
