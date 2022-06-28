<?php
date_default_timezone_set("Europe/Amsterdam");
echo "The time is " . date("h:i:sa");
function printWords ($h, $m)
{
    $nums = array ("zero", "one", "two", "three", "four",
        "five", "six", "seven", "eight", "nine",
        "ten", "eleven", "twelve", "thirteen",
        "fourteen", "fifteen", "sixteen", "seventeen",
        "eighteen", "nineteen", "twenty", "twenty one",
        "twenty two", "twenty three", "twenty four",
        "twenty five", "twenty six", "twenty seven",
        "twenty eight", "twenty nine");
    if ($m ==0)
        echo $nums [$h],
        "o' clock\n" ;

    else if ($m == 1)
        echo "one minute past ",
        $nums[$h], "\n";

    else if ($m == 59)
        echo "one minute to ",
        $nums[($h % 12) + 1], "\n";

    else if ($m == 15)
        echo "quarter past ",
        $nums[$h], "\n";

    else if ($m == 30)
        echo "half past ",
        $nums[$h],"\n";

    else if ($m == 45)
        echo "quarter to ",
        ($nums[($h % 12) + 1]), "\n";

    else if ($m <= 30)
        echo $nums[$m],
        " minutes past ",
        $nums[$h],"\n";

    else if ($m > 30)
        echo $nums[60 - $m],
        " minutes to ",
        $nums[($h % 12) + 1], "\n";
}

// Driver Code
$h = 6;
$m = 24;

printWords($h, $m);


