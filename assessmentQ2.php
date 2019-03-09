<?php

$input = array(1,2,3,4,5);
echo "Result " . sumLoop($input);
echo "Result " . whileLoop($input);

echo "Result " . recursionLoop(0,$input,0);


function sumLoop($arrayValues=array())
{
    $arrayValuesCount = count($arrayValues);
    $result = 0;

    if($arrayValuesCount > 0)
    {
        for($i = 0; $i <= $arrayValuesCount - 1;$i++)
        {
           $result += $arrayValues[$i];
        }
    }
    return $result;

}

function whileLoop($arrayValues=array())
{
    $arrayValuesCount = count($arrayValues)  ;
    $result = 0;
    $arrayItem = 0;
    while($arrayItem < $arrayValuesCount)
    {
        $result += $arrayValues[$arrayItem];
        $arrayItem ++;
    }
    return $result;
}

function recursionLoop($i,$arrayValues=array(),$resultValue)
{
    $arrayValuesCount = count($arrayValues) -1 ;

    while($i <= $arrayValuesCount)
    {
        $resultValue += $arrayValues[$i];
        $i++;
        recursionLoop($i,$arrayValues, $resultValue);
    }

        return $resultValue;



}