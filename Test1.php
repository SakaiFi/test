<?php

echo "問題1</br></br>";

$numbers = array(1,2,3);

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

echo "whileループを使った関数　合計値 = ".whileSum($numbers);

//　再帰の問題は解けなかったです。
function recursion($numbers){
    if($count>=count($numbers)){
        
    }
    else{
        recursion($numbers);
    }
    return $sum;
}


echo "再帰を使った関数　合計値 =".recursionSum($numbers);

