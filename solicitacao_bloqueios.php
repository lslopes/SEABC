<?php include("cabecalho.php") ?>
<?php
$apelido = $_GET["apelido"];
$conexao = mysqli_connect('localhost', 'root', 'b@nco@@p', 'cr_em');
$query = "INSERT INTO bloqueio_user (nome, apelido, gerente, gerente_2, email_p, CPF )
 SELECT nome, apelido, gerente, gerente_2, email_p GETDATE , CPF
 FROM usuarios_sigav
 WHERE apelido = ('{$apelido}')";
mysqli_query($conexao, $query);
mysqli_close($conexao);
?>
<?php include("rodape.php") ?>
