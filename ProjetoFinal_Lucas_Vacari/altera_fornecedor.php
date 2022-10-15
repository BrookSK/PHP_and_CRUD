<?php

	include "conexao.php";
	$id=$_POST["id"];
	$nome=$_POST["nome"];
	$endereco=$_POST["endereco"];
	$email=$_POST["email"];
	$telefone=$_POST["telefone"];
    $horario=$_POST["HoraEntrega"];
    $setor=$_POST["setor"];

	$comandoSql="update tb_fornecedor set nome_fornecedor='$nome',endereco_fornecedor='$endereco',email_fornecedor='$email',telefone_fornecedor='$telefone',horario_entrega='$horario',setor_fornecedor='$setor' where id_fornecedor='$id'";

	$resultado=mysqli_query($con,$comandoSql);

	if($resultado=true){
		echo "Alterado com sucesso";
	}else {
		echo "Erro na auteração";
	}

	echo "<br> <a href='lista_fornecedor.php'>Listar Fornecedor</a>";
?>