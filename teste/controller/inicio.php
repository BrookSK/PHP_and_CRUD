<?php 
//todo controlador é uma classe
namespace controller;

require_once '../lib/autoload.php';

class Inicio {
 
    function __construct() {
        //responsável por carrregar os arquiuvos de template
        $carregador = new \Twig\loader\FilesystemLoader("../view");

        //Combina o template com os dados recebidos
        //e os exibe
        $twig = new \Twig\Environment ( $carregador);
                       
        $dados = array();
        $dados["mensagem"] = "Informe seu login e senha";
        $dados["valoresFornecidos"] = $this->geraLista();        

        echo $twig->render ("inicio.html", $dados);

    }
    
    public function geraLista(): array{
        $batata = array();
        $batata[0] = "Teste";
        $batata[1] = "Produção";    
        
        return $batata;
    }

}

new Inicio();