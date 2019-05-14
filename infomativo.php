<!DOCTYPE html>
<html>
	<head>
<!--comfiguração e Fromatação-->
<?php
session_start();
include('verifica_login.php');
?>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<title>SEABC</title>
			<meta name="description" content="bootstrap 3">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
			<div class="home_div">
			<img src="home.png">
			</div>
<!--comfiguração e Fromatação-->
	</head>
	<body>
<!--menu da home-->
<div class="container">
	<div class="col-md-10">
		<ul class="nav nav-tabs nav-pills nav-justified">
			<li role="presentation" class="dropdown active">
				<a class="dropdown-toggle" data-toggle="dropdown" href="home.php">
				 	Home <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
				 	<li><a href="home.php">Painel</a></li>
					<li><a href="painel_lslopes.php">Lucas Lopes</a></li>
					<li><a href="painel_wporcino.php">Wladimir Procino</a></li>
				</ul>
			</li>
			<li role="presentation" class="dropdown active">
				<a class="dropdown-toggle" data-toggle="dropdown" href="home.php">
					Registro <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="formulario_criacao.php">Resgistar Criação</a></li>
					<li><a href="formulario_desligamento.php">Regsitar Desligamento</a></li>
					<li><a href="formulario_bloqueios.php">Regsitar Bloqueio</a></li>
					<li><a href="formulario_alteracoes.php">Regsitar Alteraçoes</a></li>

				</ul>
			</li>
			<li role="presentation" class="dropdown active">
				<a class="dropdown-toggle" data-toggle="dropdown" href="home.php">
					Consulta <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="busca_criacao.php">Pendecias Criação</a></li>
					<li><a href="busca_desligamento.php">Pendencias Desligamento</a></li>
					<li><a href="busca_bloqueios.php">Pendecias Bloqueios</a></li>
					<li><a href="busca_alteracao.php">Pendencias Alteração </a></li>
					<li><a href="busca_sigav.php">Usuarios Sigav</a></li>
				</ul>
			</li>
			<li>
				<a href="infomativo.php">Informativo</a>
			</li>
				<li>
					<a href="logout.php">Logoff</a>
				</li>
			</ul>
				</div>
			 </div>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<style>
	h3 {color: rgb(0, 0, 0); text-align: center; font-style: italic;font-family: "Times New Roman";}
</style>
<div class="container theme-showcase" role="main">
	 <div class="page-header">
		 <h3>Dados dos Usuarios Criação de Acesso</h3>
	 </div>
 </div>
	<form action="insert_info.php"> <!--Formulario de Criação-->
		            <div class="col-md-2">
		              <div class="form-group">
		                <label>login</label>
		                <input type="text" name="login" class="form-control" required="required" placeholder="login"><br><br>
		                </div>
		            </div>
		            <div class="col-md-2">
		              <div class="form-group">
		                <label>senha</label>
		                <input type="text" name="senha" class="form-control" required="required" placeholder="senha"><br><br>
		              </div>
		            </div>
		            <br>
		            <input type="submit" class="btn btn-md btn-success" value="Cadastrar">
				   </form>
						<form method="POST" action="deletar_base.php">
				  		<input type="submit" value="DELETAR" class="btn btn-danger" >						  	
					</form>
 <?php
		 include_once("conexao_busca.php");
		 @$pesquisar = $_POST ['pesquisar'];
		 @$pesquisar_s = $_POST ['pesquisar_s'];
		 @$responsavel = $_POST ['responsavel'];
		 @$result_pesquisa = "SELECT * FROM info_dados ORDER BY  INFO_ID DESC ; ";
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
							 <th>User</th>
							 <th>Login</th>
							 <th>Gerente</th>
							 <th>Email Pesoal</th>
							 <th>Ação</th>
						 </tr>
					 </thead>
					 <tbody>
						 <?php while($rows_resultado_p = mysqli_fetch_assoc($resultado_pesqeuisa)){ ?>
							 <tr>
								 <td><?php echo $rows_resultado_p['info_id']; ?></td>
								 <td><?php echo $rows_resultado_p['login']; ?></td>
								 <td><?php echo $rows_resultado_p['senha']; ?></td>
								 <td><?php echo $rows_resultado_p['gerente']; ?></td>
								 <td><?php echo $rows_resultado_p['email_p']; ?></td>
								 <td>
									 <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_resultado_p['info_id']; ?>">Visualizar</button>
									 <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal"
									 data-whateverinfo_id="<?php echo $rows_resultado_p['info_id']; ?>"
									 data-whateverlogin="<?php echo $rows_resultado_p['login']; ?>"
									 data-whateversenha="<?php echo $rows_resultado_p['senha']; ?>">Editar</button>
							 </td>
							 </tr>
							 <!-- Inicio Modal -->
							 <div class="modal fade" id="myModal<?php echo $rows_resultado_p['info_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								 <div class="modal-dialog" role="document">
									 <div class="modal-content">
										 <div class="modal-header">
											 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											 <h4 class="modal-title text-center" id="myModalLabel">Email Pessoal - <?php echo $rows_resultado_p['email_p']; ?><br>Gerente - <?php echo $rows_resultado_p['gerente']; ?></h4>
										 </div>
										 <div class="modal-body">
											 	<p>Webmail: https://correio.level3br.com </p>
												<p>Nome de usuário: <?php echo $rows_resultado_p['login']; ?></p>
										 		<p>Senha: <?php echo $rows_resultado_p['senha']; ?></p>
										    <br>
										    <br>
										    <p>SIGAV: https://sigav.even.com.br </p>
										    <p>Nome de usuário: <?php echo $rows_resultado_p['login']; ?></p>
										    <p>Senha: <?php echo $rows_resultado_p['senha']; ?></p>
										    <br>
										    <br>
										    <p>Portal do corretor: http://corretor.even.com.br  </p>
										    <p>Nome de usuário: <?php echo $rows_resultado_p['login']; ?></p>
										    <p>Senha: <?php echo $rows_resultado_p['senha']; ?></p>
										 </div>
									 </div>
								 </div>
							 </div>
							 <!-- Fim Modal -->
						 <?php } ?>
					 </tbody>
					</table>
			 </div>
		 </div>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-body">
				<form method="POST" action="update_info.php" enctype="multipart/form-data">
					<div class="form-group">
					<label for="message-text" class="control-label">login:</label>
					<textarea name="login" class="form-control" id="login"></textarea>
					</div>
					<div class="form-group">
					<label for="message-text" class="control-label">senha:</label>
					<textarea name="senha" class="form-control" id="senha"></textarea>
					</div>
				<input name="info_id" type="hidden" class="form-control" id="info_id" value="">
				<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-danger">Alterar</button>
				</form>
			  </div>
			</div>
		  </div>
		</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  var recipientinfo_id = button.data('whateverinfo_id')
		  var recipientlogin = button.data('whateverlogin')
			var recipientsenha = button.data('whateversenha')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('info_id' + recipient)
		  modal.find('#info_id').val(recipientinfo_id)
		  modal.find('#login').val(recipientlogin)
		  modal.find('#senha').val(recipientsenha)
		})
	</script>
<br>
<br>
<br>
<br>
	<form method="POST" action="infomativo.php">
		<br>
		<input type="text" name="pesquisar" placeholder="PESQUISAR APELIDO">
		<input type="submit" value="Buscar" class="btn btn-primary btn-sm" >
		<?php
			include_once("conexao_busca.php");
			@$pesquisar = $_POST ['pesquisar'];
			$result_registros = "SELECT * FROM usuarios_sigav WHERE apelido LIKE  '%$pesquisar%' AND ativo = 'SIM' ORDER BY  id_user DESC LIMIT 1000   ";
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
							<th>E - Mail</th>
							<th>CPF </th>
							<th>Email_p </th>
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
								<td><?php echo $rows_apelido['e_mail']; ?></td>
								<td><?php echo $rows_apelido['cpf']; ?></td>
								<td><?php echo $rows_apelido['email_p']; ?></td>
								<td><form action="solicitacao_info.php">
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
<?php include("rodape.php") ?>