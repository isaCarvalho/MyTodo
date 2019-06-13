<?php

require_once "Query.php";

function erroLogin()
{
	extract($_POST);

	$results = Query::select("usuarios", "nome, email", "(nome = ? OR email = ?) AND senha = ?", [$user, $user, $senha]);

	if (!count($results))
	{
		echo json_encode([
			"erro" => true,
			"mensagem" => "Usuário ou senha incorretos!"
		]);
	}
}

