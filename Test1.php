<?php

$numbers = array(1,2,3);

function forSum($numbers){
    
    for($i=0;$i<count($numbers);$i++){
        $sum += $numbers[$i];
    }
    return $sum;
}

echo forSum($numbers);
