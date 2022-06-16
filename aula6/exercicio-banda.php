<?php
    $banda = [
        ['Avenged Sevenfold', 50, true],
        ['LiSa', 3, true],
        ['Claudinho e buchecha', 5, false],
        ['Wesley Safadão', 40, true],
        ['Banda Reprise', 8, false],
    ];
    ?>

    <table border="1">
    <tr>
        <td>Banda</td>
        <td>Quantidade de musicas que conheço</td>
        <td>Ainda em atividade</td>


<?php
$i = 0;
while($i<=4){?>
    <tr>
        <td><?php echo $banda[$i][0]?></td>
        <td><?php echo $banda[$i][1]?></td>
        <td><?php if ($banda[$i][2] == true){
                    echo "Banda ainda em atividade";
                }else{
                    echo "Banda aposentada";
                }
                
                
                ?></td>
    </tr>
    <?php $i+=1; ?>


<?php } ?>
</table>

