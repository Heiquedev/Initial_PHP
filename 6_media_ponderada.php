<?php
/*
Crie uma função que receba um array associativo contendo nota e
peso, realize a média das notas considerando o peso. Exemplos:
Lista com 2 notas: (N1*P1) + (N2*P2) / 2 = Resultado
Lista com 3 notas: (N1*P1) + (N2*P2) + (N3*P3) / 3 = Resultado
*/

function weightedAverage($gradesWeight)
{
    $sumGrades = 0;
    $sumWeight = 0;

    foreach ($gradesWeight as $grade => $weight) {
        $sumGrades += $weight * $grade;
        $sumWeight += $weight;
    }
    ;

    $weightedAverage = number_format(($sumGrades / $sumWeight),2);

    return $weightedAverage;

}

$student1 = array(10 => 1, 8 => 2, 6 => 3);
$student2 = array(9 => 1, 8 => 2, 5 => 3);
$student3 = array(0 => 1, 7 => 2, 2 => 3);

print ("Weighted average student 1: " . weightedAverage($student1) . "<br>");
print ("Weighted average student 2: " . weightedAverage($student2) . "<br>");
print ("Weighted average student 3: " . weightedAverage($student3) . "<br>");
?>