<?php
/**
 * Created by PhpStorm.
 * User: Cliff
 * Date: 2019/03/25
 * Time: 10:46 AM
 */
require __DIR__ . "/../Repository/AssessmentRepository.php";

$repo = new AssessmentRepository();

//question 1
$input = array(7,-10,13,8,4,-7.2,-12,3.5,3.5,-9.6,6.5,-1.7,-6.2,7);
$closestToZero = $repo->closestToZero($input);
?>
<h1>Assessment Q1</h1>
<ul>
    <li>
        <?php if($closestToZero->getSuccess() == 1) {echo "success : true";} else{echo "success : false";}?>
    </li>
    <li>
        <?php echo "Message : " . $closestToZero->getMessage() ?>
    </li>
    <li>
        <?php echo "Result : " . $closestToZero->getResult() ?>
    </li>
</ul>
<?php
$input = array(1,2,3,4,5);
$sumLoop = $repo->sumLoop($input);
?>
<h1>Assessment Q2</h1>
<h2>Sum Loop</h2>
<ul>
    <li>
        <?php if($sumLoop->getSuccess() == 1) {echo "success : true";} else{echo "success : false";}?>
    </li>
    <li>
        <?php echo "Message : " . $sumLoop->getMessage() ?>
    </li>
    <li>
        <?php echo "Result : " . $sumLoop->getResult() ?>
    </li>
</ul>
<?php
$whileLoop = $repo->whileLoop($input);
?>

<h2>While Loop</h2>
<ul>
    <li>
        <?php if($whileLoop->getSuccess() == 1) {echo "success : true";} else{echo "success : false";}?>
    </li>
    <li>
        <?php echo "Message : " . $whileLoop->getMessage() ?>
    </li>
    <li>
        <?php echo "Result : " . $whileLoop->getResult() ?>
    </li>
</ul>
<?php
$recursionLoop = $repo->recursionLoop(0,$input,0);
$result = $repo->setResult(true,"Sum of array returned", $recursionLoop);
?>
<h2>Recursion Loop</h2>
<ul>
    <li>
        <?php if($result->getSuccess() == 1) {echo "success : true";} else{echo "success : false";}?>
    </li>
    <li>
        <?php echo "Message : " . $result->getMessage() ?>
    </li>
    <li>
        <?php echo "Result : " . $result->getResult() ?>
    </li>
</ul>

<?php
$inputNums = array(1,2,3,4,5);
$inputChars = array('a','b','c','d','e');
$combArr = $repo->combineArrays($inputNums,$inputChars);
?>
<h1>Assessment Q3</h1>
<h2>Combine Arrays</h2>
<ul>
    <li>
        <?php if($combArr->getSuccess() == 1) {echo "success : true";} else{echo "success : false";}?>
    </li>
    <li>
        <?php echo "Message : " . $combArr->getMessage() ?>
    </li>
    <li>
        Result :
    </li>
    <?php  foreach($combArr->getResult() as $res): ?>
        <li>
            <?php echo $res ?>
        </li>
    <?php endforeach; ?>
</ul>


<?php
$length = 100;
$fibArray = $repo->fibonacciNumbers($length);
?>
<h1>Assessment Q4</h1>
<h2>Fibonacci Numbers</h2>
<ul>
    <li>
        <?php if($fibArray->getSuccess() == 1) {echo "success : true";} else{echo "success : false";}?>
    </li>
    <li>
        <?php echo "Message : " . $fibArray->getMessage() ?>
    </li>
    <li>
        Result :
    </li>
    <?php  foreach($fibArray->getResult() as $res): ?>
        <li>
            <?php echo $res ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php
$numberArray = array(1, 8, 9, 15, 16);
$n = sizeof($numberArray)/1;
$result = $repo->sumNumbers($numberArray, $n);
?>
<h1>Assessment Q5</h1>
<h2>Sum Numbers</h2>
<ul>
    <li>
        <?php if($result->getSuccess() == 1) {echo "success : true";} else{echo "success : false";}?>
    </li>
    <li>
        <?php echo "Message : " . $result->getMessage() ?>
    </li>
    <li>
        <?php echo "Result : " . $result->getResult() ?>
    </li>
</ul>


<?php
$result = $repo->returnEqualToHundred();
?>
<h1>Assessment Q6</h1>
<h2>Equal to 100</h2>
<ul>
    <li>
        <?php if($result->getSuccess() == 1) {echo "success : true";} else{echo "success : false";}?>
    </li>
    <li>
        <?php echo "Message : " . $result->getMessage() ?>
    </li>
    <li>
        Result :
    </li>
    <?php  foreach($result->getResult() as $res): ?>
        <li>
            <?php echo $res ?>
        </li>
    <?php endforeach; ?>
</ul>
