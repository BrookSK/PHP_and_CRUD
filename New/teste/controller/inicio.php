<?php 
//todo controlador é uma classe
namespace controller;

require_once '../lib/autoload.php';

class Inicio {
 
    function __construct() {
        echo "Construiu!";
        //responsável por carrregar os arquiuvos de template
        $carregador = new \Twig\loader\FilesystemLoader("../view");

        //Combina o template com os dados recebidos
        //e os exibe
        $twig = new \twig\Environment ( $carregador);
        
        $dados = array();
        $dados["mensagem"] = "Informe seu login e senha";

        echo $twig->render ("inicio.html", $dados);

    }

}

new Inicio();