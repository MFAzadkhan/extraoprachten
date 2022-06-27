<?php
$vowelCount = 0;
$constantCount = 0;
$spacecount = 0;
$specialcount=0;
$letterCount = 0;


$str = readline("Enter a string: ");



$str = strtolower($str);
for($i = 0; $i < strlen($str); $i++) {


    if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {

        $vowelCount++;
    }
    else if ($str[$i] >= 'a' && $str[$i] <= 'z') {


        $constantCount++;
    } else if ($str[$i] == ' ') {
        $spacecount++;
    }


else {
        ( $specialcount++);

    }

    $letterCount++;
}


echo "\nNumber of vowels : " , $vowelCount;
echo "\nNumber of consonants : " , $constantCount;
echo "\nNumber of spaces : " , $spacecount;
echo "\nNumber of special characters : " , $specialcount;
echo "\nNumber of letters : " , $letterCount;

