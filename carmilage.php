<?php
$benzinevoor = 0;
$kmstandvoor=1;
$benzinena=1;
$kmstandna=1;
while ($kmstandvoor != 0){
    $kmstandvoor = readline("\nwat is de kilometerstand?\n");
    $benzinevoor = readline("\nHoeveel liters zit er in de tank?\n");

    $kmstandna   = readline("\nwat is de nieuwe kilometerstand?\n");
    $benzinena   = readline("\nHoeveel liters zit er in de tank?\n");

    if( $benzinena>$benzinevoor){
        echo "u heeft een negatief verbruik aangegeven" ;
         $benzinevoor = readline("\nHoeveel liters zit er in de tank?\n");}


    if ($kmstandna<$kmstandvoor){
            echo "\nDe kilometerstand voor vertrek kan niet kleiner zijn dan de kilometerstand na aankomst \n";
        $kmstandna   = readline("\nwat is de nieuwe kilometerstand?\n");
    }

    $verbruik = ($kmstandna - $kmstandvoor) / ( ceil( $benzinevoor-$benzinena));
    echo "Het verbruik is: 1 op ";
    echo round ($verbruik,2)."\n";
    break;
}
