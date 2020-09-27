<?php

class ProductosController extends Producto{
    /*
       Reporte de todos los datos de la entidad
    */
    public function index(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/producto/index.php');

        require_once('views/layout_admin/footer.php');
    }

    
    public function create(){
        require_once('views/layout_admin/header.php');
        require_once('views/layout_admin/navbar.php');
        require_once('views/layout_admin/sidebar.php');
         
        require_once('views/producto/create.php');

        require_once('views/layout_admin/footer.php');
    }

    public function store(){
                         // Guardar Imagen-
                           $folder="files/img";
                           $tmp_name=$_FILES['Imagen']['tmp_name'];
                           $name=basename($_FILES['Imagen']['name']);
                           move_uploaded_file($tmp_name,$folder.'/'.$name);

        parent::store_producto($_POST['Nombre_producto'],
                           $_POST['Descripcion'],
                           $_POST['Existencia'],
                           $name,
                           $_POST['Precio'],
                           $_POST['CategoriaId_categoria'],
                           $_POST['MarcaId_marca'],
                           $_POST['ProveedorId_proveedor']);

                        

        header("location:?controller=Productos&method=index");  
}

public function edit(){
    require_once('views/layout_admin/header.php');
    require_once('views/layout_admin/navbar.php');
    require_once('views/layout_admin/sidebar.php');
     
    require_once('views/producto/edit.php');

    require_once('views/layout_admin/footer.php');
}

public function update(){
         
    parent::update_producto($_POST['id'],
                            $_POST['Nombre_producto'],
                            $_POST['Descripcion'],
                            $_POST['Existencia'],
                            $_POST['Imagen'],
                            $_POST['Precio'],
                            $_POST['CategoriaId_categoria'],
                            $_POST['MarcaId_marca'],
                            $_POST['ProveedorId_proveedor']);

    header("location:?controller=Productos&method=index&process=El producto se actualizo correctamente!!!");
  }

  public function delete(){
    parent::delete_producto($_GET['Id_producto']);
    header("location:?controller=Productos&method=index");
  }

  public function show(){
    require_once('views/layout_admin/header.php');
    require_once('views/layout_admin/navbar.php');
    require_once('views/layout_admin/sidebar.php');

    require_once('views/producto/show.php');

    require_once('views/layout_admin/footer.php');
 }

 public function buscar_productos_ajax(){
    $productos=parent::buscar_productos('%'.$_GET['query'].'%');
?>
    <div class="container-fluid">
       <?php  foreach($productos as $producto){ ?>
      <div class="row">
         <div class="col-md-3">
            <img src="files/img/<?php echo $producto->Imagen ?>" alt="" class="img-fluid">
         </div>
         <div class="col-md-9">
            <h2 style="font-size: 16px;"><?php echo $producto->Nombre_producto?></h2>
            <p><?php echo $producto->Descripcion?></p>
         </div>
      </div>
      <hr>
      <?php } ?>
    </div>

<?php

 }
 //https://www.anerbarrena.com/mysql-like-5657/

}
?>