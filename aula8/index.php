<?php

$url = $_SERVER['REQUEST_URI'];

echo match($url){
    '/'=> 'PÁGINA INICIAL',
    '/login'=> 'PÁGINA DE LOGIN',
    '/cadastro'=> 'PÁGINA DE CADASTRO',
    default => '404 PAGE NOT FOUND'
};