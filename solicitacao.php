<?php
include("cabecalho.php")
?>
<?php
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$apelido = $_GET ["apelido"];
$query = "INSERT INTO criacao_user (nome, apelido, gerente, gerente_2, email_p) SELECT nome, apelido, gerente, gerente_2, email_p FROM usuarios_sigav  WHERE = '{$apelido}' ");
mysqli_query($conexao, $query);
mysqli_close($conexao);
?>
<?php
include("rodape.php")
?>
