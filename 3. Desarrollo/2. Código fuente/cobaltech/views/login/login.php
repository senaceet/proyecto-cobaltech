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
            <!--área de contenido-->
            <main>
                <div>
                    <h1>LOGIN</h1>
                    <form>
                        <input type="text" placeholder="email"><br>
                        <input type="text" placeholder="password">
                    </form>
                    <a href="#">
                        Recordar mi contraseña
                    </a><br>
                    <button>
                        <span>Registrarse</span>
                    </button>
                    <button>
                        <span>Ingresar</span>
                    </button>
                </div><br>
                <a href="admin.php">
                    admin
                </a><br>
                <a href="perfil.php">
                    perfil
                </a>
            </main>
        </div><!--cierre contenedor GRID-->
    </body>
</html>