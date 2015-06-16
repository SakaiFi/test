<?php

echo "問題1</br></br>";

$numbers = array(1,2,3,4,5);

function forSum($numbers){
    
    for($i=0;$i<count($numbers);$i++){
        $sum += $numbers[$i];
    }
    return $sum;
}

echo "forループを使った関数　合計値 = ".forSum($numbers)."</br>";

function whileSum($numbers){
    $count=0;
   
    while($count<=count($numbers)){
       $sum+=$numbers[$count];
       $count++;
    }
    return $sum;
}

echo "whileループを使った関数　合計値 = ".whileSum($numbers)."</br>";


function recursionSum($numbers){
    
    if(count($numbers)==0){
        return 0;
    }
    else if(count($numbers)==1){
        return $numbers[0];
    }
    else{
        return $numbers[0]+recursionSum(array_slice($numbers,1));
    }
    
}

echo "再帰を使った関数　合計値 = ";
echo recursionSum($numbers);

