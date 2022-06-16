<?php

declare(strict_types=1);

function mostrarNomes(array $nomes){
    foreach($nomes as $cadaNome){
        echo "Nome é {$cadaNome} <br>";
    }
}

echo mostrarNomes(['Davi', 'Alessando', 'Lis', 'Maria']);
