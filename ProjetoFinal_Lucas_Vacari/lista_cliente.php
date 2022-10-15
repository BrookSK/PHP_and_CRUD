<?php
  include "menu.php";
?>

<div class="container">

  <?php
    echo "<br>";
    echo "<h3>Listagem Cliente</h3>";
    include "conexao.php";
    $comandoSql="select * from tb_cliente";
    $resultado=mysqli_query($con,$comandoSql);

  ?>

  <br>

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">RG</th>
        <th scope="col">CPF</th>
        <th scope="col">Email</th>
        <th scope="col">Sexo</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>

      <?php

        while($dados=mysqli_fetch_assoc($resultado)){
        $id=$dados["id_cliente"];
        $nome=$dados["nome_cliente"];
        $rg=$dados["rg_cliente"];
        $cpf=$dados["cpf_cliente"];
        $email=$dados["email_cliente"];
        $sexo=$dados["sexo_cliente"];

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
          <td><?php echo $rg?></td>
          <td><?php echo $cpf ?></td>
          <td><?php echo $email ?></td>
          <td><?php echo $sexo ?></td>
          <td><a href=frm_altera_cliente.php?id=<?php echo $id ?>> <img src="imagens/editar.png"></a></td>  
          <td><a href=exclui_cliente.php?id=<?php echo $id ?>> <img src="imagens/excluir.png"></a></td>  

        </tr>

      <?php
      }
      ?>
    </tbody>
  </table>
</div>