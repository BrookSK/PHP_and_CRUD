<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <head>
   <title>Consulta de Paciente Convenio</title>
  </head>
  <body>

	
     <?php 
     include "menu.php";
	 ?>

  <div class="container">  
  
    <h2> Lista de Pacientes </h2>
   
	<?php
       /*1-definindo a conexao -local, usuario, senha e banco de dados*/
          include("conexao.php");
			     
		/*2-definindo o comando sql a ser usado */
		 $comandoSql="select * from tb_paciente where convenio=1";
	   
		/*3-executando o comando sql */ 
		 $resultado= mysqli_query($con, $comandoSql);
		        
		/*4-pegando os dados armazenados e exibindo*/
		while($dados=mysqli_fetch_assoc($resultado)){
			$id=$dados["id_paciente"];
			$p= $dados["paciente"];
			$c= $dados["convenio"];
			if ($c==1)
				$conv="sim";
			else
				$conv="não";
				
			echo "idPaciente: $id <br>";
			echo "Nome do Paciente: $p <br> ";
            echo "Convênio: $conv <br> ";	
            
		
		 echo "<br>";
		}	
		
	
	   
    ?>

	</div> 
	
               
</body>
</html>