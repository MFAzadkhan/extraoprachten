<?php
$userinput = 0;
$userinput=readline("Enter a distance: ");
$unit=readline("Enter a unit: ");
$convert= readline("Enter a conversion: ");


 $convert=array(
     	'hm'=>0.1,
        'km'=>1,
     	'm'=>1000,
     	'cm'=>100000,
     	'mm'=>1000000,
     	'um'=>1000000000,
 );
 $unit=strtolower($unit);
    $result = $userinput * $convert[$unit];
    echo $result;
?>



