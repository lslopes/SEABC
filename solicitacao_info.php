<?php include("cabecalho.php") ?>
<?php
$apelido = $_GET["apelido"];
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO info_dados (login, senha, email_p, gerente ) 
SELECT e_mail, cpf, email_p, gerente  FROM usuarios_sigav  WHERE apelido = ('{$apelido}') AND ATIVO = 'SIM'";
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
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=infomativo.php'>";
		}else{
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=infomativo.php'>";
		}?>
	</body>
</html>