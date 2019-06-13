<?php 

require_once "Query.php";

function atualizarUsuario()
{
	session_start();

	$id_usuario = (int)$_SESSION['login'];
	
	extract($_POST);
	
	$nome = strtolower($nome);
	$email = strtolower($email);
	$cemail = strtolower($cemail);
	
	$results = Query::select("usuarios", "nome, email, senha", "id_usuario = ?", [$id_usuario]);
	
	if ($results[0]['nome'] != $nome)
	{
		Query::update("usuarios", "nome", "$nome", "id_usuario = ?", [$id_usuario]);
	}
	
	if ($email != $cemail)
	{
		echo '<scrpit type="text/javascript">alert("Email deve ser igual ao email confirmado!")</script>';
		header('Location: ../settings.php');
	}
	else
	{
		if ($results[0]['email'] != $email)
		{
			Query::update("usuarios", "email", "$email", "id_usuario = ?", [$id_usuario]);
		}
	}
	
	if ($senha != $csenha)
	{
		echo '<script type="text/javascript">alert("Senha deve ser igual a confirmação!")</scrpit>';
		header('Location: ../settings.php');
	}
	else
	{
		Query::update("usuarios", "senha", "id_usuario = ?", [$senha, $id_usuario]);
	}
	
	return '../home.php';
}

