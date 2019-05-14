<?php
	include_once("conexao.php");
	$id_alteracao = mysqli_real_escape_string($conn, $_POST['id_alteracao']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$apelido = mysqli_real_escape_string($conn, $_POST['apelido']);
	$alterado_de = mysqli_real_escape_string($conn, $_POST['alterado_de']);
	$alterado_para = mysqli_real_escape_string($conn, $_POST['alterado_para']);
	$gerente = mysqli_real_escape_string($conn, $_POST['gerente']);
	$gerente_2 = mysqli_real_escape_string($conn, $_POST['gerente_2']);
	$data_alteraca = mysqli_real_escape_string($conn, $_POST['data_alteraca']);
	$numero_chamado = mysqli_real_escape_string($conn, $_POST['numero_chamado']);
	$obs = mysqli_real_escape_string($conn, $_POST['obs']);
	$status = mysqli_real_escape_string($conn, $_POST['status']);
	$email_p = mysqli_real_escape_string($conn, $_POST['email_p']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$responsavel = mysqli_real_escape_string($conn, $_POST['responsavel']);
	$result_cursos = "UPDATE alteracao_user SET nome='$nome', apelido='$apelido', alterado_de='$alterado_de', alterado_para='$alterado_para', gerente='$gerente', gerente_2='$gerente_2', data_alteraca='$data_alteraca', numero_chamado='$numero_chamado', obs='$obs', status='$status', email_p='$email_p', email='$email', responsavel='$responsavel' WHERE id_alteracao='$id_alteracao'";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo 	"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_alteracao.php'>
					<script type=\"text/javascript\">
					alert(\"Alterado com Sucesso.\");
					</script>";
		}else{
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_alteracao.php'>
					<script type=\"text/javascript\">
					alert(\"Erro de Alteração.\");
					</script>";
		}?>
	</body>
</html>
<?php $conn->close(); ?>