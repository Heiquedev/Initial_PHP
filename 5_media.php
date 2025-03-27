<?php

/* Crie uma função que receba 2 números e retorne um array
associativo contendo a média e também um indicador booleano de
aprovado/reprovado. Considere aprovado com média >= 6.
*/

function toCalcAverage($grade, $grade2) {
    $average = ($grade + $grade2) / 2;
    return[
        'average' => $average,
        'approved' => $average >= 7
    ];
}

$student1 = toCalcAverage(5, 9);
echo "Score: {$student1['average']} <br>";
echo "Status: ". ($student1['approved'] ? "Approved" : "Reproved") . "<br>";

print_r($student1);
?>