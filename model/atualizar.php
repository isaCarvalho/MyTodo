<?php

include "Query.php";

function atualizar()
{
    session_start();

    $id_usuario = $_SESSION['login'];
    
    $results = Query::select("tarefas", "*", "id_usuario = ?", [$id_usuario]);
    
    // LEMBRAR CONSERTAR O INTERVALO
    foreach ($results as $result)
    {
        $tempo = Query::select("recorrencia", "intervalo", "id_recorrencia = ?", [$result['id_recorrencia']]);

        if ($result['data'] == date('Y-m-d'))
        {
            Query::update("tarefas", "data", "id_tarefa = ?", [date('Y-m-d', strtotime('+'.$tempo['intervalo'].'days', $result['data'])), $result['id_tarefa']]);
        }
    }

    echo json_encode($results);
}

