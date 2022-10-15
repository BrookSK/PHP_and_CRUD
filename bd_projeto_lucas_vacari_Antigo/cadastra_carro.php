<?php

//1- reaçizando a conexao com o banco de dados (local, usario, senha, nomeBanco)
//$con=mysqli_connect("localhost","root","","bd_projeto");
include"conexao.php";


//2- pegando os dados vindos do formulario e armazenando em variaveis
$n=$_POST["nome"];
$p=$_POST["placa"];
$c=$_POST["cliente"];

//3- criando o comando SQL para inserção de registro
$comandoSql="insert into tb_carro 
(nome_carro,placa_carro,cod_cliente)
values
('$n','$p','$c')";

//4- executando o comando SQL
$resultado=mysqli_query($con,$comandoSql);

//5- verificando se o comando SQL foi executado
if($resultado==true){
	echo "Cadastrado com sucesso<br>";
	echo "<a href=lista_carro.php> Listar Carro </a><br>";
    echo "<a href=inicio.php>Inicio</a>";
}else{
	echo "Erro no cadastro";
}

?>