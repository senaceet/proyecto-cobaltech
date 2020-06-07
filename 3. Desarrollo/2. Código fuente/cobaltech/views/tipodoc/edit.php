<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Actualizar Tipo Documento</h1>
        </div>
        <?php $tipodoc=parent::get_id($_GET['Id_tipodoc']); ?>
        <div class="section-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="?controller=TiposDocs&method=update" method="POST">
                            <input name="id" type="hidden" value="<?php echo $tipodoc->Id_tipodoc ?>">
                                <div class="form-group">
                                    <label for="">Abreviatura Tipo Documento</label>
                                    <input type="text" name="Abreviatura" class="form-control" value="<?php echo $tipodoc->Abreviatura ?>">
                                    <label for="">Nombre Tipo Documento</label>
                                    <input type="text" name="Tipodoc" class="form-control" value="<?php echo $tipodoc->Tipodoc ?>">
                                </div>
                                <hr>
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a class="btn btn-primary" href="?controller=TiposDocs&method=index">Cancelar</a>
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
