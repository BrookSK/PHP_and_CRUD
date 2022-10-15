<?php

//1- reaçizando a conexao com o banco de dados (local, usario, senha, nomeBanco)
//$con=mysqli_connect("localhost","root","","bd_projeto");
include"conexao.php";


//2- pegando os dados vindos do formulario e armazenando em variaveis
$n=$_POST["nome"];
$r=$_POST["rg"];
$c=$_POST["cpf"];
$e=$_POST["email"];

//3- criando o comando SQL para inserção de registro
$comandoSql="insert into tb_cliente 
(nome_cliente,rg_cliente,cpf_cliente,email_cliente)
values
('$n','$r','$c','$e')";

//4- executando o comando SQL
$resultado=mysqli_query($con,$comandoSql);

//5- verificando se o comando SQL foi executado
if($resultado==true){
	echo "Cadastrado com sucesso<br>";
	echo "<a href=lista_cliente.php> Listar </a>";
}else{
	echo "Erro no cadastro";
}

?>