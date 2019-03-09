<?php
echo "Result " . print_r(fibonacciNumbers(100));
function fibonacciNumbers($length)
{
    $first = 0;
    $second = 1;
    $fibResult = [$first,$second];
    for($i=1; $i < $length;$i++)
    {
        $fibResult[] = $fibResult[$i]+$fibResult[$i-1];
    }
    return $fibResult;
}