<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tarefa3_xx</title>
</head>
<body>

<?php
	/* Faça um programa em PHP que gere 1 número aleatório entre 1 e 5. 
	 e  exiba uma imagem e nome de acordo com o nº gerado
	1-comida preferida
	2-profissão que deseja seguir
	3-filme que mais gostou
	4-lugar que deseja conhecer
	5-seu nome
	*/

	$num=rand(1,5);

	switch ($num) {
		case 1:
			echo "Comida preferida";
			echo "<br><img src='imagens/comida.jpg' width=150 height=150>";
			break;

		case 2:
			echo "Profissão que desejo seguir";
			echo "<br><img src='imagens/profissao.jpg' width=150 height=150>";
			break;

		case 3:
			echo "Filme que mais gostei";
			echo "<br><img src='imagens/filme.jpg' width=150 height=150>";
			break;

		case 4:
			echo "Lugar que deseja conhecer";
			echo "<br><img src='imagens/lugar.jpg' width=150 height=150>";
			break;

		case 5:
			echo "Meu nome";
			echo "<br><img src='imagens/nome.png' width=150 height=150>";
			break;
		
		default:
			# code...
			break;
	}
	
    

?>

</body>
</html>