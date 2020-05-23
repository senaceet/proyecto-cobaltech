<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Agregar Producto</h1>
        </div>
        <div class="section-body">
        <div class="row">
            <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                   <form action="?controller=Productos&method=store" method="POST">
                   <div class="form-group">
                        <div class="form-group">
                            <label for="">NOMBRE PRODUCTO</label>
                            <input type="text" name="Nombre_producto" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">DESCRIPCIÓN</label>
                            <textarea name="Descripcion" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">EXISTENCIAS   </label>
                            <input type="text" name="Existencia" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">IMAGEN</label>
                            <input type="text" name="Imagen" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">PRECIO</label>
                            <input type="text" name="Precio" class="form-control">
                        </div>
                        <div 
                            class="form-group">
                            <label for="">CATEGORÍA</label>
                            <select name="CategoriaId_categoria" id="" class="form-control">
                            <option value="">Seleccionar...</option>
                            <?php foreach (Categoria::get_all() as $result) { ?>
                                <option value="<?php echo $result->Id_categoria?>">
                                <?php echo $result->Nombre_categoria?>
                                </option>
                            <?php  }  ?>
                            </select> <br>
                            <div class="form-group">
                            <label for="">MARCA</label>
                            <select name="MarcaId_marca" id="" class="form-control">
                            <option value="">Seleccionar...</option>
                            <?php
                            foreach (Marca::get_all()as $result) { ?>
                                <option value="<?php echo $result->Id_marca?>"> 
                                <?php echo $result->Nombre_marca?>
                                </option>
                                <?php  }  ?>              
                            </select> <br>
                            <div class="form-group">
                            <label for="">PROVEEDOR</label>
                            <select name="ProveedorId_proveedor" id="" class="form-control">
                            <option value="">Seleccionar...</option>
                            <?php
                            foreach (Proveedor::get_all()as $result) { ?>
                                <option value="<?php echo $result->Id_proveedor?>"> 
                                <?php echo $result->Razon_social?>
                                </option>
                                <?php  }  ?>              
                            </select>
                            </div>
                            <hr>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <a class="btn btn-primary" href="?controller=Productos&method=index">Cancelar</a>
                   </form>
               </div>
            </div>
            </div>
        </div>
            
        </div>
    </section>
</div>
<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
    </div>
    <div class="footer-right">
        2.3.0
    </div>
</footer>

    </div>
</div>