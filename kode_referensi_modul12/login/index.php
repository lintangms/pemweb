<?php
session_start();
include_once("c_auth.php");
include_once("c_programKerja.php");

$hal = isset($_GET['hal']) ? $_GET['hal'] : 'proker';

if ($hal == 'login') {
    $auth = new c_auth();
    $auth->login();
} elseif ($hal == 'logout') {
    $auth = new c_auth();
    $auth->logout();
} else {
    $controller = new c_programKerja();
    $controller->invoke();
}
