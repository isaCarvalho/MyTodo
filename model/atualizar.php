<?php

include "Query.php";

function atualizar()
{
    session_start();

    $id_usuario = $_SESSION['login'];
    
    $results = Query::select("tarefas", "*", "id_usuario = ?", [$id_usuario]);
    
    echo json_encode($results);
}

