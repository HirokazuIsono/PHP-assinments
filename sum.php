<?php
//a
function sum(){
    $result = 0;
    for($i = 1; $i <= 10; $i++){
        $result += $i;
        
    }
    return $result;
    
}
echo sum();
echo "\n";


//===================================================================
//1
function double($num) {
    $newNumber = $num * 2;
    return $newNumber;
}
$doubleNumber = double(3);
echo $doubleNumber;
echo "\n";


//===================================================================
//2
function f($a, $b){
    $add = $a + $b;
    return $add;
}

$AB = f(2,3);
echo $AB;
echo "\n";


//===================================================================
//3
$array = [1, 3, 5, 7, 9];
function X($arr){
    $MAE = $array[0] * $array[1] * $array[2] * $array[3] * $array[4];
    return $MAE;
}

$Allarray = x;
echo $Allarray;
echo "\n";
