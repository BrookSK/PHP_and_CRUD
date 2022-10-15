<?php

namespace Src\Controller;

/**
 * Description of Admin
 *
 * @author brooksk
 */
class Admin {
    
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
    
    public function resetarSenha(array $dados) {
        $dados["titulo"] = "Pagina de redefinição de senhas";
        $dados["url"] = URL;
        
        //Exbibe a pg construida
        echo $this->ambiente->render("resetarsenhas.html", $dados);
    }
}
