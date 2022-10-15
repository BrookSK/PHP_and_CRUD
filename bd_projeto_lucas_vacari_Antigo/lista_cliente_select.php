<?php

    function lista_cliente(){

        //realizando a conexaco com o banco de dados (local,usuario,senha,nome do banco)
        //$con=mysqli_connect("localhost","root","","bd_projeto");
        include "conexao.php";

        //criando o comando sql para consulta dos registros
        $comandosql="select * from tb_cliente";

        //executando o comando sql
        $resultado=mysqli_query($con,$comandosql);

        echo "<h3>Listagem de clientes</h3>";
        ?>

            <label for="cliente"> Cliente </label>
            <select name="cliente" id="cliente">

        <?php

        //pegando os dados da consulta criada e exibindo
        /*enquanto eu tiver registro no minha tabela, adiciona ele na variavel e me mostra*/
        while($dados=mysqli_fetch_assoc($resultado)){
            $id=$dados["id_cliente"];
            $nome=$dados["nome_cliente"];
            //$rg=$dados["rg_cliente"];
            //$cpf=$dados["cpf_cliente"];
            //$email=$dados["email_cliente"];

            /*echo "Id: $id<br>";
            echo "Nome: $nome<br>";
            echo "Rg: $rg<br>";
            echo "Cpf: $cpf<br>";
            echo "E-mail: $email<br><br>";
            echo "<a href=exclui_cliente.php?id=$id>Excluir</a><br>";
            echo "<a href=frm_altera_cliente.php?id=$id>Alterar</a>";
            echo "<hr>";*/

            echo "<option value=$id> $nome </option>";
        }
        echo "</select>";
        //echo "<a href=frm_cliente.html>Cadastrar</a><br>";
        //echo "<a href=inicio.php>Inicio</a>";
    }

    function lista_cliente_id($cod){

        //realizando a conexaco com o banco de dados (local,usuario,senha,nome do banco)
        //$con=mysqli_connect("localhost","root","","bd_projeto");
        include"conexao.php";

        //criando o comando sql para consulta dos registros
        $comandosql="select * from tb_cliente";

        //executando o comando sql
        $resultado=mysqli_query($con,$comandosql);

        //echo "<h3>Listagem de clientes</h3>";
        ?>

            <label for="cliente"> Cliente </label>
            <select name="cliente" id="cliente">

        <?php

        //pegando os dados da consulta criada e exibindo
        /*enquanto eu tiver registro no minha tabela, adiciona ele na variavel e me mostra*/
        while($dados=mysqli_fetch_assoc($resultado)){
            $id=$dados["id_cliente"];
            $nome=$dados["nome_cliente"];
            //$rg=$dados["rg_cliente"];
            //$cpf=$dados["cpf_cliente"];
            //$email=$dados["email_cliente"];

            /*echo "Id: $id<br>";
            echo "Nome: $nome<br>";
            echo "Rg: $rg<br>";
            echo "Cpf: $cpf<br>";
            echo "E-mail: $email<br><br>";
            echo "<a href=exclui_cliente.php?id=$id>Excluir</a><br>";
            echo "<a href=frm_altera_cliente.php?id=$id>Alterar</a>";
            echo "<hr>";*/

            if($cod==$id)
                echo "<option value=$id selected=selected> $nome </option>";
            else
                echo "<option value=$id> $nome </option>";
        }
        echo "</select>";
        //echo "<a href=frm_cliente.html>Cadastrar</a><br>";
        //echo "<a href=inicio.php>Inicio</a>";
    }
?>