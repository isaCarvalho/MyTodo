<?php

require_once "Query.php";

function salvarUsuario()
{
	extract($_POST);

	$nome = strtolower($nome);
	$email = strtolower($email);
	
	$results = Query::select('usuarios', 'nome, email, senha, id_facebook', "nome = ? OR email = ?", [$nome, $email]);
	
	if (count($results))
	{
		echo '<script type="text/javascript">alert("Usuário já cadastrado!")</script>';
		
	}
	else
	{
		if ($id_facebook == null)
		{
			Query::insert('usuarios', 'nome, email, senha', "?, ?, ?", [$nome, $email, $senha]);
		}
		else
		{
			Query::insert('usuarios', 'nome, id_facebook', "?, ?", [$nome, $id_facebook]);
		}
	
		echo '<script type="text/javascript">alert("Usuário cadastrado com sucesso!")</script>';
	}
	
	return '../index.php';
}
