<?php

include_once "../model/Tarefas.php";

function api($tarefas)
{
    $tarefas = urldecode($tarefas);

    if ($tarefas == '*')
        $results = Tarefas::getAll();
    else
        $results = Tarefas::getAllByName($tarefas);

    echo json_encode($results);  
}
  


