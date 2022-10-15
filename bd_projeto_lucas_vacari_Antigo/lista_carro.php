<?php
//realizando a conexaco com o banco de dados (local,usuario,senha,nome do banco)
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";
include "lista_cliente_select.php";
?>
<div class="container">
<?php
echo "<h3>Listagem Carro</h3>";

//criando o comando sql para consulta dos registros
$comandosql="select * from tb_carro";

//criando o comando sql para consulta dos registros expecificos
//$comandosql="select id_carro, nome_carro, placa_carro, cod_cliente, nome_cliente from tb_carro, tb_cliente where tb_carro.cod_cliente=tb_cliente.id_cliente";

//executando o comando sql
$resultado=mysqli_query($con,$comandosql);

echo "<h3>Listagem de carros</h3>";

//pegando os dados da consulta criada e exibindo
/*enquanto eu tiver registro no minha tabela, adiciona ele na variavel e me mostra*/
while($dados=mysqli_fetch_assoc($resultado)){
    $id=$dados["id_carro"];
    $nome=$dados["nome_carro"];
    $placa=$dados["placa_carro"];
    $cliente=$dados["cod_cliente"];
    //$clienteN=$dados["nome_cliente"];

    echo "Id: $id<br>";
    echo "Nome: $nome<br>";
    echo "Placa: $placa<br>";
    echo "Cliente: $cliente<br>";
    //echo "Cliente: $cliente - $clienteN<br>";
    echo "<a href=exclui_carro.php?id=$id>Excluir</a><br>";
    echo "<a href=frm_altera_carro.php?id=$id>Alterar</a>";
    echo "<hr>";
}

echo "<a href=frm_carro.php>Cadastrar</a><br>";
echo "<a href=inicio.php>Inicio</a>";
?>