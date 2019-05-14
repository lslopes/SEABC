<?php include("cabecalho.php") ?>
<?php
  include_once("conexao_busca.php");
  $result_pesquisa = "DELETE FROM solictasao_block  ";
  $resultado_pesqeuisa = mysqli_query($conn, $result_pesquisa);
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
