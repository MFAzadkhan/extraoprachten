<?php


function printCollatz($n)
{
    $n=readline("Enter a number: ");

    while ($n != 1)
    {
        echo $n . " ";


        if ($n & 1)
            $n = 3 * $n + 1;


        else
            $n = $n / 2;
    }

    echo $n;
}


printCollatz(1);

?>