<?php include("cabecalho.php") ?>
<?php
$apelido = $_GET["apelido"];
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO info_dados (login, senha ) SELECT e_mail, cpf FROM usuarios_sigav  WHERE apelido = ('{$apelido}')";
mysqli_query($conexao, $query);
mysqli_close($conexao);
?>
<?php include("rodape.php") ?>
