<?php
  include_once("conexao_busca.php");
  $pesquisar = $_POST ['pesquisar'];
  $pesquisar_s = $_POST ['pesquisar_s'];
  $result_registros_s = "SELECT * FROM bloqueio_user WHERE apelido LIKE '%$pesquisar%' OR status LIKE '%$pesquisar_s%' LIMIT 1000 ";
  $resultado_apelido_s = mysqli_query($conn, $result_registros_s);
  ?>
