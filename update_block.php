<?php
	include_once("conexao.php");
	$id_block = mysqli_real_escape_string($conn, $_POST['id_block']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$status_b = mysqli_real_escape_string($conn, $_POST['status_b']);
	$apelido = mysqli_real_escape_string($conn, $_POST['apelido']);
	$ativo = mysqli_real_escape_string($conn, $_POST['ativo']);
	$satatus_doc = mysqli_real_escape_string($conn, $_POST['satatus_doc']);
	$atraso_doc = mysqli_real_escape_string($conn, $_POST['atraso_doc']);
	$result_cursos = "UPDATE solictasao_block
	SET nome='$nome', status_b = '$status_b', apelido='$apelido', ativo = '$ativo', satatus_doc='$satatus_doc', atraso_doc = '$atraso_doc'
	WHERE id_block = '$id_block'";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_solict_block.php'>
					<script type=\"text/javascript\">
					alert(\"Alterado com Sucesso.\");
					</script>";
		}else{
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=update_info.php'>
					<script type=\"text/javascript\">
					alert(\"Erro de Alteração.\");
					</script>";
		}?>
	</body>
</html>
<?php $conn->close(); ?>
