<?php

$carro = [
    'Corolla',
    'Civic',
    'Frontier',
    'City',
    'Celta',
    'Hilux',
    'Creta',
]

?>
<h1>Carros disponiveis:</h1>
<ul>
    <?php
        for($i=0; $i<=6; $i++){
            echo "<li>{$carro[$i]} </li>";
        }
    ?>
</ul>