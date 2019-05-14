<?php
	include_once("conexao.php");
	$id_bloqueio = mysqli_real_escape_string($conn, $_POST['id_bloqueio']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$apelido = mysqli_real_escape_string($conn, $_POST['apelido']);
	$gerente = mysqli_real_escape_string($conn, $_POST['gerente']);
	$gerente_2 = mysqli_real_escape_string($conn, $_POST['gerente_2']);
	$data_criacao = mysqli_real_escape_string($conn, $_POST['data_bloqueio']);
	$numero_chamado = mysqli_real_escape_string($conn, $_POST['numero_chamado']);
	$obs = mysqli_real_escape_string($conn, $_POST['obs']);
	$status_1 = mysqli_real_escape_string($conn, $_POST['status_1']);
	$responsavel = mysqli_real_escape_string($conn, $_POST['responsavel']);
	$email_p = mysqli_real_escape_string($conn, $_POST['email_p']);
	$result_cursos = "UPDATE bloqueio_user SET nome='$nome', apelido = '$apelido', gerente='$gerente', gerente_2='$gerente_2', data_bloqueio='$data_bloqueio', numero_chamado='$numero_chamado', obs='$obs', status_1='$status_1', email_p='$email_p', responsavel ='$responsavel' WHERE id_bloqueio = '$id_bloqueio'";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_bloqueios.php'>
					<script type=\"text/javascript\">
					alert(\"Alterado com Sucesso.\");
					</script>";
		}else{
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_bloqueios.php'>
					<script type=\"text/javascript\">
					alert(\"Erro de Alteração.\");
					</script>";
		}?>
	</body>
</html>
<?php $conn->close(); ?>
