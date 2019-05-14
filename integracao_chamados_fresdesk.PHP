<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
	<head>
<!--comfiguração e Fromatação-->
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<title>SEABC</title>
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
				<a class="dropdown-toggle" data-toggle="dropdown" href="home.html">
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
				<a class="dropdown-toggle" data-toggle="dropdown" href="home.html">
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
<style>
	h3 {color: rgb(0, 0, 0); text-align: center; font-style: italic;font-family: "Times New Roman";}
</style>
 <div class="container theme-showcase" role="main">
		<div class="page-header">
			<h3>Dados dos Usuarios Criação de Acesso</h3>
		</div>
	</div>
		<form method="POST" action="integracao_chamados_fresdesk.php">
			<input type="text" name="pesquisar" placeholder="DESCRICAO">
			<input list="pesquisar_s" name="pesquisar_s" placeholder="STATUS">
			<input list="responsavel" name="responsavel" placeholder="RESPONSAVEL">
			<input list="id_chamado" name="id_chamado" placeholder="ID">
			<datalist id="responsavel">
				<option value="Lucas Lopes">
				<option value="Waldimir Procino">
			</datalist>
			<datalist id="pesquisar_s">
				<option value="Pendente">
				<option value="Ativo">
			</datalist>
			<input type="radio" name="pesquisar" value="xxx"> DESCRICAO
			<input type="radio" name="pesquisar_s" value="xxx"> STATUS
			<input type="radio" name="responsavel" value="xxx"> RESPONSAVEL
			<input type="radio" name="id_chamado" value="xxx"> ID
			<input type="submit" value="Buscar" class="btn btn-primary btn-sm" >
	<?php
			include_once("conexao_busca.php");
			@$pesquisar = $_POST ['pesquisar'];
			@$pesquisar_s = $_POST ['pesquisar_s'];
			@$responsavel = $_POST ['responsavel'];
			@$id_chamado = $_POST ['id_chamado'];
			$result_pesquisa = "SELECT * FROM chamado_imob 
			WHERE `display-id` LIKE '%$pesquisar%' OR `description` LIKE '%$pesquisar%' OR `requester-status-name` LIKE '%$pesquisar_s%' OR `responder-name` LIKE '%$responsavel%' 
			ORDER BY  `description` DESC  LIMIT 1000 ";
			$resultado_pesqeuisa = mysqli_query($conn, $result_pesquisa);
	?>
		</form>
	<!--	<div class="container theme-showcase" role="main">  -->
			<div class="page-header">
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Descricao</th>
								<th>Assunto</th>
								<th>Status</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows_resultado_p = mysqli_fetch_assoc($resultado_pesqeuisa)){ ?>
								<tr>
									<td><?php echo $rows_resultado_p['display-id']; ?></td>
									<td><?php echo $rows_resultado_p['description']; ?></td>
									<td><?php echo $rows_resultado_p['subject']; ?></td>
									<td><?php echo $rows_resultado_p['requester-status-name']; ?></td>
									<td><?php echo $rows_resultado_p['responder-name']; ?></td>
									<td><?php echo $rows_resultado_p['vazio']; ?></td>
									<td>
										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_resultado_p['id_criacao']; ?>">Visualizar</button>
										<button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal"
										data-whatever="<?php echo $rows_resultado_p['id_criacao']; ?>"
										data-whatevernome="<?php echo $rows_resultado_p['nome']; ?>"
										data-whateverapelido="<?php echo $rows_resultado_p['apelido'];?>"
										data-whatevergerente="<?php echo $rows_resultado_p['gerente']; ?>"
										data-whatevergerente_2="<?php echo $rows_resultado_p['gerente_2']; ?>"
										data-whateverdata_criacao="<?php echo $rows_resultado_p['data_criacao']; ?>"
										data-whatevernumero_chamado="<?php echo $rows_resultado_p['numero_chamado']; ?>"
										data-whateverstatus="<?php echo $rows_resultado_p['status']; ?>"
										data-whateverresponsavel="<?php echo $rows_resultado_p['responsavel']; ?>"
										data-whateveremail_p="<?php echo $rows_resultado_p['email_p']; ?>"
										data-whatevercpf="<?php echo $rows_resultado_p['cpf']; ?>"
										data-whateverobs="<?php echo $rows_resultado_p['obs']; ?>">Editar</button>
									</td>
								</tr>
								<!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $rows_resultado_p['id_criacao']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_resultado_p['nome']; ?></h4>
											</div>
											<div class="modal-body">
												<p>ID - <?php echo $rows_resultado_p['id_criacao']; ?></p>
												<p>Nome - <?php echo $rows_resultado_p['nome']; ?></p>
												<p>Apelido - <?php echo $rows_resultado_p['apelido']; ?></p>
												<p>Gerente - <?php echo $rows_resultado_p['gerente']; ?></p>
												<p>Gerente II - <?php echo $rows_resultado_p['gerente_2']; ?></p>
												<p>Email Pessola - <?php echo $rows_resultado_p['email_p']; ?></p>
												<p>Status - <?php echo $rows_resultado_p['status']; ?></p>
												<p>Numero do Chamado - <?php echo $rows_resultado_p['numero_chamado']; ?></p>
												<p>OBS - <?php echo $rows_resultado_p['obs']; ?></p>
												<p>CPF - <?php echo $rows_resultado_p['cpf']; ?></p>
												<p>Responsavel - <?php echo $rows_resultado_p['responsavel']; ?></p>
												<p>Data Criação - <?php echo $rows_resultado_p['data_criacao']; ?></p>
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
				<form method="POST" action="update_criacao.php" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Nome:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Apelido:</label>
					<textarea name="apelido" type="text" class="form-control" id="apelido"></textarea>
				  </div>
					<div class="form-group">
					<label for="message-text" class="control-label">Gernte:</label>
					<textarea name="gerente" class="form-control" id="gerente"></textarea>
				  </div>
					<div class="form-group">
					<label for="message-text" class="control-label">Gernte II:</label>
					<textarea name="gerente_2" class="form-control" id="gerente_2"></textarea>
				  </div>
					<div class="form-group">
					<label for="message-text" class="control-label">Data Criação:</label>
					<textarea name="data_criacao" class="form-control" id="data_criacao"></textarea>
				  </div>
					<div class="form-group">
					<label for="message-text" class="control-label">Numero do Chamdo:</label>
					<textarea name="numero_chamado" class="form-control" id="numero_chamado"></textarea>
				  </div>
					<div class="form-group">
					<label for="status" class="control-label">Status:</label>
					<input name="status" class="form-control" id="status">
					<datalist id="status">
						<option value="Pendente">
						<option value="Ativo">
					</datalist>
				  </div>
					<div class="form-group">
					<label for="message-text" class="control-label">Email Pessola:</label>
					<textarea name="email_p" class="form-control" id="email_p"></textarea>
					</div>
					<div class="form-group">
					<label for="message-text" class="control-label">Responsavel:</label>
					<textarea name="responsavel" class="form-control" id="responsavel"></textarea>
					</div>
					<div class="form-group">
					<label for="message-text" class="control-label">CPF:</label>
					<textarea name="cpf" class="form-control" id="cpf"></textarea>
					</div>
					<div class="form-group">
					<label for="message-text" class="control-label">OBS:</label>
					<textarea name="obs" class="form-control" id="obs"></textarea>
					</div>
				<input name="id_criacao" type="hidden" class="form-control" id="id-criacao" value="">
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
		  var recipientnome = button.data('whatevernome')
		  var recipientapelido = button.data('whateverapelido')
			var recipientgerente = button.data('whatevergerente')
			var recipientgerente_2 = button.data('whatevergerente_2')
			var recipientdata_criacao = button.data('whateverdata_criacao')
			var recipientnumero_chamado = button.data('whatevernumero_chamado')
			var recipientstatus = button.data('whateverstatus')
			var recipientemail_p = button.data('whateveremail_p')
			var recipientobs = button.data('whateverobs')
			var recipientresponsavel = button.data('whateverresponsavel')
			var recipientcpf = button.data('whatevercpf')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('id_criacao ' + recipient)
		  modal.find('#id-criacao').val(recipient)
		  modal.find('#recipient-name').val(recipientnome)
		  modal.find('#apelido').val(recipientapelido)
			modal.find('#gerente').val(recipientgerente)
			modal.find('#gerente_2').val(recipientgerente_2)
			modal.find('#data_criacao').val(recipientdata_criacao)
			modal.find('#numero_chamado').val(recipientnumero_chamado)
			modal.find('#numero_chamado').val(recipientnumero_chamado)
			modal.find('#status').val(recipientstatus)
			modal.find('#email_p').val(recipientemail_p)
			modal.find('#responsavel').val(recipientresponsavel)
			modal.find('#obs').val(recipientobs)
			modal.find('#cpf').val(recipientcpf)
		})
	</script>
