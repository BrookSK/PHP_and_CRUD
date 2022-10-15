<?php
	include "menu.php";
?>

<div class="container">

	<?php
		include "conexao.php";

		$id_fornecedor=$_GET["id"];

		$comandoSql="select * from tb_fornecedor where id_fornecedor='$id_fornecedor'";

		$resultado=mysqli_query($con,$comandoSql);

		$dados=mysqli_fetch_assoc($resultado);

        $nome=$dados["nome_fornecedor"];
        $endereco=$dados["endereco_fornecedor"];
        $email=$dados["email_fornecedor"];
        $telefone=$dados["telefone_fornecedor"];
        $horario=$dados["horario_entrega"];
        $setor=$dados["setor_fornecedor"];
	?>

	<h3>Alteracao de Fornecedor</h3>

	<form action="altera_fornecedor.php" method="post">
		<label for="id"> Id </label>
		<input type="text" id="id" name="id" readonly class="form-control" value="<?php echo $id_fornecedor?>">

		<label for="nome">Nome</label>
		<input type="text" id="nome" name="nome" class="form-control" value="<?php echo $nome?>">
			
		<label for="endereco">Endereco</label>
		<input type="text" id="endereco" name="endereco" class="form-control" value="<?php echo $endereco?>">
			
		<label for="telefone">Telefone</label>
		<input type="text" id="telefone" name="telefone" class="form-control" value="<?php echo $telefone?>">

		<br>

		<label for="email">Email</label>
		<input type="email" id="email" name="email" class="form-control" value="<?php echo $email?>">

		<label for="HoraEntrega">Horario de Entrega</label><br>
		<input type="radio" name="HoraEntrega" value="6:20" <?php if ($horario=='6:20') echo 'checked' ?>> 6:20<br>
		<input type="radio" name="HoraEntrega" value="8:30" <?php if ($horario=='8:30') echo 'checked' ?>> 8:30<br>
		<input type="radio" name="HoraEntrega" value="9:40" <?php if ($horario=='9:40') echo 'checked' ?>> 9:40<br>
		<input type="radio" name="HoraEntrega" value="15:20" <?php if ($horario=='15:20') echo 'checked' ?>> 15:20<br>

		<label for="setor">Setor</label><br>
		<input type="radio" name="setor" value="Alimenticio" <?php if ($horario=='Alimenticio') echo 'checked' ?>> Alimenticio<br>
		<input type="radio" name="setor" value="Tecnologia" <?php if ($horario=='Tecnologia') echo 'checked' ?>> Tecnologia<br>
		<input type="radio" name="setor" value="Limpeza" <?php if ($horario=='Limpeza') echo 'checked' ?>> Limpeza<br>
			
		<br>
			
		<input type="submit" value="Alterar" class="btn btn-success">

	</form>
</div>