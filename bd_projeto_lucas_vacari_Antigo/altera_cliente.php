<?php
    //realizando a conexaco com o banco de dados (local,usuario,senha,nome do banco)
    //$con=mysqli_connect("localhost","root","","bd_projeto");
    include"conexao.php";

    //pegando os dados da consulta criada e armazenando em variaveis
    $id=$_POST["id"];
    $nome=$_POST["nome"];
    $rg=$_POST["rg"];
    $cpf=$_POST["cpf"];
    $email=$_POST["email"];

    //criando o comando sql para alteracao do registro
    $comandosql="update tb_cliente set nome_cliente='$nome',rg_cliente='$rg',cpf_cliente='$cpf',email_cliente='$email' where id_cliente='$id'";

    //executando o comando sql
    $resultado=mysqli_query($con,$comandosql);

    //verificando se o comando sql foi executado
    if($resultado==true){
        echo "Alterado com sucesso";
    }else{
        echo "Erro na alteracao";
    }

    echo "<br> <a href='lista_cliente.php'>Listar Cliente</a>";
?>