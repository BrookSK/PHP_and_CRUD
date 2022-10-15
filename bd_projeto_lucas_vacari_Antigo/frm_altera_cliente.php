<!doctype html>
<html>
  <head>
    <title> Alteracao de Cliente </title>
    <meta charset="utf-8">
  </head>
  <body>

    <?php
        //realizando a conexaco com o banco de dados (local,usuario,senha,nome do banco)
        //$con=mysqli_connect("localhost","root","","bd_projeto");
        include"conexao.php";

        //pegando o valor vindo da url
        $id_cliente=$_GET["id"];

        //criando o comando sql para exclusao dos registros
        $comandosql="select * from tb_cliente where id_cliente='$id_cliente'";

        //executando o comando sql
        $resultado=mysqli_query($con,$comandosql);

        //pegando os dados da consulta criada e armazenando em variaveis
        $dados=mysqli_fetch_assoc($resultado);

        $nome=$dados["nome_cliente"];
        $rg=$dados["rg_cliente"];
        $cpf=$dados["cpf_cliente"];
        $email=$dados["email_cliente"];
    ?>  

    <!--preenchendo o formulario com dados da consulta-->

    <h3> Alterar Cliente </h3>
    <form action="altera_cliente.php" method="POST">

        <label for="id"> Id </label>
        <input type="text" id="id" name="id" readonly value="<?php echo $id_cliente ?>">

        <label for="nome"> Nome </label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome ?>">

        <label for="rg"> RG </label>
        <input type="text" id="rg" name="rg" value="<?php echo $rg ?>">

        <label for="cpf"> CPF </label>
        <input type="text" id="cpf" name="cpf" value="<?php echo $cpf ?>">

        <label for="email"> Email </label>
        <input type="text" id="email" name="email" value="<?php echo $email ?>">

        <input type="submit" value="Alterar">
        
    </form>
  </body>
</html>