<?php
$nome[0] = "Minos";
$idade[0] = 23;
$profissao[0] = "Programador";


$nome[1] = "Davi";
$idade[1] = 24;
$profissao[1] = "Pediatra";

$nome[2] = "Oswaldo";
$idade[2] = 60;
$profissao[2] = "Padeiro";

$nome[3] = "Regis";
$idade[3] = 35;
$profissao[3] = "Professor";
?>
<table border="1">
    <tr>
        <td>Nome</td>
        <td>Idade</td>
        <td>Profissão</td>


<?php
$i = 0;
while($i<=3){?>
    <tr>
        <td><?php echo $nome[$i]?></td>
        <td><?php echo $idade[$i]?></td>
        <td><?php echo $profissao[$i]?></td>
    </tr>
    <?php $i+=1; ?>


<?php } ?>
</table>


