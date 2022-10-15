<?php
namespace Src\Controller;

class Main
{
    public function inicio(array $dados) {
        echo "Pagina inicial";
        var_dump($dados);
    }
    
    public function blog(array $dados) {
        echo "Blog executado";
        var_dump($dados);
    }
}

