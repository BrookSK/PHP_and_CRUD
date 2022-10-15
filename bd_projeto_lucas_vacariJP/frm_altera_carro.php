<?php
include "menu.php";
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";
$id_carro=$_GET["id"];

$comandoSql="select * from tb_carro where id_carro='$id_carro'";

$resultado=mysqli_query($con,$comandoSql);

$dados=mysqli_fetch_assoc($resultado);

$nome=$dados["nome_carro"];
$placa=$dados["placa_carro"];
$cliente=$dados["cod_cliente"];





?>

<div class="container"><h3>Alteração de Carro</h3>

<form action="altera_carro.php" method="post">
<label for="id"> Id </label>
<input type="text" id="id" name="id" readonly value="<?php echo $id_carro?>">
	<label for="nome">Nome</label>
	<input type="text" id="nome" name="nome" value="<?php echo $nome?>">
	
	<label for="rg">Placa</label>
	<input type="text" id="placa" name="placa" value="<?php echo $placa?>">
	
	<label for="cpf">Cliente</label>
	<input type="text" id="cliente" name="cliente" readonly value="<?php echo $cliente?>">
	
	
	<input type="submit" value="Alterar">
	</form>
	</div>