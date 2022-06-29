<?php
$length= readline("enter the length of the object:");
$width= readline("enter the width of the object:");
$surforvol=readline("do you want to calculate the surface or volume? (s/v)");

if ($surforvol == "v"){
    $hight= readline("enter the hight of the object:");
    $metricorimetric=readline("do you want to calculate the metric or imperial? (m/i)");
    if ($metricorimetric == "metric"){
        $metricunit=readline("do you want to calculate the metric unit of the object? (mm/cm/m)");
        if ($metricunit == "mm"){
            $volume=$length*$width*$hight;
            echo "the volume of the object is: ".$volume." mm^3";
        }
        else if ($metricunit == "cm"){
            $volume=$length*$width*$hight;
            echo "the volume of the object is: ".$volume." cm^3";
        }
        else if ($metricunit == "m"){
            $volume=$length*$width*$hight;
            echo "the volume of the object is: ".$volume." m^3";
        }
    }
    else{
        $imperialunit=readline("do you want to calculate the imperial unit of the object? (in/ft/m)");
        if ($imperialunit == "in"){
            $volume=$length*$width*$hight;
            echo "the volume of the object is: ".$volume." in^3";
        }
        else if ($imperialunit == "ft"){
            $volume=$length*$width*$hight;
            echo "the volume of the object is: ".$volume." ft^3";
        }
        else if ($imperialunit == "m"){
            $volume=$length*$width*$hight;
            echo "the volume of the object is: ".$volume." m^3";
        }
    }

}
else if ($surforvol == "s"){
    $metricorimetric=readline("do you want to calculate the metric or imperial? (metric/imperial)");
    if ($metricorimetric == "metric"){
        $metricunit=readline("do you want to calculate the metric unit of the object? (mm/cm/m)");
        if ($metricunit == "mm"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." mm^2";
        }
        else if ($metricunit == "cm"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." cm^2";
        }
        else if ($metricunit == "m"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." m^2";
        }
    }
    else{
        $imperialunit=readline("do you want to calculate the imperial unit of the object? (in/ft/m)");
        if ($imperialunit == "in"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." in^2";
        }
        else if ($imperialunit == "ft"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." ft^2";
        }
        else if ($imperialunit == "m"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." m^2";
        }
    }
}
else{
    echo "you have to enter s or v";

}