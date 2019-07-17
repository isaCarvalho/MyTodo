<?php 

require_once "Query.php";

function login()
{
	extract($_POST);

	$user = strtolower($user);

	$results = Query::select("usuarios", "*", "(nome = ? OR email = ?) AND senha = ?", [$user, $user, md5($senha)]);

	if (count($results))
	{
		session_start();
		$_SESSION['login'] = $results[0]['id_usuario'];

	}
}

