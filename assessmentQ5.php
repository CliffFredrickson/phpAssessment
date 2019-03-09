<?php
$numberArray = array(1, 8, 9, 15, 16);
$n = sizeof($numberArray)/1;

echo sumNumbers($numberArray, $n);
function sumNumbers($numberArray,$n)
{
    $sum = 0;
    for ($i=$n-1; $i>=0; $i--)
        $sum =  $sum + $i*$numberArray[$i] - ($n-1-$i)*$numberArray[$i];
    return $sum;
}
