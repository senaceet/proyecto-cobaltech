<!-- HTML Tercera parte -->

<div class="main-sidebar">
   <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
         <a href="?=controller=Cobaltech&method=admin">Cobaltech</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
         <!--<a href="index.html"><img class="logo" src="assets/img/icons/logo.png" alt="Logo Cobaltech"></a>-->
      </div>
      <ul class="sidebar-menu">
         <li class="menu-header">Menú administrador</li>

         <!-- Inicio dropdown CATEGORÍAS-->
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown">
            <i class="far fa-square"></i><span>Categorias</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Categorias&method=index">Listar</a></li>
               <li><a class="nav-link" href="?controller=Categorias&method=create">Agregar categoría</a></li>
               <!-- <li><a class="nav-link" href="?controller=Categorias&method=update">Editar categoría</a></li>-->
            </ul>
         </li>
         <!-- Fin dropdown-->

         <!-- Inicio dropdown CIUDADES
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown">
            <i class="far fa-square"></i><span>Ciudades</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Ciudades&method=index">Listar</a></li>
               <li><a class="nav-link" href="?controller=Ciudades&method=create">Crear</a></li>
            </ul>
         </li>
         -- Fin dropdown-->

         <!-- Inicio dropdown ENVÍOS-->
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown">
            <i class="far fa-square"></i><span>Envios</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Envios&method=index">Listar</a></li>
               <li><a class="nav-link" href="?controller=EstadoEnvios&method=index">Estado de envíos</a></li>
            </ul>
         </li>
         <!-- Fin dropdown-->

         <!-- Inicio dropdown FACTURAS-->
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown">
            <i class="far fa-square"></i><span>Facturas</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Facturas&method=index">Listar</a></li>
            </ul>
         </li>
         <!-- Fin dropdown-->
      
         <!-- Inicio dropdown GARANTÍAS-->
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown">
            <i class="far fa-square"></i><span>Garantias</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Garantias&method=index">Listar</a></li>
               <li><a class="nav-link" href="?controller=EstadoGarantias&method=index">Estado de garantías</a></li>
            </ul>
         </li>
         <!-- Fin dropdown-->
      
         <!-- Inicio dropdown MARCAS-->
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-square">
            </i><span>Marcas</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Marcas&method=index">Listar</a></li>
               <li><a class="nav-link" href="?controller=Marcas&method=create">Agregar marca</a></li>
            </ul>
         </li>
         <!-- Fin dropdown-->
      
         <!-- Inicio dropdown PAGOS-->
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown">
            <i class="far fa-square"></i><span>Pagos</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Pagos&method=index">Listar</a></li>
               <li><a class="nav-link" href="?controller=Efectivos&method=index">Efectivo</a></li>
               <li><a class="nav-link" href="?controller=TarjetasCredito&method=index">Tarjeta Credito</a></li>
               <li><a class="nav-link" href="?controller=TarjetasDebito&method=index">Tarjeta Debito</a></li>
            </ul>
         </li>
         <!-- Fin dropdown-->
      
         <!-- Inicio dropdown PRODUCTOS-->
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown">
            <i class="far fa-square"></i><span>Productos</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Productos&method=index">Listar</a></li>
               <li><a class="nav-link" href="?controller=Productos&method=create">Agregar producto</a></li>
            </ul>
         </li>
         <!-- Fin dropdown-->
      
         <!-- Inicio dropdown PROVEEDORES-->
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-square">
            </i><span>Proveedores</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Proveedores&method=index">Listar</a></li>
               <li><a class="nav-link" href="?controller=Proveedores&method=create">Agregar proveedor</a></li>
            </ul>
         </li>
         <!-- Fin dropdown-->
      
         <!-- Inicio dropdown
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-square"></i><span>Roles</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Roles&method=index">Listar</a></li>
               <li><a class="nav-link" href="#!">Crear</a></li>
            </ul>
         </li>
         Fin dropdown-->
      
         <!-- Inicio dropdown
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-square"></i><span>Tipo Documento</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Tiposdocs&method=index">Listar</a></li>
               <li><a class="nav-link" href="#!">Crear</a></li>
            </ul>
         </li>
         Fin dropdown-->
      
         <!-- Inicio dropdown-->
         <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown">
            <i class="far fa-square"></i><span>Usuarios</span></a>
            <ul class="dropdown-menu">
               <li><a class="nav-link" href="?controller=Usuarios&method=index">Listar</a></li>
               <li><a class="nav-link" href="?controller=Usuarios&method=create">Agregar usuario</a></li>
               <li><a class="nav-link" href="?controller=Ciudades&method=index">Ciudades</a></li>
               <li><a class="nav-link" href="?controller=Roles&method=index">Roles</a></li>
               <li><a class="nav-link" href="?controller=TiposDocs&method=index">Tipos de Documentos</a></li>
            </ul>
         </li>
         <!-- Fin dropdown-->

<!--  Agrega un segundo menú y un boton al final del sidebar

         <li class="menu-header">Menu header</li>
         <li class="active"><a class="nav-link" href="#!"><i class="far fa-square"></i> <span>Item #2</span></a></li>              
      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
         <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
         <i class="fas fa-rocket"></i> Documentacion
         </a>
      </div>
-->
         <li><br></li><!--este li se elimina si se hace uso del segundo menú-->
      </ul><!--este ul se elimina si se hace uso del segundo menú-->
   </aside>
</div>