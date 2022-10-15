<?php

namespace Src\Controller;

/**
 * @author ensismoebius
 */
class Main
{

    public function inicio(array $data)
    {
        $carregador = new \Twig\Loader\FilesystemLoader("Src/View");
        
        $twig = new \Twig\Environment($carregador);
        
        echo  
    }

    public function contato(array $data)
    {
        // use twig here
        echo "<h1>Contato</h1>";
        var_dump($data);
    }

    public function blog(array $data)
    {
        // use twig here
        echo "<h1>Blog</h1>";
        var_dump($data);
    }

}
