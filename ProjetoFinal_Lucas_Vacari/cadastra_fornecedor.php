<?php

    include "conexao.php";

    // 2
    $n=$_POST["nome"];
    $en=$_POST["endereco"];
    $e=$_POST["email"];
    $tel=$_POST["telefone"];
    $h=$_POST["HoraEntrega"];
    $s=$_POST["setor"];

    //3
    $comandosql="insert into tb_fornecedor(nome_fornecedor,endereco_fornecedor,email_fornecedor,telefone_fornecedor,horario_entrega,setor_fornecedor) values('$n','$en','$e','$tel','$h','$s')";
    
    //4
    $resultado=mysqli_query($con,$comandosql);

    //5
    if($resultado==true){
        echo "Dados gravados com sucesso";	
    }else {
        echo "Nao foi possivel a gravacao dos dados";
    }
?>