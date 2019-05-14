<?php include("cabecalho.php") ?>
<?php
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO solictasao_block (nome, apelido, ativo, satatus_doc, atraso_doc)
SELECT nome, apelido, ativo, satatus_doc, atraso_doc
FROM usuarios_sigav
WHERE atraso_doc != ''
AND satatus_doc != 'Definitivo'
AND satatus_doc != 'TTI'
AND ativo = 'sim'
";
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