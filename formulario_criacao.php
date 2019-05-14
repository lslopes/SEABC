<?php
session_start();
include('verifica_login.php');
?>
<?php @include("cabecalho.php") ?>
  <div class="container theme-showcase" role="main">
    <div class="page-header">
      <h3>Registro Criação</h3>
    </div>
  </div>
<form action="insert_criacao.php"> <!--Formulario de Criação-->
        <div class="col-md-2">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required="required" placeholder="Nome"><br><br>
            </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Apelido</label>
            <input type="text" name="apelido" class="form-control" required="required" placeholder="Apelido"><br><br>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Gerente</label>
            <input type="text" name="gerente" class="form-control"  placeholder="Gerente"><br><br>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Gerente II</label>
            <input type="text" name="gerente2" class="form-control"  placeholder="Gerente II"><br><br>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>E-mail Pessoal</label>
            <input type="com" name="email_p" class="form-control"  placeholder="E-mail Pessoal"><br><br>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Data de Criação</label>
            <input type="date" name="datacriacao" class="form-control"  placeholder="Data de Desligamento"><br><br>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Staus</label>
            <input type="text" name="status" class="form-control"  placeholder="Status"><br><br>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Numero do Chamdo</label>
            <input type="text" name="nchamdo" class="form-control"  placeholder="Numero do Chamado"><br><br>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Obiservação</label>
            <input type="com" name="obs" class="form-control"  placeholder="Obiservação"><br><br>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Responsavel</label>
            <input type="com" name="responsavel" class="form-control"  placeholder="Responsavel"><br><br>
          </div>
        </div>
        <br>
        <input type="submit" class="btn btn-md btn-success" value="Cadastrar">
      </form>
      <div class="container theme-showcase" role="main">
        <div class="page-header">
        </div>
      </div>
   		<form method="POST" action="formulario_criacao.php">
   			<br>
   		 	<input type="text" name="pesquisar" placeholder="PESQUISAR APELIDO">
   			<input type="submit" value="Buscar" class="btn btn-primary btn-sm" >
         <?php
           include_once("conexao_busca.php");
           @$pesquisar = $_POST ['pesquisar'];
           @$result_registros = "SELECT * FROM usuarios_sigav WHERE apelido LIKE '%$pesquisar%' LIMIT 1000 ";
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
   								<th>Ativo</th>
                  <th>Apelido do Usuario</th>
                  <th>Gerar Pendencias</th>
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
   									<td><?php echo $rows_apelido['ativo']; ?></td>
                    <td><form action="solicitacao_criacao.php" >
                      <input type="text" name="apelido"class="col-md-9  "><br><br>
                      <td>  <input type="submit" class="btn btn-md btn-success" value="Gerar Pendencias"></td>
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
<?php include("rodape.php") ?>
