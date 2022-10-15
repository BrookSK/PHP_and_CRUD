<!doctype html>
<html>
  <head>
    <title> Cadastro de Carro </title>
    <meta charset="utf-8">
  </head>
  <body>

    <?php
        include "lista_cliente_select.php";
    ?>

    <h3> Cadastro de Carro </h3>
    <form action="cadastra_carro.php" method="POST">

       <label for="nome"> Nome </label>
       <input type="text" id="nome" name="nome">
 
       <label for="placa"> Placa </label>
       <input type="text" id="placa" name="placa">

       <?php
           lista_cliente();
       ?>

       <input type="submit" value="Cadastrar"><br>

       <?php
           echo "<a href=inicio.php>Inicio</a>";
       ?>
      
    </form>
  </body>
</html>