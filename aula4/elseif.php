<form action="" method= "post">
    <h1>Insira um número:</h1>
    <input name="numero" type="number"> <br>
    <button>Enviar</button>
</form>


<?php
$n = @$_POST['numero'];

if($n>0){
    echo "numero positivo";
} elseif($n<0){
    echo "numero negativo";
} else{
    echo "numero nulo";
}