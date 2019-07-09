<?php

require_once "Query.php";

function facebookLogin($nome, $id_facebook)
{
    $nome = urldecode($nome);
    echo $nome;
    echo $id_facebook;

    $results = Query::select("usuarios", "*", "nome = '$nome' and id_facebook = '$id_facebook'");
    
    if ($results == null)
    {
        Query::insert("usuarios", "nome, id_facebook", "'$nome', '$id_facebook'");
    }

    session_start();
    $_SESSION['login'] = $results[0]['id_usuario'];
    
    return '../home.php';
}