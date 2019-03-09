<?php

$target = 100;
$numArray = array(1,2,3,4,5,6,7,8,9);

$mem = array("1");
$combos = array();

for($i = 2; $i <= count($numArray); $i++)
{
    //gets all possible combos
    foreach($mem as $str)
    {
        array_push($combos,$str . $i,$str . "+" . $i, $str . "-" . $i);
    }
    $mem = $combos;

    $result = array();
    foreach($combos as $s) {
      array_push($result,$s);
    }
    //only return that equal 100 and that contain all numbers (1-9)
    foreach($result as $num)
    {
        $final = eval('return ' .$num. ';');
        if($final == 100) {
            $isValid = true;
            $operands = array("+","-");
            $formatNum = str_replace($operands,"",$num);

            if(strlen($formatNum) == 9)
            {
                echo $num ;
                echo "\r\n";
            }
        }
    }

}


