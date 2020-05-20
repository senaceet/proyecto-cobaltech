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
                            <label for="">ID PRODUCTO</label>
                            <input type="text" name="Nombre_categoria" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">NOMBRE PRODUCTO</label>
                            <input type="text" name="Nombre_categoria" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">DESCRIPCIÓN</label>
                            <input type="text" name="Nombre_categoria" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">EXISTENCIAS   </label>
                            <input type="text" name="Nombre_categoria" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">IMAGEN</label>
                            <input type="text" name="Nombre_categoria" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">PRECIO</label>
                            <input type="text" name="Nombre_categoria" class="form-control">
                        </div>
                        <div 
                            class="form-group">
                            <label for="">CATEGORÍA</label>
                            <select name="CategoriaId_categoria" id="" class="form-control">
                            <option value="">SELECCIONAR...</option>
                            <?php foreach (Categoria::get_all() as $result){ ?>
                                <option value="<?php echo $result->Id_categoria?>"><?php echo $result->Nombre_categoria?></option>

                            <?php  }  ?>
                            </select>
                        <div class="form-group">
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