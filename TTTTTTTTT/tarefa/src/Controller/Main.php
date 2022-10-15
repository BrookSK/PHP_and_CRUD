<?php

namespace Src\Controller;

/*
 * Description of Main
 * 
 * @author brooksk
 */

class Main {
    
    private \Twig\Environment $ambiente;
    private \Twig\Loader\FilesystemLoader $carregador;

    public function __construct() {
        //Logica da pg
        //Integração com o Twig
        //e outros
        //Abre o diretório onde se encontram os templates
        $this->carregador = new \Twig\Loader\FilesystemLoader("./Src/View");

        // Combina os dados com o template
        $this->ambiente = new \Twig\Environment($this->carregador);
    }
    
    public function index(array $dados) {
        $dados["titulo"] = "Pagina inicial";
        
        //Exbibe a pg construida
        echo $this->ambiente->render("Main:index.html", $dados);
    }
    
    public function blog(array $dados) {        
        $dados["titulo"] = "Pagina inicial do Blog";
        
        //Exbibe a pg construida
        echo $this->ambiente->render("Main:blog.html", $dados);
    }
}
