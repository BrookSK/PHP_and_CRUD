<?php

    include "conexao.php";

    // 2
    $n=$_POST["nome"];
    $en=$_POST["endereco"];
    $tel=$_POST["telefone"];
    $e=$_POST["email"];
    $h=$_POST["HoraEntrega"];
    $s=$_POST["setor"];

    //3
    $comandosql="insert into tb_fornecedor(nome_fornecedor,endereco_fornecedor,email_fornecedor,telefone_fornecedor,horario_entrega,setor_fornecedor) values('$n','$en','$tel','$e','$h','$s')";

    //4
    $resultado=mysqli_query($con,$comandosql);

    //5
    if($resultado==true){
        echo "Dados gravados com sucesso";	
    }else {
        echo "Não foi possivel a gravacao dos dados";
    }
?>