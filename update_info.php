<?php include("cabecalho.php") ?>
<?php
	include_once("conexao.php");
	$info_id = mysqli_real_escape_string($conn, $_POST['info_id']);
	$login = mysqli_real_escape_string($conn, $_POST['login']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);
	$result_cursos = "UPDATE info_dados SET login='$login', senha = '$senha'  WHERE info_id = '$info_id'";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
