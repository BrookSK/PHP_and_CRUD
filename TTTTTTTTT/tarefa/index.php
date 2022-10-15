<?php
require_once './src/Lib/vendor/autoload.php';

// Cria o roteador
$roteador = new CoffeeCode\Router\Router(URL);

// Informa o diretorio onde os controladores se encontram
$roteador->namespace("Src\Controller");

/*
 *  Rota principal
 */
$roteador->group(null);
//Rota dinamica vem primeiro
$roteador->get("/{nome}", "Main:index");
//Rota estatica
$roteador->get("/", "Main:index");

/*
 * Rota para o Blog
 */
$roteador->group("blog");
//Rota dinamica vem primeiro
$roteador->get("/{topico}/{pagina}", "Main:blog");
//Rota estatica
$roteador->get("/", "Main:blog");

/*
 * Rota para o ADM
 */
$roteador->group("resetarSenha");
//Rota dinamica vem primeiro
$roteador->get("/{login}/{senha}", "Admin:resetarSenha");
//Rota estatica
$roteador->get("/", "Admin:resetarSenha");


$roteador->dispatch();