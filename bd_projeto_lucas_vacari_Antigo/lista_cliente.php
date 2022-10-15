<?php
//realizando a conexaco com o banco de dados (local,usuario,senha,nome do banco)
//$con=mysqli_connect("localhost","root","","bd_projeto");
include "conexao.php";
include "menu.php";

?>
    <div class="container">
<?php

//criando o comando sql para consulta dos registros
$comandosql="select * from tb_cliente";

//executando o comando sql
$resultado=mysqli_query($con,$comandosql);

echo "<br>";

echo "<h3>Listagem de clientes</h3>";

?>

<table class="table table-dark">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">RG</th>
        <th scope="col">CPF</th>
        <th scope="col">Email</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
    </tr>
</thead>

<tbody>

<?php
//pegando os dados da consulta criada e exibindo
/*enquanto eu tiver registro no minha tabela, adiciona ele na variavel e me mostra*/
while($dados=mysqli_fetch_assoc($resultado)){
    $id=$dados["id_cliente"];
    $nome=$dados["nome_cliente"];
    $rg=$dados["rg_cliente"];
    $cpf=$dados["cpf_cliente"];
    $email=$dados["email_cliente"];

//    echo "Id: $id<br>";
//    echo "Nome: $nome<br>";
//    echo "Rg: $rg<br>";
//    echo "Cpf: $cpf<br>";
//    echo "E-mail: $email<br><br>";
//    echo "<a href=exclui_cliente.php?id=$id>Excluir</a><br>";
//    echo "<a href=frm_altera_cliente.php?id=$id>Alterar</a>";
//    echo "<hr>";
?>

<tr>
    <th scope="row"><?php echo $id?></th>
    <td><?php echo $nome ?></td>
    <td><?php echo $rg?></td>
    <td><?php echo $cpf ?></td>
    <td><?php echo $email ?></td>
    <td><a href=frm_altera_cliente.php?id=<?php echo $id ?>> <img src="imagens/editar.png"></a></td>  
    <td><a href=exclui_cliente.php?id=<?php echo $id ?>> <img src="imagens/excluir.png"></a></td>  
</tr>

<?php
}
?>
</tbody>
</table>
</div>