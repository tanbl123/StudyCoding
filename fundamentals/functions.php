<?php
function grade(float $score) : string {
    $grade = match(true){
        $score > 100 => "Invalid Score!",
        $score >= 80 => "A",
        $score >= 70 => "B",
        $score >= 60 => "C",
        $score >= 0 => "F",
        default => "Invalid Score!",
    };
    return $grade;
}

function average (array $array): ?float {
    $totalCount = count($array);
    return $totalCount > 0 ? array_sum($array)/$totalCount:null;
}

function formatRow(string $name, float $score, string $sep = " ! "): string{
    $grade = grade($score);
    return "$name scored $score $sep $grade";
}

function formatInput(string $input){
    return htmlspecialchars($input);
}
