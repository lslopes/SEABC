<!DOCTYPE html>
<html>
	<head>
<!--comfiguração e Fromatação-->
<?php
session_start();
include('verifica_login.php');
?>
		
			<title>SEABC</title>
			<meta name="description" content="bootstrap 3">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
			<div class="home_div">
			<img src="home.png">
			</div>
<!--comfiguração e Fromatação-->
	</head>
	<body>
<!--menu da home-->
<div class="container">
	<div class="col-md-10">
		<ul class="nav nav-tabs nav-pills nav-justified">
			<li role="presentation" class="dropdown active">
				<a class="dropdown-toggle" data-toggle="dropdown" href="home.php">
				 	Home <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
				 	<li><a href="home.php">Painel</a></li>
					<li><a href="painel_lslopes.php">Lucas Lopes</a></li>
					<li><a href="painel_wporcino.php">Wladimir Procino</a></li>
				</ul>
			</li>
			<li role="presentation" class="dropdown active">
				<a class="dropdown-toggle" data-toggle="dropdown" href="home.php">
					Registro <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="formulario_criacao.php">Resgistar Criação</a></li>
					<li><a href="formulario_desligamento.php">Regsitar Desligamento</a></li>
					<li><a href="formulario_bloqueios.php">Regsitar Bloqueio</a></li>
					<li><a href="formulario_alteracoes.php">Regsitar Alteraçoes</a></li>

				</ul>
			</li>
			<li role="presentation" class="dropdown active">
				<a class="dropdown-toggle" data-toggle="dropdown" href="home.php">
					Consulta <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="busca_criacao.php">Pendecias Criação</a></li>
					<li><a href="busca_desligamento.php">Pendencias Desligamento</a></li>
					<li><a href="busca_bloqueios.php">Pendecias Bloqueios</a></li>
					<li><a href="busca_alteracao.php">Pendencias Alteração </a></li>
					<li><a href="busca_sigav.php">Usuarios Sigav</a></li>
				</ul>
			</li>
			<li>
				<a href="infomativo.php">Informativo</a>
			</li>
			<li>
					<a href="logout.php">Logoff</a>
			</li>
			</ul>
				</div>
			 </div>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
