<?php include("cabecalho.php") ?>
<?php
  include_once("conexao_busca.php");
  @	$pesquisar = $_POST ['pesquisar'];
  @	$pesquisar_s = $_POST ['pesquisar_s'];
  @$responsavel = $_POST ['responsavel'];
  $result_pesquisa = "DELETE FROM info_dados ";
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
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=infomativo.php'>";
		}else{
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=infomativo.php'>";
		}?>
	</body>
</html>