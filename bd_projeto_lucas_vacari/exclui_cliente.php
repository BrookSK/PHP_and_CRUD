<?php
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";
$id_cliente=$_GET["id"];

$comandoSql="delete from tb_cliente where id_cliente='$id_cliente'";

$resultado=mysqli_query($con,$comandoSql);

if($resultaso=true){
	echo "Excluido com sucesso";
}else {
	echo "Erro na exclusão";
}

echo "<a href='lista_cliente.php'>Listar Cliente</a>";
?>