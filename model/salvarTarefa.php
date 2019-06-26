<?php 

require_once "Query.php";

function salvarTarefa()
{
    extract($_POST);

    session_start();
    
    $id_usuario = $_SESSION['login'];
    
    Query::insert("tarefas", "nome, inicio, fim, data, id_estado, id_usuario, id_recorrencia", "'$nome', '$inicio', '$fim', '$data', $estado, $id_usuario, $repetir");
        
    return '../home.php';
}
