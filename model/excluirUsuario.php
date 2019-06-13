<?php

require_once "Query.php";

function excluirUsuario()
{
    session_start();

    $id_usuario = (int)$_SESSION['login'];
    
    Query::delete("usuarios", "id_usuario = ?", [$id_usuario]);
    
    unset($_SESSION['login']);
    
    session_destroy();
    
    return '../index.php';    
}
