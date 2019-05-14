<?php
	include_once("conexao.php");
	$id_criacao = mysqli_real_escape_string($conn, $_POST['id_criacao']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$apelido = mysqli_real_escape_string($conn, $_POST['apelido']);
	$gerente = mysqli_real_escape_string($conn, $_POST['gerente']);
	$gerente_2 = mysqli_real_escape_string($conn, $_POST['gerente_2']);
	$data_criacao = mysqli_real_escape_string($conn, $_POST['data_criacao']);
	$numero_chamado = mysqli_real_escape_string($conn, $_POST['numero_chamado']);
	$obs = mysqli_real_escape_string($conn, $_POST['obs']);
	$status = mysqli_real_escape_string($conn, $_POST['status']);
	$email_p = mysqli_real_escape_string($conn, $_POST['email_p']);
	$responsavel = mysqli_real_escape_string($conn, $_POST['responsavel']);
	$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
	$result_cursos = "UPDATE criacao_user SET nome='$nome', apelido = '$apelido', gerente='$gerente', gerente_2='$gerente_2', data_criacao='$data_criacao', numero_chamado='$numero_chamado', obs='$obs', status='$status', email_p='$email_p', responsavel='$responsavel', cpf='$cpf' WHERE id_criacao = '$id_criacao'";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_criacao.php'>
					<script type=\"text/javascript\">
						alert(\"Alterado com Sucesso.\");
					</script>
			";
		}else{
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_criacao.php'>
					<script type=\"text/javascript\">
						alert(\"Erro de Alteração.\");
					</script>";
		}?>
	</body>
</html>
<?php $conn->close(); ?>
