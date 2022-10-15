<?php
include "menu.php";
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";



$id_cliente=$_GET["id"];

$comandoSql="select * from tb_cliente where id_cliente='$id_cliente'";

$resultado=mysqli_query($con,$comandoSql);

$dados=mysqli_fetch_assoc($resultado);

$nome=$dados["nome_cliente"];
$rg=$dados["rg_cliente"];
$cpf=$dados["cpf_cliente"];
$email=$dados["email_cliente"];




?>

<h3>Alteração de Cliente</h3>

<form action="altera_cliente.php" method="post">
<label for="id"> Id </label>
<input type="text" id="id" name="id" readonly value="<?php echo $id_cliente?>">
	<label for="nome">Nome</label>
	<input type="text" id="nome" name="nome" value="<?php echo $nome?>">
	
	<label for="rg">Rg</label>
	<input type="text" id="rg" name="rg" value="<?php echo $rg?>">
	
	<label for="cpf">CPF</label>
	<input type="text" id="cpg" name="cpf" value="<?php echo $cpf?>">
	
	<label for="email">Email</label>
	<input type="email" id="email" name="email" value="<?php echo $email?>">
	
	<input type="submit" value="Alterar">

	</form>