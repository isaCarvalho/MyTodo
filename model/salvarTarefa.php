<?php 

require_once "Query.php";

function salvarTarefa()
{
    extract($_POST);

    session_start();
    
    $id_usuario = $_SESSION['login'];
    
    Query::insert('tarefas', 'nome, inicio, fim, data, id_estado, id_usuario', '?, ?, ?, ?, ?, ?', [$nome, $inicio, $fim, $data, $estado, $id_usuario]);
    
    echo "CHEGUEI AQUI";
    
    return '../home.php';
}
