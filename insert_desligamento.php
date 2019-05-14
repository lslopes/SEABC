<?php include("cabecalho.php") ?>
<?php
$nome = $_GET["nome"];
$apelido = $_GET["apelido"];
$gerente = $_GET["gerente"];
$gerente_2 = $_GET["gerente_2"];
$data_desligamento = $_GET["data_desligamento"];
$status = $_GET["status"];
$numero_chamado = $_GET["numero_chamado"];
$obs = $_GET["obs"];
$responsavel = $_GET["responsavel"];
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO desligamento_user (nome, apelido, gerente, gerente_2, data_desligamento, status, numero_chamado, obs)
VALUES ('{$nome}', '{$apelido}', '{$gerente}', '{$gerente_2}', '{$data_desligamento}', '{$status}', '{$numero_chamado}', '{$obs}')";
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
