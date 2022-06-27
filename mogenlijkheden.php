<?php
$budget = 100;



$counts  = [ 0, 0, 0 ];

while (true)
{
    $total =
        $counts[0]      * 5         //Worst
        + $counts[1]    * 10        //Hamburger
        + $counts[2]    * 15;       //Frikandellen

    if ($total < $budget - 5)
        ++$counts[0];

    else if (!$counts[0])
    {
        if (!$counts[1])
            break;
        else
        {
            ++$counts[2];
            $counts[1] = 0;
        }
    }
    else
    {
        echo sprintf("%d worsten, %d hamburgers, %d frikandellen\n",
            $counts[0] * 6,
            $counts[1] * 20,
            $counts[2] * 25

        );

        ++$counts[1];
        $counts[0] = 0;

    }
}
?>