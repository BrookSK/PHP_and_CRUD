<?php
include "menu.php";
?>
<div class="container">
<?php
echo "<h3>Listagem Carro</h3>";
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";

$comandoSql="select * from tb_carro";

$resultado=mysqli_query($con,$comandoSql);

while($dados=mysqli_fetch_assoc($resultado)){
$id=$dados["id_carro"];
$nome=$dados["nome_carro"];
$placa=$dados["placa_carro"];
$cliente=$dados["cod_cliente"];


echo "id: $id<br>";
echo "nome: $nome<br>";
echo "placa: $placa<br>";
echo "cliente: $cliente<br>";


echo "<br>";
echo "<a href=exclui_carro.php?id=$id> Excluir</a>";
echo "<br>";
echo "<a href=frm_altera_carro.php?id=$id> Alterar</a>";

echo "<br><br>";
}

echo "<a href='frm_carro.php'>Cadastrar Carro</a>";
echo "<br>";
echo "<a href='inicio.php'>Inicio</a>";

?>
</div>