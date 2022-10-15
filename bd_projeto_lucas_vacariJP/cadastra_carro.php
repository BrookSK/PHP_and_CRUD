<?php
include "menu.php";
//1- realizando a conexao com o banco de dados (local, usuario, senha, nomeBANCO)
//2- pegando os dados digitados do formulario e armazenando em variaveis
//3- criando o comando sql para inserção de registro
//4- executar o comando sql
//5- verificar se o comando sql foi executado

// 1

include "conexao.php";
// 2
$n=$_POST["nome"];
$p=$_POST["placa"];
$c=$_POST["cliente"];

//3

$comandosql="insert into tb_carro
(nome_carro,placa_carro,cod_cliente)
values
('$n','$p','$c')";

//4

$resultado=mysqli_query($con,$comandosql);

//5
if($resultado==true){
echo "Sucesso";	
}
else{ echo "Erro";}

echo"<br><a href='lista_carro.php'>Listar Carro</a>";
echo"<br>";
echo "<a href='inicio.php'>Inicio </a>";

?>