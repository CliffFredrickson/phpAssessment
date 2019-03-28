<?php
/**
 * Created by PhpStorm.
 * User: Cliff
 * Date: 2019/03/25
 * Time: 10:48 AM
 */
require __DIR__ . "/../../Entity/Assessment.php";

class AssessmentTest extends PHPUnit_Framework_TestCase
{
    public function testClosestToZero_ReturnsIntegerResult()
    {
        $input = array(7,-10,13,8,4,-7.2,-12,-3.5,3.5,-9.6,6.5,-1.7,-6.2,7);
        $expected = 3.5;
        $assessment = new AssessmentRepository($input);
        $result = $assessment->closestToZero();
        $this->assertTrue($result->getSuccess());
        $this->assertEquals($expected, $result->getResult());
    }
    public function testSumLoop_ReturnsIntegerResult()
    {
        $input = array(1,2,3,4,5);
        $expected = 15;
        $assessment = new AssessmentRepository($input);
        $result = $assessment->sumLoop($input);
        $this->assertTrue($result->getSuccess());
        $this->assertEquals($expected, $result->getResult());
    }
    public function testWhileLoop_ReturnsIntegerResult()
    {
        $input = array(1,2,3,4,5);
        $expected = 15;
        $assessment = new AssessmentRepository($input);
        $result = $assessment->whileLoop($input);
        $this->assertTrue($result->getSuccess());
        $this->assertEquals($expected, $result->getResult());
    }
    public function testRecursion_ReturnsIntegerResult()
    {
        $input = array(1,2,3,4,5);
        $expected = 15;
        $assessment = new AssessmentRepository();
        $result = $assessment->recursionLoop($input);
        $this->assertTrue($result->getSuccess());
        $this->assertEquals($expected, $result->getResult());
    }
    public function testCombineArrays_ReturnsArrayResult()
    {
        $inputNums = array(1,2,3,4,5);
        $inputChars = array('a','b','c','d','e');
        $assessment = new AssessmentRepository();
        $result = $assessment->combineArrays($inputNums,$inputChars);
        $this->assertTrue(is_array($result->getResult()));
        $this->assertCount(10, $result->getResult(),'Incorrect Combination');
        //$this->assertTrue((count($result->getResult()) > 0));
    }
    public function testFibonacci_ReturnsArrayResult()
    {
        $length = 100;
        $assessment = new AssessmentRepository();
        $result = $assessment->fibonacciNumbers($length);
        $this->assertTrue(is_array($result->getResult()));
        $this->assertCount(101, $result->getResult(),'Incorrect Results Returned');
        //$this->assertTrue((count($result->getResult()) > 0));
    }
    public function testSumNumbers_ReturnsIntegerResult()
    {
        $input = array(1, 8, 9, 15, 16);
        $expected = 74;
        $assessment = new AssessmentRepository();
        $result = $assessment->sumNumbers($input);
        $this->assertTrue($result->getSuccess());
        $this->assertEquals($expected, $result->getResult());
    }
    public function testEqualToHundred_ReturnsArrayResult()
    {
        $assessment = new AssessmentRepository();
        $result = $assessment->returnEqualToHundred();
        $this->assertTrue(is_array($result->getResult()));
        $this->assertCount(11, $result->getResult(),'Incorrect Results Returned');
        //$this->assertTrue((count($result->getResult()) > 0));
    }
}