<?php

include_once "Query.php";

function excluirTarefa($nomeTarefa)
{
    session_start();

    $id_usuario = $_SESSION['login'];

    Query::delete("tarefas", "id_usuario = ? AND nome = ?", [$id_usuario, $nomeTarefa]);
}