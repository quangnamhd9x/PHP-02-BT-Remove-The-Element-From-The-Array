<?php
$array = [1,2,3,4,5,6,7,8,9];
$del = 5;
$array2 = [];
for ($i = 0; $i < count($array); $i++){
    if ($array[$i] !== $del){
        array_push($array2, $array[$i]);
    }
}
print_r($array2);