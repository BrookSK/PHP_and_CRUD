<?php
include "menu.php";
?>
<div class="container"><br>
<?php
echo "<h3>Listagem Carro</h3>";
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";

$comandoSql="select id_carro,nome_carro,placa_carro,cod_cliente,nome_cliente from tb_carro,tb_cliente where tb_carro.cod_cliente=tb_cliente.id_cliente";

$resultado=mysqli_query($con,$comandoSql);
?><br>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome Carro</th>
      <th scope="col">Placa</th>
      <th scope="col">Cod Cliente</th>
      <th scope="col">Nome Cliente</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
<?php

while($dados=mysqli_fetch_assoc($resultado)){
$id=$dados["id_carro"];
$nome=$dados["nome_carro"];
$placa=$dados["placa_carro"];
$cliente=$dados["cod_cliente"];
$nomeCliente=$dados["nome_cliente"];




//echo "id: $id<br>";
//echo "nome: $nome<br>";
//echo "placa: $placa<br>";
//echo "cliente: $cliente<br>";


//echo "<br>";
//echo "<a href=exclui_carro.php?id=$id> Excluir</a>";
//echo "<br>";
//echo "<a href=frm_altera_carro.php?id=$id> Alterar</a>";

//echo "<br><br>";




?>
<tr>
      <th scope="row"><?php echo $id?></th>
      <td><?php echo $nome ?></td>
      <td><?php echo $placa?></td>
      <td><?php echo $cliente ?></td>
      <td><?php echo $nomeCliente ?></td>
      <td><a href=frm_altera_carro.php?id=<?php echo $id ?>> <img src="imagens/editar.png"></a></td>  
      <td><a href=exclui_carro.php?id=<?php echo $id ?>> <img src="imagens/excluir.png"></a></td>  

    </tr>
<?php
}
?>
</tbody>
</table>
</div>