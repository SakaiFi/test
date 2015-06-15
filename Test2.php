<?php

echo "問題2</br></br>";

$listA = array("a","b","c");
$listB = array(1,2,3);
$mixedList;


function mixList($listA,$listB){
    $countA=0;
    $countB=0;
    for($i=0;$i<(count($listA)+count($listB));$i++){
                 
        if($i%2==0){
            $mixedList[$i]=$listA[$countA];
            $countA++;
        }
        else{            
            $mixedList[$i]=$listB[$countB];
            $countB++;
        }
        
        
    }
    
    return $mixedList;
}

$mixedList = mixList($listA, $listB);

for($i=0;$i<count($mixedList);$i++){
    echo $mixedList[$i];
    if($i<(count($mixedList)-1)){
        echo ",";
    }
}
