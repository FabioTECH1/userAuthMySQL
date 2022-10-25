<?php
require_once "../config.php";
session_start();
logout();

function logout()
{
    if (isset($_SESSION['full_names'])) {
        session_destroy();
    }
    header('Location:../forms/login.html'); //redirect
}

// echo "HANDLE THIS PAGE";