<!DOCTYPE html>
<html>
	<head>
<!--comfiguração e Fromatação-->
<?php session_start(); include('verifica_login.php');?>
<?php @include("cabecalho.php") ?>
				</div>
			 </div>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<style>
	h3 {color: rgb(0, 0, 0); text-align: center; font-style: italic;font-family: "Times New Roman";}
</style>
<div class="container theme-showcase" role="main">
	 <div class="page-header">
		<h3>Usuarios Não Desligados  
		 		<form action="verifca_block.php">
					<input type="submit" class="btn btn-xs btn-dabger" value="Atualizar Status">
				</form>
				<form action="atualiza_base_block.php">
					<input type="submit" class="btn btn-xs btn-dabger" value="Atualizar Base ">
				</form>
				<form method="POST" action="deletar_base_block.php">
					<input type="submit" value="DELETAR" class="btn btn-xs btn-danger" >						  	
				</form>
		</h3>
	 </div>
 </div> 	
 <?php
		 include_once("conexao_busca.php");
		 @$pesquisar = $_POST ['pesquisar'];
		 @$pesquisar_s = $_POST ['pesquisar_s'];
		 @$responsavel = $_POST ['responsavel'];
		 @$result_pesquisa =	"SELECT * FROM solictasao_block 
		 WHERE  atraso_doc < 50 
		 AND atraso_doc != '' 
		 AND satatus_doc != 'Definitivo' 
		 AND satatus_doc != 'TTI' 
		 AND ativo = 'sim'
		 ORDER BY atraso_doc DESC "; 
		 $resultado_pesqeuisa = mysqli_query($conn, $result_pesquisa);
 ?>
  <!--	<div class="container theme-showcase" role="main">  -->
		 <div class="page-header">
		 </div>
		 <div class="row">
			 <div class="col-md-12">
				 <table class="table">
					 <thead>
						 <tr>
							 <th>ID</th>	
							 <th>Nome</th>											
							 <th>Apelido</th>
							 <th>Ativo</th>
							 <th>Tipo de Creci</th>
							 <th>Atraso Doc</th>
							 <th>Status</th>
							<th>Ação</th>
						 </tr>
					 </thead>
					 <tbody>
						 <?php while($rows_resultado_p = mysqli_fetch_assoc($resultado_pesqeuisa )){ ?>
					
							 <tr>
								 <td><?php echo $rows_resultado_p['id_block']; ?></td>
								 <td><?php echo $rows_resultado_p['nome']; ?></td>							
								 <td><?php echo $rows_resultado_p['apelido']; ?></td>
								 <td><?php echo $rows_resultado_p['ativo']; ?></td>
								 <td><?php echo $rows_resultado_p['satatus_doc']; ?></td>
								 <td><?php echo $rows_resultado_p['atraso_doc']; ?></td>	
								 <td><?php echo $rows_resultado_p['status_b']; ?></td>						
							<td>
							<form action="solicitacao_desligamento_block.php">
							<input type="text" name="id_block" class="col-md-9" placeholder="Desligar">
							<td><input type="submit" class="btn btn-xs btn-dabger" value="Cadastrar"></td>
							</form>
						 	</td>				
							 </tr>
							 <?php } ?>
					 </tbody>
					</table>
					<?php include("rodape.php") ?>