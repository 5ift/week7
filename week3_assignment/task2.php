<?php
//array input
$array = [2, 3, 4, 6, 7, 9, 11, 20];
//array filter to define the even number
$result = array_filter($array, fn($number) => $number % 2 == 0);
//output
print_r($result);
//loop result to value
foreach($result as $value) {
    echo($value . " ");
}
?>