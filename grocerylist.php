<?php
$usergrocerylist = readline("the amount of items in your grocery list: ");
$groceryitem = readline("Enter your grocery items: ");


if ($usergrocerylist > 0){
    echo "You have $usergrocerylist items in your grocery list. they are:$groceryitem ";
} else {
    echo "You have no items in your grocery list.";
}
