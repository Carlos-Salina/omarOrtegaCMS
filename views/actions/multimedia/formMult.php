<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Subir Publicación</h5>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="position-relative row form-group"><label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
                <div class="col-sm-10">
                    <textarea name="tituload" id="tituload" class="form-control"></textarea>
                </div>
            </div>
            <div class="position-relative row form-group"><label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
                <div class="col-sm-10">
                    <textarea name="fechaad" id="fechaad" class="form-control"></textarea>
                </div>
            </div>
            <div class="position-relative row form-group"><label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                <div class="col-sm-10">
                    <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                </div>
            </div>
            <div class="position-relative row form-group"><label for="primera_seccion" class="col-sm-2 col-form-label">Primera seccion</label>
                <div class="col-sm-10">
                    <textarea name="primera_seccion" id="primera_seccion" class="form-control"></textarea>
                </div>
            </div>
            <div class="position-relative row form-group"><label for="archivo" class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                    <input name="archivo" id="archivo" type="text" class="form-control-file" placeholder="Ingresa la URL">
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2">
                    <button class="btn btn-primary">Subir</button>
                </div>
            </div>
        </form>
    </div>
</div>