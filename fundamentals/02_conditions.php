<?php
echo "<pre>";

var_dump(5 == "5");
var_dump(5 === "5");
var_dump(0 == "");
var_dump("abc" == 0);
var_dump(null == false);
var_dump(null == "");
var_dump(false == "");
var_dump("10" == "1e1");
var_dump("1" == "01");
var_dump(0 == "0"); 
var_dump("" == null);
var_dump("0" == false);
var_dump([] == false);
var_dump(1.0 === 1);

echo "</pre>";

echo "<pre>";
$score = 150;
if($score > 100){
    echo "Invalid Score!";
}elseif($score >= 80){
    echo "A";
}elseif ($score >= 70){
    echo "B";
}elseif ($score >= 60){
    echo "C";
}elseif ($score >= 0){
    echo "F";
}else{
    echo "Invalid Score!";
}
echo "</pre>";

echo "<pre>";
$score = 150;
$grade = match(true){
    $score > 100 => "Invalid Score!",
    $score >= 80 => "A",
    $score >= 70 => "B",
    $score >= 60 => "C",
    $score >= 0 => "F",
    default => "Invalid Score!",
};

echo $grade;
echo "</pre>";