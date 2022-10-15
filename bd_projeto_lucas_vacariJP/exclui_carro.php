<?php
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";
$id_carro=$_GET["id"];

$comandoSql="delete from tb_carro where id_carro='$id_carro'";

$resultado=mysqli_query($con,$comandoSql);

if($resultaso=true){
	echo "Excluido com sucesso";
}else {
	echo "Erro na exclusão";
}

echo "<a href='lista_carro.php'>Listar Carro</a>";
?>