<?php
// header('location: controller/Inicio.php'); //Manda pro início.php
require_once 'lib/BancoDeDados.php';
require_once 'model/Pessoa.php';

$bd = new BancoDeDados();
$bd -> abrirConexao();
$bd -> executarSQL("select * from Pessoa");
$res = $bd -> lerResultados(\model\Pessoa::class);

print_r($res);

echo "<ul>";
foreach ($res as $o){
    echo "<li>";
    echo $o->getNome() . " " . $o->getSobrenome();
    echo "</li>";
}
echo "</ul>";