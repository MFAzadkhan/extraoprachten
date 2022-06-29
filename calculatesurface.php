<?php
//ask user for what they want to calculate//
$circle = readline("do you want to calculate diameter, pi, circumference or radius? enter vs for volume and surface  (d/p/c/vs)");


//if user wants to calculate diameter//
if ($circle == "d") {
    $radius = readline("enter the radius");
    $diameter = $radius * 2;
    echo "the diameter is " . $diameter;


//if user wants to calculate the surface area//
} elseif ($circle == "p") {
    $radius = readline("enter the radius");
    $pi = 3.14;
    $area = $pi * ($radius * $radius);

    //if user wants to calculate the circumference//
    echo "the area is " . $area;
} elseif ($circle == "c") {
    $radius = readline("enter the radius");
    $pi = 3.14;
    $circumference = $pi * ($radius * 2);

    //if user wants to calculate the volume//
    echo "the circumference is " . $circumference;

    //if user wants to calculate the volume //
} elseif ($circle == "vo") {
    $radius = readline("enter the radius");
    $pi = 3.14;
    $volume = $pi * ($radius * $radius * $radius);
    echo "the volume is " . $volume;


    //if user enters invalid input//
}
//when user wants to calculate the volume or surface area//

//ask user the length//
 if ($circle=="vs"){$length= readline("enter the length of the object:");}
//ask user the width//
if($circle == "vs") {$width= readline("enter the width of the object:");}
//ask user whether they want to calculate the volume or surface area//
if ($circle== "vs"){$surforvol=readline("do you want to calculate the surface or volume? (s/v)");}

//volume calculation start//
//if user wants to know the volume of the object//
if ($circle=="vs" &&$surforvol == "v"){
    $height= readline("enter the hight of the object:");
    //ask the height of the object//


    //ask the user in which unit they want to calculate the volume//
    $metricorimetric=readline("do you want to calculate the metric or imperial? (m/i)");


    //if user enters metric //
    if ($metricorimetric == "metric"){
        $metricunit=readline("do you want to calculate the metric unit of the object? (mm/cm/m)");
       //if user enters millimeter//
        if ($metricunit == "mm"){
            $volume=$length*$width*$height;
            echo "the volume of the object is: ".$volume." mm^3";
        }
        //if user enters centimeter//
        else if ($metricunit == "cm"){
            $volume=$length*$width*$height;
            echo "the volume of the object is: ".$volume." cm^3";
        }
        //if user enters meter//
        else if ($metricunit == "m"){
            $volume=$length*$width*$height;
            echo "the volume of the object is: ".$volume." m^3";
        }
    }


    //if user enters imperial//
    if($metricorimetric=="imperial"){
        $imperialunit=readline("do you want to calculate the imperial unit of the object? (in/ft/m)");
        //if user enters inch//
        if ($imperialunit == "in"){
            $volume=$length*$width*$height;
            echo "the volume of the object is: ".$volume." in^3";
        }
       //if user enters foot//
        else if ($imperialunit == "ft"){
            $volume=$length*$width*$height;
            echo "the volume of the object is: ".$volume." ft^3";
        }

        //if user enters mile//
        else if ($imperialunit == "m"){
            $volume=$length*$width*$height;
            echo "the volume of the object is: ".$volume." m^3";
        }
    }

}
//volume calculation ends//


//surface area calculation starts//
// if user enters s (surface)//
else if ($circle == "vs" &&$surforvol == "s"){
    $metricorimetric=readline("do you want to calculate the metric or imperial? (metric/imperial)");
    //ask the user in which unit they want to calculate the surface area//


    //if user enters metric//
    if ($metricorimetric == "metric"){
        $metricunit=readline("do you want to calculate the metric unit of the object? (mm/cm/m)");
        //if user enters millimeter//
        if ($metricunit == "mm"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." mm^2";
        }
       //if user enters centimeter//
        else if ($metricunit == "cm"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." cm^2";
        }
        //if user enters meter//
        else if ($metricunit == "m"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." m^2";
        }
    }




    //if user enters imperial//
    if ($metricorimetric =="imperial"){
        $imperialunit=readline("do you want to calculate the imperial unit of the object? (in/ft/m)");
       //if user enters inch//
        if ($imperialunit == "in"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." in^2";
        }
        //if user enters foot//
        else if ($imperialunit == "ft"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." ft^2";
        }
        //if user enters mile//
        else if ($imperialunit == "m"){
            $surface=$length*$width;
            echo "the surface of the object is: ".$surface." m^2";
        }
    }
}



//if user input is incorrect//
else{
    echo "invalid input";
}