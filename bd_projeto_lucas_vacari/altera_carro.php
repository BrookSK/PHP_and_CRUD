<?php
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";
$id=$_POST["id"];
$nome=$_POST["nome"];
$placa=$_POST["placa"];
$cliente=$_POST["cliente"];


$comandoSql="update tb_carro set nome_carro='$nome',placa_carro='$placa' where id_carro='$id'";

$resultado=mysqli_query($con,$comandoSql);

if($resultado=true){
	echo "Alterado com sucesso";
}else {
	echo "Erro na auteração";
}

echo "<br> <a href='lista_carro.php'>Listar Carro</a>";
?>