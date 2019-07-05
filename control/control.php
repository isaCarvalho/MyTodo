<?php

date_default_timezone_set('America/Sao_Paulo');

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

    case 'excluirTarefa':
        include '../model/excluirTarefa.php';

        $header = excluirTarefa($nomeTarefa);
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
    
    case 'atualizarNomeTarefa':
        include '../model/atualizarTarefa.php';

        atualizarNomeTarefa($nomeAntigo, $nomeNovo);
        break;
}

header('Location: '.$header);