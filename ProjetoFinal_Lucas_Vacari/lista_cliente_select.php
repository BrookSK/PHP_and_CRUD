<?php

	function lista_cliente(){
		echo "<h3>Listagem Cliente</h3>";
		include "conexao.php";
		$comandoSql="select * from tb_cliente";
		$resultado=mysqli_query($con,$comandoSql);
?>

		<label for="cliente">Cliente</label>
		<select name="cliente" id="cliente">

<?php

		while($dados=mysqli_fetch_assoc($resultado)){
			$id=$dados["id_cliente"];
			$nome=$dados["nome_cliente"];

			echo"<option value=$id>$nome</option>";
		}
		echo "</select>";
	}

	function lista_cliente_id($cod){
		echo "<h3>Listagem Cliente</h3>";
		include "conexao.php";
		$comandoSql="select * from tb_cliente";
		$resultado=mysqli_query($con,$comandoSql);
?>

		<label for="cliente">Cliente</label>
		<select name="cliente" id="cliente">

<?php
		while($dados=mysqli_fetch_assoc($resultado)){
			$id=$dados["id_cliente"];
			$nome=$dados["nome_cliente"];

			if($cod==$id){
				echo"<option value=$id selected=selected>$nome</option>";
			}else{
				echo"<option value=$id>$nome</option>";
			}
		}

		echo "</select>";
	}
?>