<?php
$tanksize=readline("Enter the tank size: ");
$manopressure=readline("Enter the mano pressure: ");
$useroxygenconsumption=readline("Enter the user oxygen consumption: ");
$usertankcapcity=round( $tanksize*$manopressure/$useroxygenconsumption);

{
    echo "The tank capacity is: ".$usertankcapcity."\n";
}
