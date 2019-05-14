<?php
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "UPDATE solictasao_block AS b
INNER JOIN bloqueio_user g ON b.apelido = g.apelido
SET b.status_b = g.status_1";
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
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_solict_block.php'>";
		}else{
			echo "	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=busca_solict_block.php'>";
		}?>
	</body>
</html>


