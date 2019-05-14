<?php include("cabecalho.php") ?>
<?php
@session_start();
include('verifica_login.php');
?>
<h4 style=" text-align: center;">Painel de Acompanhamento de Pendencias</h4>
<!--PAINEL HOME CRIAÇÃO INCIO-->
<?php
include_once("conexao_busca.php");
@$pesquisar = $_POST ['pesquisar'];
@$pesquisar_s = $_POST ['pesquisar_s'];
@$responsavel = $_POST ['responsavel'];
@$result_pesquisa = "SELECT * FROM criacao_user  WHERE responsavel ='Lucas Lopes' AND status LIKE 'Pendente'  LIMIT 1000 ";
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
                    CRIAÇÃOS
    								<th>Nome</th>
    								<th>Apelido</th>
    								<th>Gerente</th>
    								<th>Email </th>
    								<th>Status</th>
    								<th>Chamdo</th>
    								<th>Responsavel</th>
    								<th>CPF</th>
    								<th>Acoes</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php while($rows_resultado_p = mysqli_fetch_assoc($resultado_pesqeuisa)){ ?>
    								<tr>
    									<td><?php echo $rows_resultado_p['nome']; ?></td>
    									<td><?php echo $rows_resultado_p['apelido']; ?></td>
    									<td><?php echo $rows_resultado_p['gerente']; ?></td>
    									<td><?php echo $rows_resultado_p['email_p']; ?></td>
    									<td><?php echo $rows_resultado_p['status']; ?></td>
    									<td><?php echo $rows_resultado_p['numero_chamado']; ?></td>
    									<td><?php echo $rows_resultado_p['responsavel']; ?></td>
    									<td><?php echo $rows_resultado_p['cpf']; ?></td>
    									<td>
    										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_resultado_p['id_criacao']; ?>">Visualizar</button>
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
<!--PAINEL HOME CRIAÇÃO FIM-->
<!--PAINEL HOME DESLIGAMENTO INCIO-->
          <?php
    				include_once("conexao_busca.php");
    				@	$pesquisar = $_POST ['pesquisar'];
    				@	$pesquisar_s = $_POST ['pesquisar_s'];
    				@$responsavel = $_POST ['responsavel'];
            @$result_pesquisa = "SELECT * FROM desligamento_user  WHERE responsavel ='Lucas Lopes' AND status_1 LIKE 'Pendente'  LIMIT 1000 ";
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
                    DESLIGAMENTOS
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
<!--PAINEL HOME DESLIGAMENTO FIM-->
<!--PAINEL HOME BLOQUEIOS INICIO-->
<?php
  include_once("conexao_busca.php");
  @$pesquisar = $_POST ['pesquisar'];
  @$pesquisar_s = $_POST ['pesquisar_s'];
  @$result_pesquisa = "SELECT * FROM bloqueio_user  WHERE responsavel ='Lucas Lopes' AND status_1 LIKE 'Pendente'  LIMIT 1000 ";
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
          BLOQUEIOS
          <th>Nome</th>
          <th>Apelido</th>
          <th>Gerente</th>
          <th>GerenteII </th>
          <th>Email </th>
          <th>Status</th>
          <th>Chamdo</th>
          <th>Responsavel</th>
          <th>Criação</th>
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
            <td><?php echo $rows_resultado_p['email_p']; ?></td>
            <td><?php echo $rows_resultado_p['status_1']; ?></td>
            <td><?php echo $rows_resultado_p['numero_chamado']; ?></td>
            <td><?php echo $rows_resultado_p['responsavel']; ?> </td>
            <td><?php echo $rows_resultado_p['data_bloqueio']; ?></td>
            <td>
              <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_resultado_p['id_bloqueio']; ?>">Visualizar</button>
            </td>
          </tr>
          <!-- Inicio Modal -->
          <div class="modal fade" id="myModal<?php echo $rows_resultado_p['id_bloqueio']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_resultado_p['nome']; ?></h4>
                </div>
                <div class="modal-body">
                  <p>ID - <?php echo $rows_resultado_p['id_bloqueio']; ?></p>
                  <p>Nome - <?php echo $rows_resultado_p['nome']; ?></p>
                  <p>Apelido - <?php echo $rows_resultado_p['apelido']; ?></p>
                  <p>Gerente - <?php echo $rows_resultado_p['gerente']; ?></p>
                  <p>Gerente II - <?php echo $rows_resultado_p['gerente_2']; ?></p>
                  <p>Email Pessola - <?php echo $rows_resultado_p['email_p']; ?></p>
                  <p>Status - <?php echo $rows_resultado_p['status']; ?></p>
                  <p>Numero do Chamado - <?php echo $rows_resultado_p['numero_chamado']; ?></p>
                  <p>OBS - <?php echo $rows_resultado_p['obs']; ?></p>
                  <p>Data Criação - <?php echo $rows_resultado_p['data_bloqueio']; ?></p>
                  <p>Responsavel - <?php echo $rows_resultado_p['responsavel']; ?></p>
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
<!--PAINEL HOME BLOQUEIOS FIM-->
<!--PAINEL HOME ALTERAÇOES INICIO-->
<?php
  include_once("conexao_busca.php");
  @$pesquisar = $_POST ['pesquisar'];
  @$pesquisar_s = $_POST ['pesquisar_s'];
  @$result_pesquisa = "SELECT * FROM alteracao_user  WHERE responsavel ='Lucas Lopes' AND status LIKE 'Pendente'  LIMIT 1000 ";
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
          ALTERAÇOES
          <th>Nome</th>
          <th>Apelido</th>
          <th>Alterado De</th>
          <th>Alterado Para</th>
          <th>Gerente</th>
          <th>GerenteII </th>
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
            <td><?php echo $rows_resultado_p['numero_chamado']; ?></td>
            <td><?php echo $rows_resultado_p['data_alteraca']; ?></td>
            <td><?php echo $rows_resultado_p['responsavel']; ?></td>
            <td><?php echo $rows_resultado_p['status']; ?></td>
            <td>
              <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_resultado_p['id_alteracao']; ?>">Visualizar</button>
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
<!--PAINEL HOME ALTERAÇOES FIM-->
<?php include("rodape.php") ?>