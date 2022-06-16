<?php

declare(strict_tpes=1);
function soma(float $n1, float $n2){
    return $n1 + $n2;
}

function welcome(string $nome): string{
    return "Bem viindo {$nome}";
}



echo soma(5, 20);

echo "<br>";

echo welcome('Davi');

echo '<br>';

var_dump(welcome('Davi'));