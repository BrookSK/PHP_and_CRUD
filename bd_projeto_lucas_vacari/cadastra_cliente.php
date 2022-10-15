<?php
//1- realizando a conexao com o banco de dados (local, usuario, senha, nomeBANCO)
//2- pegando os dados digitados do formulario e armazenando em variaveis
//3- criando o comando sql para inserção de registro
//4- executar o comando sql
//5- verificar se o comando sql foi executado

// 1
//$conn=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";
// 2
$n=$_POST["nome"];
$rg=$_POST["rg"];
$cpf=$_POST["cpf"];
$e=$_POST["email"];

//3

$comandosql="insert into tb_cliente
(nome_cliente,rg_cliente,cpf_cliente,email_cliente)
values
('$n','$rg','$cpf','$e')";

//4

$resultado=mysqli_query($con,$comandosql);

//5
if($resultado==true){
echo "Sucesso";	
}
else{ echo "Erro";}
?>