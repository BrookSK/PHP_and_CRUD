<?php
//$con=mysqli_connect("localhost","root","","bd_projeto");

include "conexao.php";
$id=$_POST["id"];
$nome=$_POST["nome"];
$rg=$_POST["rg"];
$cpf=$_POST["cpf"];
$email=$_POST["email"];

$comandoSql="update tb_cliente set nome_cliente='$nome',rg_cliente='$rg',cpf_cliente='$cpf',email_cliente='$email' where id_cliente='$id'";

$resultado=mysqli_query($con,$comandoSql);

if($resultado=true){
	echo "Alterado com sucesso";
}else {
	echo "Erro na auteração";
}

echo "<br> <a href='lista_cliente.php'>Listar Cliente</a>";
?>