<?php
    //realizando a conexaco com o banco de dados (local,usuario,senha,nome do banco)
    //$con=mysqli_connect("localhost","root","","bd_projeto");
    include "conexao.php";

    //pegando os dados da consulta criada e armazenando em variaveis
    $id=$_POST["id"];
    $nome=$_POST["nome"];
    $placa=$_POST["placa"];
    $cliente=$_POST["cliente"];

    //criando o comando sql para alteracao do registro
    $comandosql="update tb_carro set nome_carro='$nome',placa_carro='$placa',cod_cliente='$cliente' where id_carro='$id'";

    //executando o comando sql
    $resultado=mysqli_query($con,$comandosql);

    //verificando se o comando sql foi executado
    if($resultado==true){
        echo "Alterado com sucesso";
    }else{
        echo "Erro na alteracao";
    }

    echo "<br> <a href='lista_carro.php'>Listar Carros</a>";
?>