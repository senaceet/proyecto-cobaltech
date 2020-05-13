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
                </div>
            </header>
            <!--menú de navegación-->
            <nav class="menu">
                <ul>
                    <li>
                        <a href="cuentas.php">Cuentas</a>
                    </li>
                    <li>
                        <a href="inventario.php">Inventario</a>
                    </li>
                    <li>
                        <a href="contenido.php">Contenido</a>
                    </li>
                    <li>
                        <a href="pedido.php">Pedidos</a>
                    </li>
                    <li>
                        <a href="garantia.php">Garantías</a>
                    </li>
                </ul>
            </nav>
            <!--área de contenido-->
            <main>
               <h1>ADMINISTRADOR</h1>
            </main>
            <!--área de contenido complementario, alternativo y variable-->
            <aside>
                Contenido complementario, alternativo y variable
            </aside>
        </div><!--cierre contenedor GRID-->
    </body>
</html>