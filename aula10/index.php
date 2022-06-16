<?php

$notasA = [
    10,
    7,
    5.5,
    10
];

$notasB = [
    10,
    8,
    7.4,
    3
];

function mediaDeNotas(array $notas): float
{
    return array_sum($notas) / count($notas);
}

echo "<h1>NOTAS:</h1>";

echo mediaDeNotas($notasA);

echo "<br>";

echo mediaDeNotas($notasB);