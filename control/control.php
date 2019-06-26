<?php

extract($_GET);

switch ($action)
{

    case 'erroLogin':
        include "../model/erroLogin.php";

        erroLogin();
        break;

    case 'login':
        include "../model/login.php";
        
        login();
        break;

    case 'preencherTarefas':
        include "../model/atualizar.php";

        atualizar();
        break;

    case 'criarConta':
        include '../model/salvarUsuario.php';

        $header = salvarUsuario();        
        break;

    case 'novaTarefa':
        include '../model/salvarTarefa.php';

        $header = salvarTarefa();
        break;

    case 'atualizarUsuario':
        include '../model/atualizarUsuario';

        $header = atualizarUsuario();
        break;

    case 'logout':
        include '../model/logout.php';

        $header = logout();
        break;

    case 'excluirUsuario':
        include '../model/excluirUsuario.php';

        $header = excluirUsuario();
        break;
    
}

//header('Location: '.$header);