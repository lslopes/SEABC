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
			<h3>Dados dos Usuarios Alteraçoes</h3>
		</div>
	</div>
		<form method="POST" action="busca_alteracao.php">
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
				@$pesquisar = $_POST ['pesquisar'];
				@$pesquisar_s = $_POST ['pesquisar_s'];
				@$responsavel = $_POST ['responsavel'];
				@$result_pesquisa = "SELECT * FROM alteracao_user  
				WHERE apelido LIKE '%$pesquisar%' OR status LIKE '%$pesquisar_s%' OR responsavel LIKE '%$responsavel%' 
				ORDER BY id_alteracao DESC LIMIT 1000 ";
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
                <th>Alterado De</th>
                <th>Alterado Para</th>
								<th>Gerente</th>
								<th>GerenteII </th>
								<th>Email </th>
								<th>Email </th>
								<th>Chamdo</th>
								<th>Alterado Em</th>
                <th>Responsavel</th>
                <th>Status</th>
								<th>Acoes</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows_resultado_p = mysqli_fetch_assoc($resultado_pesqeuisa)){ ?>
								<tr>
									<td><?php echo $rows_resultado_p['nome']; ?></td>
									<td><?php echo $rows_resultado_p['apelido']; ?></td>
                  <td><?php echo $rows_resultado_p['alterado_de']; ?></td>
                  <td><?php echo $rows_resultado_p['alterado_para']; ?></td>
									<td><?php echo $rows_resultado_p['gerente']; ?></td>
									<td><?php echo $rows_resultado_p['gerente_2']; ?></td>
									<td><?php echo $rows_resultado_p['email_p']; ?></td>
									<td><?php echo $rows_resultado_p['email']; ?></td>
									<td><?php echo $rows_resultado_p['numero_chamado']; ?></td>
                  <td><?php echo $rows_resultado_p['data_alteraca']; ?></td>
                  <td><?php echo $rows_resultado_p['responsavel']; ?></td>
                  <td><?php echo $rows_resultado_p['status']; ?></td>
									<td>
										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_resultado_p['id_alteracao']; ?>">Visualizar</button>
										<button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal"
										data-whatever="<?php echo $rows_resultado_p['id_alteracao']; ?>"
										data-whatevernome="<?php echo $rows_resultado_p['nome']; ?>"
										data-whateverapelido="<?php echo $rows_resultado_p['apelido'];?>"
                    data-whateveralterado_de="<?php echo $rows_resultado_p['alterado_de'];?>"
                    data-whateveralterado_para="<?php echo $rows_resultado_p['alterado_para'];?>"
										data-whatevergerente="<?php echo $rows_resultado_p['gerente']; ?>"
										data-whatevergerente2="<?php echo $rows_resultado_p['gerente_2']; ?>"
										data-whateverdata_criacao="<?php echo $rows_resultado_p['data_alteraca']; ?>"
										data-whatevernumero_chamado="<?php echo $rows_resultado_p['numero_chamado']; ?>"
                    data-whateverresponsavel="<?php echo $rows_resultado_p['responsavel']; ?>"
										data-whateverstatus="<?php echo $rows_resultado_p['status']; ?>"
										data-whateveremail_p="<?php echo $rows_resultado_p['email_p']; ?>"
										data-whateveremail_p="<?php echo $rows_resultado_p['email']; ?>"
										data-whateverobs="<?php echo $rows_resultado_p['obs']; ?>">Editar</button>
									</td>
								</tr>
								<!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $rows_resultado_p['id_alteracao']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_resultado_p['nome']; ?></h4>
											</div>
											<div class="modal-body">
												<p>ID - <?php echo $rows_resultado_p['id_alteracao']; ?></p>
												<p>Nome - <?php echo $rows_resultado_p['nome']; ?></p>
												<p>Apelido - <?php echo $rows_resultado_p['apelido']; ?></p>
                        <p>Alterado De - <?php echo $rows_resultado_p['alterado_de']; ?></p>
                        <p>Alterado Para - <?php echo $rows_resultado_p['alterado_para']; ?></p>
												<p>Gerente - <?php echo $rows_resultado_p['gerente']; ?></p>
												<p>Gerente II - <?php echo $rows_resultado_p['gerente_2']; ?></p>
												<p>Email Pessola - <?php echo $rows_resultado_p['email_p']; ?></p>
												<p>Email  - <?php echo $rows_resultado_p['email_p']; ?></p>
												<p>Status - <?php echo $rows_resultado_p['status']; ?></p>
												<p>Numero do Chamado - <?php echo $rows_resultado_p['numero_chamado']; ?></p>
                        <p>Responsavel - <?php echo $rows_resultado_p['responsavel']; ?></p>
												<p>OBS - <?php echo $rows_resultado_p['obs']; ?></p>
												<p>Data Alteração - <?php echo $rows_resultado_p['data_alteraca']; ?></p>
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
				<form method="POST" action="update_alteracao.php" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Nome:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
          <div class="form-group">
					<label for="recipient-name" class="control-label">Apelido:</label>
					<textarea name="apelido" type="text" class="form-control" id="apelido"></textarea>
				  </div>
          <div class="form-group">
					<label for="recipient-name" class="control-label">Alterado De:</label>
					<textarea name="alterado_de" type="text" class="form-control" id="alterado_de"></textarea>
				  </div>
          <div class="form-group">
					<label for="recipient-name" class="control-label">Alterado Para:</label>
					<textarea name="alterado_para" type="text" class="form-control" id="alterado_para"></textarea>
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
					<label for="message-text" class="control-label">Data Alteração:</label>
					<textarea name="data_alteraca" class="form-control" id="data_alteraca"></textarea>
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
					<label for="message-text" class="control-label">Email :</label>
					<textarea name="email" class="form-control" id="email"></textarea>
					</div>
          <div class="form-group">
          <label for="message-text" class="control-label">Responsavel:</label>
          <textarea name="responsavel" class="form-control" id="responsavel"></textarea>
          </div>
					<div class="form-group">
					<label for="message-text" class="control-label">OBS:</label>
					<textarea name="obs" class="form-control" id="obs"></textarea>
					</div>
				<input name="id_alteracao" type="hidden" class="form-control" id="id_alteracao" value="">
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
      var recipientalterado_de = button.data('whateveralterado_de')
      var recipientalterado_para = button.data('whateveralterado_para')
			var recipientgerente = button.data('whatevergerente')
			var recipientgerente_2 = button.data('whatevergerente_2')
			var recipientdata_alteraca = button.data('whateverdata_alteraca')
			var recipientnumero_chamado = button.data('whatevernumero_chamado')
			var recipientresponsavel = button.data('whateverresponsavel')
      var recipientstatus = button.data('whateverstatus')
			var recipientemail_p = button.data('whateveremail_p')
			var recipientemail = button.data('whateveremail')
			var recipientobs = button.data('whateverobs')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('id_alteracao ' + recipient)
		  modal.find('#id_alteracao').val(recipient)
		  modal.find('#recipient-name').val(recipientnome)
		  modal.find('#apelido').val(recipientapelido)
      modal.find('#alterado_de').val(recipientalterado_de)
      modal.find('#alterado_para').val(recipientalterado_para)
			modal.find('#gerente').val(recipientgerente)
			modal.find('#gerente_2').val(recipientgerente_2)
			modal.find('#data_alteraca').val(recipientdata_alteraca)
			modal.find('#numero_chamado').val(recipientnumero_chamado)
      modal.find('#responsavel').val(recipientresponsavel)
			modal.find('#status').val(recipientstatus)
			modal.find('#email_p').val(recipientemail_p)
			modal.find('#email').val(recipientemail)
			modal.find('#obs').val(recipientobs)
		})
	</script>
