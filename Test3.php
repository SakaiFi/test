<?php

echo "問題3 最初の100個のフィボナッチ数のリスト</br></br>";

function Fibonacci(){
    
    for($i=0;$i<100;$i++){
        if($i<2){
            $fibonacci[$i]=$i;
        }
        else{
            $fibonacci[$i]=$fibonacci[$i-1]+$fibonacci[$i-2];
        }
    }
    
    return $fibonacci;
}

$fibonacci=Fibonacci();       

for($i=0;$i<count($fibonacci);$i++){
    echo $fibonacci[$i];
    if($i<(count($fibonacci)-1)){
        echo ",";
    }
}

