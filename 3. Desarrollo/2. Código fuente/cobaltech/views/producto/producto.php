<!--
    PROYECTO COBALTECH
    Angie Lorena Clavijo Garcia
    Christian Alfredo León Rodriguez
    Leidy Patricia Quevedo Barreto
    ADSI 1786182
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cobaltech</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <!--contenedor GRID-->
        <div class="contenedor">
            <header>
                <!--logo cobaltech link home-->
                <a href="index.php">
                    <img class="logo" src="img/logo.png" alt="Logo Cobaltech">
                </a><!--cierre logo cobaltech link home-->
                <!--formulario busqueda-->
                <form class="search" action="." method="post">
                    <!--campo y boton de busqueda-->
                    <input id="search" type="search" placeholder="Busqueda" autofocus>
                    <!--boton busqueda-->
                    <input type="button" value="Buscar">
                </form><!--cierre formulario busqueda-->
                <div>
                    <!--boton/logo login-->
                    <a href="login.php">
                        <input class="botonh" type="image" src="img/login2.png" value="Ingresar" alt="Ingresar">
                    </a>
                    <!--boton/logo carrito de compras-->
                    <a href="carrito.php">
                        <input class="botonh" type="image" src="img/carrito2.png" value="Carrito" alt="Carrito">
                    </a>
                </div>
            </header>
            <!--menú de navegación-->
            <nav class="menu">
                <ul>
                    <li>Accesorios
                        <ul>
                            <li><a href="producto.php">Adaptadores y cables</a></li>
                            <li><a href="producto.php">Cámaras</a></li>
                            <li><a href="producto.php">Tiras LED</a></li>
                         </ul>
                    </li>
                    <li>Almacenamiento
                        <ul>
                            <li><a href="producto.php">Discos duros HDD</a></li>
                            <li><a href="producto.php">Unidades de estado solido SSD</a></li>
                        </ul>
                    </li>
                    <li>Componentes
                        <ul>
                            <li><a href="producto.php">Chasis/cajas/torres</a></li>
                            <li><a href="producto.php">Enfriadores CPU Cooler</a></li>
                            <li><a href="producto.php">Fuentes de poder PSU</a></li>
                            <li><a href="producto.php">Memorias RAM</a></li>
                            <li><a href="producto.php">Pasta térmica</a></li>
                            <li><a href="producto.php">Procesadores CPU</a></li>
                            <li><a href="producto.php">Tarjetas de sonido</a></li>
                            <li><a href="producto.php">Tarjetas de video GPU</a></li>
                            <li><a href="producto.php">Tarjetas madre MainBoard</a></li>
                            <li><a href="producto.php">Ventiladores</a></li>
                        </ul>
                    </li>
                    <li>Computadores
                        <ul>
                            <li><a href="producto.php">PC de escritorio</a></li>
                            <li><a href="producto.php">Portátiles</a></li>
                            <li><a href="producto.php">Servidores</a></li>
                        </ul>
                    </li>
                    <li>Perifericos
                        <ul>
                            <li><a href="producto.php">Controles para juegos</a></li>
                            <li><a href="producto.php">Diademas</a></li>
                            <li><a href="producto.php">Impresoras</a></li>
                            <li><a href="producto.php">Monitores</a></li>
                            <li><a href="producto.php">Microfonos</a></li>
                            <li><a href="producto.php">Mouse y padmouse</a></li>
                            <li><a href="producto.php">Parlante</a></li>
                            <li><a href="producto.php">Teclados</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!--área de contenido-->
            <main>
               <h1>PRODUCTOS</h1>
            </main>
            <!--área de contenido complementario, alternativo y variable-->
            <aside>
                Contenido complementario, alternativo y variable
            </aside>
            <footer>
                <img class="logof" src="img/casa2.png" alt="Dirección"> &nbsp;Calle 79 15-30&nbsp;
                <img class="logof" src="img/correo2.png" alt="Correo electrónico">&nbsp;example@email.com&nbsp;
                <img class="logof" src="img/telefono2.png" alt="Teléfono"> &nbsp;7123456&nbsp;
                <a href="https://es-la.facebook.com/">
                    <img class="logof" src="img/facebook2.png" alt="Facebook">
                </a>
                <a href="https://www.youtube.com/">
                    <img class= "logof" src="img/youtube2.png" alt="Youtube">
                </a>
                <a href="https://web.whatsapp.com/">
                    <img class="logof" src="img/whatsapp2.png" alt="WhatsApp">
                </a>
            </footer>
        </div><!--cierre contenedor GRID-->
    </body>
</html>