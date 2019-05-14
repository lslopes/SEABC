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
			 </div><style>
	h3 {color: rgb(0, 0, 0); text-align: center; font-style: italic;font-family: "Times New Roman";}
</style>
 <div class="container theme-showcase" role="main">
		<div class="page-header">
			<h3>Dados dos Usuarios Desligamento</h3>
		</div>
	</div>
		<form method="POST" action="busca_desligamento.php">
			<input type="text" name="pesquisar" placeholder="APELIDO">
			<input list="pesquisar_s" name="pesquisar_s" placeholder="STATUS">
			<input list="responsavel" name="responsavel" placeholder="Responsavel">
			<datalist id="responsavel">
				<option value="Lucas Lopes">
				<option value="Waldimir Procino">
			</datalist>
			<datalist id="pesquisar_s">
				<option value="Pendente">
				<option value="Ativo">
			</datalist>
			<input type="radio" name="pesquisar" value="xxx"> APELIDO
			<input type="radio" name="pesquisar_s" value="xxx"> STATUS
			<input type="radio" name="responsavel" value="xxx"> RESPONSAVEL
			<input type="submit" value="Buscar" class="btn btn-primary btn-sm" >
			<?php
						include_once("conexao_busca.php");
						@	$pesquisar = $_POST ['pesquisar'];
						@	$pesquisar_s = $_POST ['pesquisar_s'];
						@$responsavel = $_POST ['responsavel'];
				@$result_pesquisa = "SELECT * FROM desligamento_user
				 WHERE apelido
				 LIKE '%$pesquisar%' OR status_1 LIKE '%$pesquisar_s%' OR responsavel LIKE '%$responsavel%'
				 ORDER BY id_desligamento DESC  LIMIT 1000 ";
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
								<th>Nome</th>
								<th>Apelido</th>
								<th>Gerente</th>
								<th>GerenteII </th>
								<th>Status</th>
								<th>Chamdo</th>
								<th>Data Desligamento</th>
								<th>Responsavel</th>
								<th>Acoes</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows_resultado_p = mysqli_fetch_assoc($resultado_pesqeuisa)){ ?>
								<tr>
									<td><?php echo $rows_resultado_p['nome']; ?></td>
									<td><?php echo $rows_resultado_p['apelido']; ?></td>
									<td><?php echo $rows_resultado_p['gerente']; ?></td>
									<td><?php echo $rows_resultado_p['gerente_2']; ?></td>
									<td><?php echo $rows_resultado_p['status_1']; ?></td>
									<td><?php echo $rows_resultado_p['numero_chamado']; ?></td>
									<td><?php echo $rows_resultado_p['data_desligamento']; ?></td>
									<td><?php echo $rows_resultado_p['responsavel']; ?></td>
									<td>
										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_resultado_p['id_desligamento']; ?>">Visualizar</button>
										<button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal"
										data-whatever="<?php echo $rows_resultado_p['id_desligamento']; ?>"
										data-whatevernome="<?php echo $rows_resultado_p['nome']; ?>"
										data-whateverapelido="<?php echo $rows_resultado_p['apelido'];?>"
										data-whatevergerente="<?php echo $rows_resultado_p['gerente']; ?>"
										data-whatevergerente2="<?php echo $rows_resultado_p['gerente_2']; ?>"
										data-whateverdata_desligamento="<?php echo $rows_resultado_p['data_desligamento']; ?>"
										data-whatevernumero_chamado="<?php echo $rows_resultado_p['numero_chamado']; ?>"
										data-whateverresponsavel="<?php echo $rows_resultado_p['responsavel']; ?>"
										data-whateverstatus_1="<?php echo $rows_resultado_p['status_1']; ?>"
										data-whateverobs="<?php echo $rows_resultado_p['obs']; ?>">Editar</button>
									</td>
								</tr>
								<!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $rows_resultado_p['id_desligamento']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_resultado_p['nome']; ?></h4>
											</div>
											<div class="modal-body">
												<p>ID - <?php echo $rows_resultado_p['id_desligamento']; ?></p>
												<p>Nome - <?php echo $rows_resultado_p['nome']; ?></p>
												<p>Apelido - <?php echo $rows_resultado_p['apelido']; ?></p>
												<p>Gerente - <?php echo $rows_resultado_p['gerente']; ?></p>
												<p>Gerente II - <?php echo $rows_resultado_p['gerente_2']; ?></p>
												<p>Status - <?php echo $rows_resultado_p['status_1']; ?></p>
												<p>Numero do Chamado - <?php echo $rows_resultado_p['numero_chamado']; ?></p>
												<p>Responsavel - <?php echo $rows_resultado_p['responsavel']; ?></p>
												<p>OBS - <?php echo $rows_resultado_p['obs']; ?></p>
												<p>Data Desligamento - <?php echo $rows_resultado_p['data_desligamento']; ?></p>
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
				<form method="POST" action="update_desligamento.php" enctype="multipart/form-data">
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
					<label for="message-text" class="control-label">Data Desligamento:</label>
					<textarea name="data_desligamento" class="form-control" id="data_desligamento"></textarea>
				  </div>
					<div class="form-group">
					<label for="message-text" class="control-label">Numero do Chamdo:</label>
					<textarea name="numero_chamado" class="form-control" id="numero_chamado"></textarea>
				  </div>
					<div class="form-group">
					<label for="status_1" class="control-label">Status:</label>
					<input name="status_1" class="form-control" id="status_1">
					<datalist id="status_1">
						<option value="Pendente">
						<option value="Ativo">
					</datalist>
				  </div>
					<div class="form-group">
					<label for="recipient-name" class="control-label">Responsavel:</label>
					<input name="responsavel" type="text" class="form-control" id="responsavel">
				  </div>
					<div class="form-group">
					<label for="message-text" class="control-label">OBS:</label>
					<textarea name="obs" class="form-control" id="obs"></textarea>
					</div>
				<input name="id_desligamento" type="hidden" class="form-control" id="id-criacao" value="">
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
			var recipientgerente2 = button.data('whatevergerente2')
			var recipientdata_desligamento = button.data('whateverdata_desligamento')
			var recipientnumero_chamado = button.data('whatevernumero_chamado')
			var recipientstatus_1 = button.data('whateverstatus_1')
			var recipientresponsavel = button.data('whateverresponsavel')
			var recipientobs = button.data('whateverobs')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('id_desligamento ' + recipient)
		  modal.find('#id-criacao').val(recipient)
		  modal.find('#recipient-name').val(recipientnome)
		  modal.find('#apelido').val(recipientapelido)
			modal.find('#gerente').val(recipientgerente)
			modal.find('#gerente2').val(recipientgerente2)
			modal.find('#data_desligamento').val(recipientdata_desligamento)
			modal.find('#numero_chamado').val(recipientnumero_chamado)
			modal.find('#status_1').val(recipientstatus_1)
			modal.find('#responsavel').val(recipientresponsavel)
			modal.find('#obs').val(recipientobs)
		})
	</script>
