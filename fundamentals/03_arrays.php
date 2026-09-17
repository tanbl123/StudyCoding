<?php
$scores = [85, 92, 58, 70, 100];

echo "<pre>";
foreach($scores as $i => $score){
    echo "Score $i: $score\n";
}
echo "</pre>";

$students = [
    "Ali" => 85,
    "Siti" => 92,
    "John" => 58,
];

echo "<pre>";
foreach($students as $name => $score){
    $grade = match(true){
        $score > 100 => "Invalid Score!",
        $score >= 80 => "A",
        $score >= 70 => "B",
        $score >= 60 => "C",
        $score >= 0 => "F",
        default => "Invalid Score!",
    };
    echo "$name scored $score  $grade\n";
}
echo "</pre>";

echo "<pre>";
echo "Number of students: " . count($students) . "\n";
echo "Total score: " . array_sum($students) . "\n";
echo "Max score: " . max($students) . "\n";
echo "Min score: " . min($students) . "\n";
function average($arrays){
    return array_sum($arrays)>0 ? array_sum($arrays) / count($arrays) : 0;
}
echo "Average score: " . round(average($students),2) . "\n";
echo "</pre>";