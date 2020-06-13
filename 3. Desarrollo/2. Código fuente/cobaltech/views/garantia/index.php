<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Garantías</h1>
      </div>
      <div class="section-body">
         <div class="card">
         <?php  if(isset($_GET['process'])){ ?>
                <button class="alert alert-success"> 
                   <?php echo $_GET['process'] ?>
                </button>
                <?php } ?>
            <div class="card-body">
               <a href="?controller=EstadoGarantias&method=index" class="btn btn-info">Modificar estados de garantía</a><br><br>
               <div class="table-responsive">
                  <table class="table table-sm table-hover table-striped table-bordered">
                     <tr class="bg-success text-white ">
                        <th>ID</th>
                        <th>FECHA INGRESO</th>
                        <th>DESCRIPCIÓN</th>
                        <th>FACTURA</th>
                        <th>ESTADO DE GARANTÍA</th>
                        <th>OPCIONES</th>
                     </tr>
                     <?php
                        foreach(parent::get_all() as $result){
                     ?>
                     <tr>
                     <form action="?controller=Garantias&method=update_st_garantia" method="post">
                        <td><?php echo $result->Id_garantia ?></td>
                        <td><?php echo $result->Fecha_ingreso ?></td>
                        <td><?php echo $result->Descripcion ?></td>
                        <td><?php echo $result->Id_factura ?></td>
                        <td>
                        <input type="hidden" value="<?php echo $result->Id_garantia ?>" name="Id_garantia">
                          <select name="Id_estado_garantia" id="Id_estado_garantia" class="form-control">
                              <?php foreach(EstadoGarantia::get_all() as $r){ ?>
                                 <option <?php echo $r->Id_estado_garantia==$result->Estado_garantiaId_estado_garantia ? 'selected' : '' ?> value="<?php echo $r->Id_estado_garantia ?>"><?php echo $r->Estado_garantia ?></option>
                              <?php } ?>
                          </select>
                          <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
                        </td>
                        <td class="text-white">
                           <a class="btn btn-info btn-sm">Detalles</a>
                        </td>
                        </form>
                     </tr>
                     <?php } ?>
                  </table>
                  <tr>
                     <td colspan="4"><?php echo count(parent::get_all())?> Garantías registradas </td>
                  </tr>
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