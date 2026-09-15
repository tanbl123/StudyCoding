<?php
$name = "John Doe";
$age = 30;
$height = 5.9;
$learningPHP = true;

echo "<pre>";
echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
echo "Height: " . $height . "\n";
if ($learningPHP){
    echo "I am Learning PHP!";
}else{
    echo "I am not Learning PHP!";
}
echo "</pre>";

echo "<pre>";
echo "Name: $name\n";
echo "Age: $age\n";
echo "Height: $height\n";
if($learningPHP){
    echo "I am Learning PHP!";
} else {
    echo "I am not Learning PHP!";
}
echo "</pre>";

echo "<pre>";
echo 'Name: $name\n';
echo 'Age: $age\n';
echo 'Height: $height\n';
if($learningPHP){
    echo 'I am Learning PHP!';
} else {
    echo 'I am not Learning PHP!';
}
echo "</pre>";

echo "<pre>";
var_dump($name, $age, $height, $learningPHP);
echo "</pre>";

echo "<pre>";
echo "-------------";
$learningPHP = false;
echo $learningPHP;
echo "</pre>";

echo "<pre>";
echo "-------------";
$learningPHP = null;
echo $learningPHP;
echo "</pre>";

echo "<pre>";
echo "-------------";
$name = "";
echo $name . "\n";
echo "-------------";
echo "</pre>";


