<!doctype html>
<html>
  <head>
    <title> Cadastro de Cliente </title>
    <meta charset="utf-8">
  </head>
  <body>

    <?php
      include "menu.php";
    ?>
    <div class="container">
      <h3> Cadastro de Cliente </h3>
      <form action="cadastra_cliente.php" method="POST">

        <div class="form-group">
          <label for="nome"> Nome </label>
          <input type="text" id="nome" name="nome" class="form-control">
        </div>
  
        <div class="form-group">
          <label for="rg"> RG </label>
          <input type="text" id="rg" name="rg" class="form-control">
        </div>

        <div class="form-group">
          <label for="cpf"> CPF </label>
          <input type="text" id="cpf" name="cpf" class="form-control">
        </div>
    
        <div class="form-group">
          <label for="email"> Email </label>
          <input type="text" id="email" name="email" class="form-control">
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-outline-secondary">
        
      </form>
    </div>
  </body>
</html>