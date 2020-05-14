<!--
    PROYECTO COBALTECH
    Angie Lorena Clavijo Garcia
    Christian Alfredo León Rodriguez
    Leidy Patricia Quevedo Barreto
    ADSI 1786182
-->

<?php

$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'cobaltech';
$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';

require_once("controllers/cobaltechController.php");
$controller=$controller.'Controller';

call_user_func(array($controller,$method));

?>