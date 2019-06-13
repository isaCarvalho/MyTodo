<?php 

function logout()
{
    session_start();

    unset($_SESSION['login']);
    
    session_destroy();
    
    return '../index.php';
}