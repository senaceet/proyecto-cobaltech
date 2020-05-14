<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cobaltech</title>
        <link rel="stylesheet" href="assets/css/estilo.css">
    </head>
    <body>


<!--contenedor GRID-->
<div class="contenedor">
    <header>
    <!--logo cobaltech link home-->
        <a href="index.php">
            <img class="logo" src="assets/img/icons/logo.png" alt="Logo Cobaltech">
        </a>
        <!--formulario busqueda-->
        <form class="search" action="." method="get">
            <!--campo y boton de busqueda-->
            <input id="search" type="search" placeholder="Busqueda" autofocus>
            <!--boton busqueda-->
            <input type="button" value="Buscar">
        </form>
        <div>
            <!--boton/logo login-->
            <a href="login.php">
                <input class="botonh" type="image" src="assets/img/icons/login.png" value="Ingresar" alt="Ingresar">
            </a>
            <!--boton/logo carrito de compras-->
            <a href="carrito.php">
                <input class="botonh" type="image" src="assets/img/icons/carrito.png" value="Carrito" alt="Carrito">
            </a>
        </div>
    </header>