<?php
  include "menu.php";
?>

<div class="container">

  <?php
    echo "<br>";
    echo "<h3>Listagem Fornecedor</h3>";
    include "conexao.php";
    $comandoSql="select * from tb_fornecedor";
    $resultado=mysqli_query($con,$comandoSql);

  ?>

  <br>

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">ENDERECO</th>
        <th scope="col">TELEFONE</th>
        <th scope="col">EMAIL</th>
        <th scope="col">HORARIO ENTREGA</th>
        <th scope="col">SETOR</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>

      <?php

        while($dados=mysqli_fetch_assoc($resultado)){
        $id=$dados["id_fornecedor"];
        $nome=$dados["nome_fornecedor"];
        $endereco=$dados["endereco_fornecedor"];
        $email=$dados["email_fornecedor"];
        $telefone=$dados["telefone_fornecedor"];
        $horario=$dados["horario_entrega"];
        $setor=$dados["setor_fornecedor"];

        //echo "id: $id<br>";
        //echo "nome: $nome<br>";
        //echo "rg: $rg<br>";
        //echo "cpf: $cpf<br>";
        //echo "email: $email";

        //echo "<br>";
        //echo "<a href=exclui_cliente.php?id=$id> Excluir</a>";
        //echo "<br>";
        //echo "<a href=frm_altera_cliente.php?id=$id> Alterar</a>";

        //echo "<br><br>";
      ?>

        <tr>
          <th scope="row"><?php echo $id?></th>
          <td><?php echo $nome ?></td>
          <td><?php echo $endereco?></td>
          <td><?php echo $email ?></td>
          <td><?php echo $telefone ?></td>
          <td><?php echo $horario ?></td>
          <td><?php echo $setor ?></td>
          <td><a href=frm_altera_fornecedor.php?id=<?php echo $id ?>> <img src="imagens/editar.png"></a></td>  
          <td><a href=exclui_fornecedor.php?id=<?php echo $id ?>> <img src="imagens/excluir.png"></a></td>  

        </tr>

      <?php
      }
      ?>
    </tbody>
  </table>
</div>