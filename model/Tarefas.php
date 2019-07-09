<?php

include_once "Query.php";

class Tarefas
{
    public static function getAll():array
    {
        $q = new Query();

        return $q->select("tarefas", "*", "true");
    }

    public static function getAllByName(string $nome):array
    {
        $q = new Query();

        $user = $q->select("usuarios", "id_usuario", "nome = ?", [$nome]);

        return $q->select("tarefas", "*", "id_usuario = ?", [$user[0]['id_usuario']]);
    }
}