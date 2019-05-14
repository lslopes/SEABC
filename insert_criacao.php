<?php include("cabecalho.php") ?>
<?php
$nome = $_GET["nome"];
$apelido = $_GET["apelido"];
$gerente = $_GET["gerente"];
$gerente2 = $_GET["gerente2"];
$email_p = $_GET["email_p"];
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO criacao_user (nome, apelido, gerente, gerente_2, email_p ) VALUES ('{$nome}', '{$apelido}', '{$gerente}', '{$gerente2}', '{$email_p}')";
mysqli_query($conexao, $query);
mysqli_close($conexao);?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=formulario_criacao.php'>";
		}else{
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=formulario_criacao.php'>";
		}?>
	</body>
</html>
