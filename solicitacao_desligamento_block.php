<?php include("cabecalho.php") ?>
<?php
$id_block = $_GET["id_block"];
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO bloqueio_user (nome, apelido, status_1)
SELECT nome, apelido, ativo 
FROM solictasao_block
WHERE id_block = ('{$id_block}')";
mysqli_query($conexao, $query);
mysqli_close($conexao);
?>
<?php include("rodape.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_solict_block.php'>";
		}else{
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_solict_block.php'>";
		}?>
	</body>
</html>