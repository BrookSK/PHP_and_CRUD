<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <head>
   <title>Consulta de Paciente</title>
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
		 $comandoSql="select * from tb_paciente";
	   
		/*3-executando o comando sql */ 
		 $resultado= mysqli_query($con, $comandoSql);
		        
		/*4-pegando os dados armazenados e exibindo*/
		while($dados=mysqli_fetch_assoc($resultado)){
			$id=$dados["id_paciente"];
			$p= $dados["paciente"];
			$t= $dados["tipo_sanguineo"];
			$f= $dados["fator_rh"];
			$c= $dados["convenio"];
			if ($c==true)
				$conv="sim";
			else
				$conv="não";
				
			echo "idPaciente: $id <br>";
			echo "Nome do Paciente: $p <br> ";
            echo "Tipo sanguíneo: $t <br>";
            echo "Fator Rh: $f <br>";
            echo "Convênio: $conv <br> ";	
            
			
			if($_SESSION["tipo"]=="admin"){
            echo "<a href=frmAlteraPaciente.php?id=$id> Alterar	</a>";
            echo "<a href=excluiPaciente.php?id=$id> Excluir </a>";			
			
			}
		 echo "<br><br>";
			
		}
	
	   
    ?>
	  </tbody>
	 </table>
	
	</div> 
	
	
	
	
               
</body>
</html>