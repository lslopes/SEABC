<?php
	include_once("conexao.php");
	$id_desligamento = mysqli_real_escape_string($conn, $_POST['id_desligamento']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$apelido = mysqli_real_escape_string($conn, $_POST['apelido']);
	$gerente = mysqli_real_escape_string($conn, $_POST['gerente']);
	$gerente_2 = mysqli_real_escape_string($conn, $_POST['gerente_2']);
	$data_desligamentoo = mysqli_real_escape_string($conn, $_POST['data_desligamento']);
	$numero_chamado = mysqli_real_escape_string($conn, $_POST['numero_chamado']);
	$obs = mysqli_real_escape_string($conn, $_POST['obs']);
	$responsavel = mysqli_real_escape_string($conn, $_POST['responsavel']);
	$status_1 = mysqli_real_escape_string($conn, $_POST['status_1']);
	$result_cursos = "UPDATE desligamento_user SET nome='$nome', responsavel='$responsavel', apelido = '$apelido', gerente='$gerente', gerente_2='$gerente_2', data_desligamento='$data_desligamento', numero_chamado='$numero_chamado', obs='$obs', status_1='$status_1' WHERE id_desligamento = '$id_desligamento'";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_desligamento.php'>";
		}else{
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_desligamento.php'>";
		}?>
	</body>
</html>
