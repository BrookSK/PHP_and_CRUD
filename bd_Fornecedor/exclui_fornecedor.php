<?php

	include "conexao.php";
	$id_fornecedor=$_GET["id"];

	$comandoSql="delete from tb_fornecedor where id_fornecedor='$id_fornecedor'";

	$resultado=mysqli_query($con,$comandoSql);

	if($resultaso=true){
		echo "Excluido com sucesso";
	}else {
		echo "Erro na exclusão";
	}

	echo "<a href='lista_fornecedor.php'> Listar Fornecedor </a>";
?>