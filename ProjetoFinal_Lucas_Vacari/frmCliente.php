<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro Cliente</title>
	</head>

	<body>
		<?php
			include "menu.php";
		?>

		<div class="container"><h3>Cadastro Cliente</h3>
			<form action="cadastra_cliente.php" method="post">
				
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" id="nome" name="nome" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="rg">Rg</label>
					<input type="text" id="rg" name="rg" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" id="cpg" name="cpf" class="form-control">
				</div>
				
				<div class="form-group"><br>
					<label for="email">Email</label>
					<input type="email" id="email" name="email" class="form-control">
				</div>

				<div class="form-group"><br>
                    <label for="nome">Sexo</label><br>
                    <input type="radio" name="sexo" value="Masculino"> Masculino<br>
		            <input type="radio" name="sexo" value="Feminino"> Feminino<br>
                </div>
				
				<input type="submit" value="Cadastrar" class="btn btn-success">
			</form>
			
			<a href="inicio.php"></a>
		</div>
	</body>
</html>
