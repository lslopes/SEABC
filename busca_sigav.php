<?php
session_start();
include('verifica_login.php');
?>
 <?php	@include("cabecalho.php"); ?>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h3>Dados dos Usuarios SIGAV</h3>
			</div>
		</div>
		<form method="POST" action="busca_sigav.php">
			<br>
		 	<input type="text" name="pesquisar" placeholder="PESQUISAR APELIDO">
			<input type="submit" value="Buscar" class="btn btn-primary btn-sm" >
      <?php
        include_once("conexao_busca.php");
        @$pesquisar = $_POST ['pesquisar'];
        $result_registros = "SELECT * FROM usuarios_sigav WHERE apelido LIKE '%$pesquisar%' LIMIT 1000 ";
        $resultado_usuarios = mysqli_query($conn, $result_registros);
        ?>
		</form>
		<br>
		<style>
			h3 {color: rgb(0, 0, 0); text-align: center; font-style: italic;font-family: "Times New Roman";}
		</style>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Apelido</th>
								<th>Gerente</th>
								<th>Gerente </th>
                <th>Tipo de Solictação</th>
                <th>Acoes</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows_apelido = mysqli_fetch_assoc($resultado_usuarios)){ ?>
								<tr>
								
									<td><?php echo $rows_apelido['id_user']; ?></td>
									<td><?php echo $rows_apelido['nome']; ?></td>
									<td><?php echo $rows_apelido['apelido']; ?></td>
									<td><?php echo $rows_apelido['gerente']; ?></td>
									<td><?php echo $rows_apelido['gerente_2']; ?></td>
                  <td><form action="solicitacao.php">
	                <input type="text" name="apelido"class="col-md-9  "><br><br>
                  <td><input type="submit" class="btn btn-md btn-success" value="Cadastrar"></td>
                  </form>
                  </td>
									<td>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>
		</div>
  </body>
</html>
