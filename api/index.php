<?php

include_once "../model/Tarefas.php";

$tarefas = $_GET['tarefas'];

if ($tarefas == '*')
    $results = Tarefas::getAll();
else
    $results = Tarefas::getAllByName($tarefas);

echo json_encode($results);    


