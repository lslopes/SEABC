<?php include("cabecalho.php") ?>
<?php
$nome = $_GET["nome"];
$apelido = $_GET["apelido"];
$gerente = $_GET["gerente"];
$gerente_2 = $_GET["gerente_2"];
$email_p = $_GET["email_p"];
$data_alteraca = $_GET["data_alteraca"];
$status = $_GET["status"];
$numero_chamado = $_GET["numero_chamado"];
$obs = $_GET["obs"];
$responsavel = $_GET["responsavel"];
$alterado_de = $_GET["alterado_de"];
$alterado_para = $_GET["alterado_para"];
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO criacao_user (nome, apelido, gerente, gerente_2, email_p, data_alteraca, status, numero_chamado, obs, responsavel, alterado_de, alterado_para)
VALUES ('{$nome}', '{$apelido}', '{$gerente}', '{$gerente_2}', '{$email_p}', '{$data_alteraca}', '{$status}', '{$numero_chamado}', '{$obs}', '{$responsavel}', '{$alterado_de}', '{$alterado_para}')";
mysqli_query($conexao, $query);
mysqli_close($conexao);?>
<?php include("rodape.php") ?>
