<!doctype html>
<html>
  <head>
    <title> Alteracao de Carro </title>
    <meta charset="utf-8">
  </head>
  <body>

    <?php
        //realizando a conexaco com o banco de dados (local,usuario,senha,nome do banco)
        //$con=mysqli_connect("localhost","root","","bd_projeto");
        include "conexao.php";
        include "lista_cliente_select.php";

        //pegando o valor vindo da url
        $id_carro=$_GET["id"];

        //criando o comando sql para exclusao dos registros
        $comandosql="select * from tb_carro where id_carro='$id_carro'";

        //executando o comando sql
        $resultado=mysqli_query($con,$comandosql);

        //pegando os dados da consulta criada e armazenando em variaveis
        $dados=mysqli_fetch_assoc($resultado);

        $nome=$dados["nome_carro"];
        $placa=$dados["placa_carro"];
        $cliente=$dados["cod_cliente"];
    ?>  

    <!--preenchendo o formulario com dados da consulta-->

    <h3> Alterar Carro </h3>
    <form action="altera_carro.php" method="POST">

        <label for="id"> Id </label>
        <input type="text" id="id" name="id" readonly value="<?php echo $id_carro ?>">

        <label for="nome"> Nome </label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome ?>">

        <label for="rg"> Placa </label>
        <input type="text" id="placa" name="placa" value="<?php echo $placa ?>">

        <?php lista_cliente_id($cliente); ?>

        <input type="submit" value="Alterar">
        
    </form>
  </body>
</html>