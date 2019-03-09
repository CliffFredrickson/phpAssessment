<?php

//question 1
$input = array(7,-10,13,8,4,-7.2,-12,3.5,3.5,-9.6,6.5,-1.7,-6.2,7);
echo "Result " . closestToZero($input);


function closestToZero($arrayValues=array()){
    //from low to high
   sort($arrayValues);
   $arrayValuesCount = count($arrayValues);

   //initiate usable variables
    $posArray = array();
    $negArray = array();
    $result = 0;

   if($arrayValuesCount > 0)
   {
       //get all positive numbers
       for($i = 0; $i <= $arrayValuesCount - 1;$i++)
       {
            if($arrayValues[$i] >= 0)
            {
                array_push($posArray,$arrayValues[$i]);
            }
       }
       if(count($posArray) == 0)
       {
           //no positive number to return
           $result = 0;
       }
        //get all negative numbers
       for($i = 0; $i <= $arrayValuesCount - 1;$i++)
       {
           if($arrayValues[$i] <= 0)
           {
               array_push($negArray,$arrayValues[$i]);
           }
       }
       //if negative numbers exist, check for equally close to zero(pos and neg)
       if(count($negArray) > 0)
       {
           //sort arrays
           sort($posArray);
           sort($negArray);
           if($negArray[0] + $posArray[0] == 0)
           {
               $result = $posArray[0];
           }
           else{
               $result = $posArray[0];
           }
       }
       else{
           $result = $posArray[0];
       }

       return $result;

   }
   else
   {
       return $result;
   }

}



