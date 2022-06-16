<form action="" method="post">
    <input type="text" name="nome" placeholder="digite aqui">
    <button>enviar</button>
</form>

<?php

if($_POST){
    echo $_POST['nome'];
}