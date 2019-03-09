<?php
$inputNums = array(1,2,3,4,5);
$inputChars = array('a','b','c','d','e');

echo "Result " . combineArrays($inputNums,$inputChars);

function combineArrays($inputNums=array(),$inputChars=array())
{
    $resultArray = array();
    for($i=0;$i<count($inputChars);$i++)
    {
        $resultArray[] = $inputChars[$i];
        $resultArray[] = $inputNums[$i];
    }
    var_dump($resultArray);
    return $resultArray;
}