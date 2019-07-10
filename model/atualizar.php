<?php

include "Query.php";

function atualizar()
{
    session_start();

    $id_usuario = $_SESSION['login'];
    
    $results = Query::select("tarefas", "*", "id_usuario = ?", [$id_usuario]);
    
    foreach ($results as $result)
    {
        $tempo = Query::select("recorrencia", "intervalo", "id_recorrencia = ?", [$result['id_recorrencia']]);

        if (($result['data'] <= date('Y-m-d')) && ($result['fim'] <= date('H:i:s')))
        {
            if ($tempo[0]['intervalo'] != 0)
            {
                $data = new Date($result['data']);
                $novaData = $data->add($tempo[0]['intervalo'], $data);

                Query::update("tarefas", "data", "id_tarefa = ?", [$novaData->format('Y-m-d'), $result['id_tarefa']]);   
            }
            else
                Query::update("tarefas", "ativo", "id_tarefa = ?", [0, $result['id_tarefa']]);
            
        }
    }

    $results = Query::select("tarefas", "*", "id_usuario = ? and ativo = 1", [$id_usuario]);

    echo json_encode($results);
}

