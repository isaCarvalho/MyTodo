<?php

require_once "Query.php";

function facebookLogin($nome, $id_facebook)
{
    $results = Query::select("usuarios", "*", "nome = '?' and id_facebook = '?'", [$nome, $id_facebook]);

    if (count($results))
    {
        session_start();
        $_SESSION['login'] = $results[0]['id_usuario'];
    }
    else
    {
        Query::insert("usuarios", "nome, id_facebook", "'?', '?'", [$nome, $id_facebook]);
    }
}