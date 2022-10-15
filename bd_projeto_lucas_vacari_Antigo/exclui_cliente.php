<?php
    //realizando a conexaco com o banco de dados (local,usuario,senha,nome do banco)
    //$con=mysqli_connect("localhost","root","","bd_projeto");
    include"conexao.php";

    //pegando o valor vindo da url
    $id_cliente=$_GET["id"];

    //criando o comando sql para exclusao dos registros
    $comandosql="delete from tb_cliente where id_cliente='$id_cliente'";

    //executando o comando sql
    $resultado=mysqli_query($con,$comandosql);

    //verificando se o comando sql foi executado
    if($resultado==true){
        echo "Excluido com sucesso";
    }else{
        echo "Erro na exclusao";
    }

    echo "<br> <a href='lista_cliente.php'>Listar Cliente</a>";
?>