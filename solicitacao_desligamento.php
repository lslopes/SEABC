<?php include("cabecalho.php") ?>
<?php
$apelido = $_GET["apelido"];
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO desligamento_user (nome, apelido, gerente, gerente_2, data_desligamento, e_mail )
SELECT nome, apelido, gerente, gerente_2, data_desligamento, e_mail
FROM usuarios_sigav
WHERE apelido = ('{$apelido}')";
mysqli_query($conexao, $query);
mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=formulario_desligamento.php'>";
		}else{
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=formulario_desligamento.php'>";
		}?>
	</body>
</html>
