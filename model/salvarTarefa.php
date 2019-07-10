<?php 

require_once "Query.php";

function salvarTarefa()
{
    extract($_POST);

    session_start();
    $id_usuario = $_SESSION['login'];
   
    Query::insert("tarefas", "nome, inicio, fim, data, id_usuario, id_recorrencia, ativo", "'$nome', '$inicio', '$fim', '$data', $id_usuario, $repetir, 1");
        
    return '../home.php';
}
