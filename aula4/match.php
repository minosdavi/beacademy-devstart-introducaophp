<form action="" method= "post">
    <h1>Insira um mês (em número):</h1>
    <input name="mes" type="number"> <br>
    <button>Enviar</button>
</form>

<?php
$mes = @$_POST['mes'];
echo $mes;

echo match($mes){
    '1' => 'Janeiro',
    '2' => 'Feveireiro',
    '3' => 'Março',
    '4' => 'Abril',
    '5' => 'Maio',
    '6' => 'Junho',
    '7' => 'Julho',
    '8' => 'Agosto',
    '9' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novembro',
    '12' => 'Dezembro',
    default => 'Mes invalido'

};