<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tarefa2_xx</title>
</head>


<body>
<?php
/*Faça um programa em PHP que gere um número de 1 até 12
  e exiba o número, uma imagem e qual é a estação do ano. 
  Se for o mês do seu aniversário escrever mais uma mensagem.
  meses      estação
  12,1 e 2    verão
  3,4 e 5     outono
  6,7 e 8     inverno
  9,10 e 11   primavera
   */

  $num = rand(1, 12);

  switch ($num) {
    case 1:
    case 2:
    case 12:
      $estacao = "verao";

      break;

    case 3:
    case 4:
      $estacao = "outono";
      break;

    case 6:
    case 7:
      $estacao = "inverno";
      break;

    case 8:
      $estacao = "inverno";
      echo "<script>alert('Meu aniversário!')</script>";
      break;

    case 5:
      $estacao = "outono";
      break;

    default:
      $estacao = "primavera";
      break;
  }



  echo "
  <center>
  <p>Mês $num, Estação: $estacao</p>
  <div class='gallery' style='margin-left:45%'>
    <a target='_blank' href='imagens/$estacao.jpg'>
      <img src='imagens/$estacao.jpg' width='600' height='400'>
    </a>
  </div>";

?>

</body>
</html>