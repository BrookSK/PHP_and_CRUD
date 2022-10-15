<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tarefa4_xx</title>
</head>
<body>

<?php
	/*Um restaurante bonifica seus clientes com uma sobremesa, para isto solicita que o cliente 
	utilize o sistema para sortear um número de 1 até 40. Faça um programa em PHP que gere um número 
	aleatório de 1 até 40 referente ao número sorteado e exiba as informações referentes a sobremesa:
	Imagem da sobremesa
	nome da sobremesa
	número gerado 

	Número sorteado	    Sobremesa
	1 a 6	            Torta de Limao
	7 a 25	            Sorvete de Morango
	26 a 30	            Pudim de Leite Condensado
	31 a 40	            Pavê de Bis */
  
	$num=rand(1,40);

	if($num>=1 && $num<=6){
		echo "O número gerado foi: $num";
		echo "<br>Torta de Limao";
		echo "<br><img src='imagens/tortaL.jpg' width=150 height=150>";
	}else if($num>=7 && $num<=25){
		echo "O número gerado foi: $num";
		echo "<br>Sorvete de Morango";
		echo "<br><img src='imagens/sorvete.jpg' width=150 height=150>";
	}else if($num>=26 && $num<=30){
		echo "O número gerado foi: $num";
		echo "<br>Pudim de Leite Condensado";
		echo "<br><img src='imagens/pudim.jpg' width=150 height=150>";
	}else if($num>=31 && $num<=40){
		echo "O número gerado foi: $num";
		echo "<br>Pavê de Bis";
		echo "<br><img src='imagens/pave.jpg' width=150 height=150>";
	}

?>


</body>
</html>