<!--
    PROYECTO COBALTECH
    Angie Lorena Clavijo Garcia
    Christian Alfredo León Rodriguez
    Leidy Patricia Quevedo Barreto
    ADSI 1786182
-->

<?php

/** 
 * Todos lo que este en la carpeta modelos
 * se debe requerir aqui
*/
require_once('models/database/DB.php');
require_once('models/Ciudad.php');
require_once('models/Factura.php');
require_once('models/Garantia.php');
require_once('models/Marca.php');
require_once('models/Pago.php');
require_once('models/Producto.php');
require_once('models/Proveedor.php');
require_once('models/Rol.php');
require_once('models/TarjetaCredito.php');
require_once('models/TarjetaDebito.php');
require_once('models/Categoria.php');
require_once('models/Tipodoc.php');
require_once('models/Usuario.php');
require_once('models/Envio.php');


$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'cobaltech';
$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';

require_once("controllers/".$controller.'Controller.php');
$controller = $controller.'Controller';

call_user_func(array($controller,$method));

?>