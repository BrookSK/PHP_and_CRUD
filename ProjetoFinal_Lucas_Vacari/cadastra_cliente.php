<?php

    include "conexao.php";

    // 2
    $n=$_POST["nome"];
    $rg=$_POST["rg"];
    $cpf=$_POST["cpf"];
    $e=$_POST["email"];
    $s=$_POST["sexo"];

    //3
    $comandosql="insert into tb_cliente(nome_cliente,rg_cliente,cpf_cliente,email_cliente,sexo_cliente) values('$n','$rg','$cpf','$e','$s')";

    //4
    $resultado=mysqli_query($con,$comandosql);

    //5
    if($resultado==true){
        echo "Cadastrado com Sucesso";	
    }else {
        echo "Erro no Cadastro";
    }

    echo "<br> <a href='lista_cliente.php'>Listar Cliente</a>";
?>