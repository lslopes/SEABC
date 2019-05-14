<?php include("cabecalho.php") ?>
<?php
$nome = $_GET["nome"];
$apelido = $_GET["apelido"];
$gerente = $_GET["gerente"];
$gerente2 = $_GET["gerente2"];
$email_p = $_GET["email_p"];
$databloqueio = $_GET["databloqueio"];
$status = $_GET["status"];
$nchamdo = $_GET["nchamdo"];
$obs = $_GET["obs"];
$responsavel = $_GET["responsavel"];
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO bloqueio_user (nome, apelido, gerente, gerente_2, email_p, data_bloqueio, status, numero_chamado, obs, responsavel) VALUES ('{$nome}', '{$apelido}', '{$gerente}', '{$gerente2}', '{$email_p}', '{$databloqueio}', '{$status}', '{$nchamdo}', '{$obs}', '{$responsavel}')";
mysqli_query($conexao, $query);
mysqli_close($conexao);
?>
<?php include("rodape.php") ?>
