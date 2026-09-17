<?php

$students = [
    "Ali" => 85,
    "Siti" => 92,
    "John" => -10,
];

function grade(float $score) : string {
    $grade = match(true){
        $score > 100 => "Invalid Score!",
        $score >= 80 => "A",
        $score >= 70 => "B",
        $score >= 60 => "C",
        $score >=0 => "F",
        default => "Invalid Score!",
    };
    return $grade;
}

function average (array $array): ?float {
    $totalArraySum=array_sum($array);
    $totalCount=count($array);
    return $totalCount>0?$totalArraySum/$totalCount:null;
}

function formatRow(string $name, float $score, string $sep = " ! "): string{
    $grade = grade($score);
    return "$name scored $score $grade $sep\n";
}

$total=100;
function showTotal(int $total){
    echo $total;
}
showTotal($total);

echo "<pre>";
foreach($students as $name => $score){
    echo formatRow($name, $score);
}
$avg = average($students);
echo $avg === null ? "No Students" : round($avg, 2);
echo "</pre>";