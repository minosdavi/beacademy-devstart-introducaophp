<?php
    $alunos = [
        ['Chiquinho', 'chiquinho@gmail.com', '9.9988-7766'],
        ['Mariazinha', 'mariazinha@outlook.com', '9.8765-4321'],
        ['Claudinho', 'claudinho@yahoo.com', '3322-1166'],
        ['Wesley Safadão', 'vaisafadão@gmail.com', '9.8563-2741'],
        ['Roberto Claudio', 'prefeituradefortaleza@gmail.com', '9.7865-1234'],
    ];
    ?>

    <table border="1">
    <thead></thead>
        <tr>
            <td>Nome do aluno</td>
            <td>e-mail</td>
            <td>Telefone</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($alunos[0] as $chiquinho) {
                echo "<td>";
                echo $chiquinho;
                echo"</td>";}?>
        </tr>    
        <tr>   
            <?php foreach ($alunos[1] as $mariazinha) {
                echo "<td>";
                echo $mariazinha;
                echo"</td>";}?>    
        </tr>    
        <tr>
            <?php foreach ($alunos[2] as $claudinho) {
                echo "<td>";
                echo $claudinho;
                echo"</td>";}?>
        </tr>
        <tr>
            <?php foreach ($alunos[3] as $wesley) {
                echo "<td>";
                echo $wesley;
                echo"</td>";}?>
        </tr>
        <tr>
            <?php foreach ($alunos[4] as $roberto) {
                echo "<td>";
                echo $roberto;
                echo"</td>";}?>
        </tr>
    </tbody>
</table>

