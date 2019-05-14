<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<html>
  <head>
  	<meta charset="utf-8"/>
  	<title>SEABC</title>
  	<link rel="stylesheet" type="text/css" href="Formatacao_login.css">
  </head>
<body>
  <div id="login2">
    <img src="logintela2.png">
  </div>
    <section class="hero is-success is-fullheight">
      <div id="formelogin">
      		<div align="center">
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="btn btn-danger">                      
                      ERRO: Usuário ou senha inválidos.
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <center>
                    Iniciar Sessão.<br>
                      <table border="0" bordercolor="#008080" cellpadding="3" cellspacing="0" width="225">
                        <tbody>
                          <tr>
                        <form action="login.php" method="POST">
                              <tr>
                                <td align="center"><font face="Verdana, Verdana, Times, serif" size="2pt"><strong>&nbsp;&nbsp;&nbsp; Login</strong></font></td>
                                <td align="center">  <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus=""></td>
                              </tr>
                                <tr>
                                  <td align="center"><font face="Verdana, Verdana, Times, serif" size="2pt"><strong> &nbsp;&nbsp;&nbsp;Senha</strong></font></td>
                                  <td align="center">  <input name="senha" class="input is-large" type="password" placeholder="Sua senha"></td>
                                  <td align="center" colspan="2"><input onclick="Login()" type="submit" class="btn btn-sm btn-info" value="Entrar"></td>
                                </tr>
                        </form>
                      </tbody>
                    </table>
                    </center>
                </div>
            </div>
    </section>
      	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<!--<center>
      Iniciar Sessão.<br>
      <table border="0" bordercolor="#008080" cellpadding="3" cellspacing="0" width="225">
        <tbody>
          <tr>
            <td align="center"><font face="Verdana, Verdana, Times, serif" size="2pt"><strong>Login</strong></font></td>
            <td align="center"><input name="username" size="20" type="text"></td>
          </tr>
          <tr>
            <td align="center"><font face="Verdana, Verdana, Times, serif" size="2pt"><strong>Senha:</strong></font></td>
            <td align="center"><input name="password" size="20" type="password"></td>
            <td align="center" colspan="2"><input onclick="Login()" type="button" class="btn btn-sm btn-info" value="Entrar"></td>
          </tr>
        </tbody>
      </table>
    </center>











</body>

</html>
