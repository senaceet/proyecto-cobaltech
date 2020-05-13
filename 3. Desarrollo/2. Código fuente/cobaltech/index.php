<!--
    PROYECTO COBALTECH
    Angie Lorena Clavijo Garcia
    Christian Alfredo León Rodriguez
    Leidy Patricia Quevedo Barreto
    ADSI 1786182
-->

<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';

require_once("controllers/cobaltechController.php");
$controller = "{$controller}Controller";

call_user_func([new $controller(), $method]);