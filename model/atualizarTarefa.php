<?php

require_once "Query.php";

function atualizarNomeTarefa($nomeAntigo, $nomeNovo)
{
    session_start();

    $id_usuario = (int) $_SESSION['login'];

    Query::update("tarefas", "nome = ?", "nome = ? AND id_usuario = ?", [$nomeAntigo, $nomeNovo, $id_usuario]);
}
