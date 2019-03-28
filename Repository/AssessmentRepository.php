<?php
/**
 * Created by PhpStorm.
 * User: Cliff
 * Date: 2019/03/25
 * Time: 10:43 AM
 */
require __DIR__ . "/../Entity/Assessment.php";

class AssessmentRepository
{
    protected $returnResult;

    function setResult($success, $message,$data)
    {
        $result = new Assessment();
        $result->setSuccess($success);
        $result->setMessage($message);
        $result->setResult($data);

        return $result;
    }
    function closestToZero($arrayValues = array())
    {
        try {
            //from low to high
            sort($arrayValues);
            $arrayValuesCount = count($arrayValues);

            //initiate usable variables
            $posArray = array();
            $negArray = array();
            $strMessage = null;
            $data = null;
            $success = false;

            if ($arrayValuesCount > 0) {
                //get all positive numbers
                for ($i = 0; $i <= $arrayValuesCount - 1; $i++) {
                    if ($arrayValues[$i] >= 0) {
                        array_push($posArray, $arrayValues[$i]);
                    }
                }
                if (count($posArray) == 0) {
                    //no positive number to return
                    $result = 0;
                }
                //get all negative numbers
                for ($i = 0; $i <= $arrayValuesCount - 1; $i++) {
                    if ($arrayValues[$i] <= 0) {
                        array_push($negArray, $arrayValues[$i]);
                    }
                }
                //if negative numbers exist, check for equally close to zero(pos and neg)
                if (count($negArray) > 0) {
                    //sort arrays
                    sort($posArray);
                    sort($negArray);
                    if ($negArray[0] + $posArray[0] == 0) {
                        $success = true;
                        $strMessage = "There were equals bot - and +, result displayed is the positive number closest to zero";
                        $data = $posArray[0];
                    } else {
                        $success = true;
                        $strMessage = "Result displayed is closest to zero";
                        $data = $posArray[0];
                    }
                } else {
                    $success = false;
                    $strMessage = "No Results could be displayed";
                }

                $returnResult = $this->setResult($success, $strMessage, $data);

            } else {
                $returnResult = $this->setResult($success, "no data returned", $data);
            }
        }
        catch(Exception $e)
        {
            $returnResult = $this->setResult(false, $e->getMessage(), null);
        }

        return $returnResult;

    }


    function sumLoop($arrayValues = array())
    {
        try {
            $arrayValuesCount = count($arrayValues);
            $result = 0;

            if ($arrayValuesCount > 0) {
                for ($i = 0; $i <= $arrayValuesCount - 1; $i++) {
                    $result += $arrayValues[$i];
                }
            }
            $returnResult =  $this->setResult(true, "Sum of array returned", $result);
        }
        catch(Exception $e)
        {
            $returnResult = $this->setResult(false, $e->getMessage(), null);
        }
        return $returnResult;
    }

    function whileLoop($arrayValues = array())
    {
        try {
            $arrayValuesCount = count($arrayValues);
            $result = 0;
            $arrayItem = 0;
            while ($arrayItem < $arrayValuesCount) {
                $result += $arrayValues[$arrayItem];
                $arrayItem++;
            }
            $returnResult =  $this->setResult(true, "Sum of array returned", $result);
        }
        catch(Exception $e)
        {
            $returnResult = $this->setResult(false, $e->getMessage(), null);
        }
        return $returnResult;
    }

    function recursionLoop($i, $arrayValues = array(), $resultValue)
    {
        try {
            $arrayValuesCount = count($arrayValues) - 1;

            while ($i <= $arrayValuesCount) {
                $resultValue += $arrayValues[$i];
                $i++;
                $this->recursionLoop($i, $arrayValues, $resultValue);
            }

            return $resultValue;
        }
        catch(Exception $e)
        {
            $resultValue = $e->getMessage();
        }
        return $resultValue;
    }

    function combineArrays($inputNums = array(), $inputChars = array())
    {
        try {
            $resultArray = array();
            for ($i = 0; $i < count($inputChars); $i++) {
                $resultArray[] = $inputChars[$i];
                $resultArray[] = (string)$inputNums[$i];
            }
            $returnResult =  $this->setResult(true, "Combined array returned", $resultArray);

        }
        catch(Exception $e)
        {
            $returnResult = $this->setResult(false, $e->getMessage(), null);
        }
        return $returnResult;
    }

    function fibonacciNumbers($length)
    {
        try {
            $first = 0;
            $second = 1;
            $fibResult = [$first, $second];
            for ($i = 1; $i < $length; $i++) {
                $fibResult[] = (string)($fibResult[$i] + $fibResult[$i - 1]);
            }
            $returnResult =  $this->setResult(true, "Fibonacci numbers returned", $fibResult);
        }
        catch(Exception $e)
        {
            $returnResult = $this->setResult(false, $e->getMessage(), null);
        }
        return $returnResult;
    }

    function sumNumbers($numberArray, $n)
    {
        try {
            $sum = 0;
            for ($i = $n - 1; $i >= 0; $i--)
                $sum = $sum + $i * $numberArray[$i] - ($n - 1 - $i) * $numberArray[$i];
            $returnResult =  $this->setResult(true, "Sum of array returned", $sum);
        }
        catch(Exception $e)
        {
            $returnResult = $this->setResult(false, $e->getMessage(), null);
        }
        return $returnResult;
    }

    function returnEqualToHundred()
    {
        try {
            $numArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

            $mem = array("1");
            $combos = array();
            $res = array();


            for ($i = 2; $i <= count($numArray); $i++) {
                //gets all possible combos
                foreach ($mem as $str) {
                    array_push($combos, $str . $i, $str . "+" . $i, $str . "-" . $i);
                }
                $mem = $combos;

                $result = array();
                foreach ($combos as $s) {
                    array_push($result, $s);
                }
                $ii = 0;
                //only return that equal 100 and that contain all numbers (1-9)
                foreach ($result as $num) {
                    $final = eval('return ' . $num . ';');
                    if ($final == 100) {
                        $operands = array("+", "-");
                        $formatNum = str_replace($operands, "", $num);

                        if (strlen($formatNum) == 9) {
                            $res[$ii] = (string)$num;
                            $ii++;
                        }
                    }
                }
            }
            $returnResult =  $this->setResult(true, "All possibilities that equal 100 returned", $res);
        }
        catch (Exception $e)
        {
            $returnResult = $this->setResult(false, $e->getMessage(), null);
        }
        return $returnResult;
    }

}