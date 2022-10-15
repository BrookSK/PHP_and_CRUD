<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro Fornecedor</title>
	</head>

	<body>
		<?php
			include "menu.php";
		?>

		<div class="container"><h3>Cadastro Fornecedor</h3>
			<form action="cadastra_fornecedor.php" method="post">
				
				<div class="form-group"><br>
					<label for="nome">Nome</label>
					<input type="text" id="nome" name="nome" class="form-control">
				</div>
				
				<div class="form-group"><br>
					<label for="endereco">Endereco</label>
					<input type="text" id="endereco" name="endereco" class="form-control">
				</div>
				
				<div class="form-group"><br>
					<label for="telefone">Telefone</label>
					<input type="text" id="telefone" name="telefone" class="form-control">
				</div>
				
				<div class="form-group"><br>
					<label for="email">Email</label>
					<input type="email" id="email" name="email" class="form-control">
				</div>

                <div class="form-group"><br>
                    <label for="nome">Horario de Entrega</label><br>
                    <input type="radio" name="HoraEntrega" value="6:20">6:20<br>
		            <input type="radio" name="HoraEntrega" value="8:30">8:30<br>
		            <input type="radio" name="HoraEntrega" value="9:40">9:40<br>
		            <input type="radio" name="HoraEntrega" value="15:20">15:20<br>
                </div>

                <div class="form-group"><br>
                    <label for="nome">Setor</label><br>
                    <input type="radio" name="setor" value="Alimenticio">Alimenticio<br>
		            <input type="radio" name="setor" value="Tecnologia">Tecnologia<br>
		            <input type="radio" name="setor" value="Limpeza">Limpeza<br>
                </div>
				
				<input type="submit" value="Cadastrar" class="btn btn-success">
			</form>
			
			<a href="inicio.php"></a>
		</div>
	</body>
</html>
