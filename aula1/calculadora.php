<form action="" method= "post">
    <input name="first_number" type="number"> <br>
    <input name="second_number" type="number"><br>
    <button>Enviar</button>
</form>

<?php
    if($_POST){
        $valor1 = @$_POST['first_number'];
        $valor2 = @$_POST['second_number'];
        $soma = $valor1 + $valor2;
        $mult = $valor1 * $valor2;
        $subt = $valor1 - $valor2;
        $divis = $valor1 / $valor2;
        
        echo "A soma é: $soma " ."<br>";
        echo "A multiplicação é: $mult"."<br>";
        echo "A subtração é: $subt"."<br>";
        echo "A divisão é: $divis"."<br>";
    }

?>