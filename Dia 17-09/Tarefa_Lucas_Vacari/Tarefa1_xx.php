<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tarefa1_xx</title>
</head>


<body>
<?php
/*Faça um programa que atribua 
   2 valores randômicos para 2 variaveis 
   com intervalo de 0 até 10 equivalentes a notas
   2 valores para outras 2 variaveis 
   com intervalo  de 1 até 4 equivalente a pesos
   Calcule a média ponderada
     
   Exiba as notas, os pesos, a media ponderada (com uma casa decimal)
   dentro de uma tabela 
   
   Se a media ponderada for a partir de 6,0 exiba uma imagem
   de aprovado, caso contrario 
   uma imagem de reprovado 
   */
   
  $notaUm=rand(0,10);
  $notaDois=rand(0,10);

  $pesoUm=rand(2,4);
  $pesoDois=rand(2,4);

  $med=$notaUm+$notaDois/$pesoUm+$pesoDois;

  echo"<table width='372' border='1'>
			<tbody>
				<tr>
					<td colspan='2'>Cálculo da Média Ponderada</td>
				</tr>
				<tr>
					<td width='178'>Nota 1</td>
					<td width='433'>$notaUm</td>
				</tr>
				<tr>
					<td width='178'>Nota 2</td>
					<td width='433'>$notaDois</td>
				</tr>
				<tr>
					<td width='178'>Peso 1</td>
					<td width='433'>$pesoUm</td>
				</tr>
				<tr>
					<td width='178'>Peso 2</td>
					<td width='433'>$pesoDois</td>
				</tr>
				<tr>
					<td>Média Ponderada</td>
					<td>".number_format($med,2,',','.')."</td>
				</tr>
			</tbody>
		</table>";

   if($med>=6){
      echo "<img src='imagens/aprovado.png' width=100 height=100>";
   }else{
      echo "<img src='imagens/reprovdo.png' width=100 height=100>";
   }
     
?>


</body>
</html>