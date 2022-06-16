<?php 

$nome = 'davi';
$sobrenome = 'LIMA';

$nome2 = 'alessandro feitoza';

echo "Nome: " . ucfirst($nome) . PHP_EOL;

echo "Sobrenome: " . ucfirst(strtolower($sobrenome)) . PHP_EOL;

echo "Nome2: " . ucwords($nome2);