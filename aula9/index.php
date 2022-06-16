<?php

$url = $_SERVER['REQUEST_URI'];
include'telas/head.php';
include'acoes.php';
match($url){
    '/'=> inicio(),
    '/login'=> login(),
    '/cadastro'=> cadastro(),
    default => erro404(),
};

include'telas/footer.php';