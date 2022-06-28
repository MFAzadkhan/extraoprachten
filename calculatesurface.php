<?php
$length= readline("enter the length of the object:");
$width= readline("enter the width of the object:");
$surforvol=readline("do you want to calculate the surface or volume? (s/v)");
if ($surforvol)
{
    $surface= $length * $width;
    echo "the surface of the object is: $surface";
}
else
{
    $volume= $length * $width ;
    echo "the volume of the object is: $volume";
}
