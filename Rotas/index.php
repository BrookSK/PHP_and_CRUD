<?php
require_once __DIR__ . '/src/Lib/vendor/autoload.php';

//Criar um roteador
$roteador = new CoffeeCode\Router\Router( URL_BASE );

//informar onde fica os controladores
$roteador -> namespace("Src\Controller");

//sem rota: aponta para o /
$roteador -> group(null);

//arquivo main.php e funcao inicio
$roteador -> get("/" , "Main:inicio");

$roteador -> group("blog");
$roteador -> get("/" , "Main:blog");

$roteador -> dispatch();