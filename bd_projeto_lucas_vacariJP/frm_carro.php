<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro Carro</title>
</head>

<body>

<?php
include "lista_cliente_select.php";
include "menu.php";
?>
	<div class="container"><h3>Cadastro Carro</h3>
	<form action="cadastra_carro.php" method="post">
	<label for="nome">Nome</label>
	<input type="text" id="nome" name="nome">
	
	<label for="placa">Placa</label>
	<input type="text" id="placa" name="placa">
	
	<?php
	lista_cliente();
	?>
	<br>
	<input type="submit" value="Cadastrar" class="btn btn-outline-secondary>
	</form>
	<a href="inicio.php"></a>
	</div>
</body>
</html>