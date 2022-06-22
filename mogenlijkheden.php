<?php
$usercash = 100;

$outcomes = array("25 steaks" => 15, "20 hamburger" => 10, "6 sausages" => 5, );

while ($usercash > 0) {
    $outcome = $outcomes [array_rand($outcomes)];
    $usercash -= $outcome;
    echo "you have $outcome  and have $usercash euro left.<br>";

}