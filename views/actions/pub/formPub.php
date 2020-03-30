<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Subir Publicación</h5>
        <form action="./controllers/subirPublicacionesController.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="position-relative row form-group">
                <label for="selectCategoria" class="col-sm-2 col-form-label">Categoria</label>
                <div class="col-sm-10">
                    <select name="selectCategoria" id="selectCategoria" class="form-control" required>
                        <option value="">Categoria</option>
                        <option value="boletin">Boletín</option>
                        <option value="entrevista">Entrevista</option>
                        <option value="evento">Evento</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor seleccione la categoria!
                    </div>
                    <div class="valid-feedback">
                        Categoria seleccionada correctamente!
                    </div>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
                <div class="col-sm-10">
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                    <div class="invalid-feedback">
                        Por favor ingrese un Titulo!
                    </div>
                    <div class="valid-feedback">
                        Titulo ingresado correctamente!
                    </div>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
                <div class="col-sm-10">
                    <input type="text" name="fecha" id="fecha" class="form-control" required>
                    <div class="invalid-feedback">
                        Por favor ingrese una Fecha!
                    </div>
                    <div class="valid-feedback">
                        Fecha ingresada correctamente!
                    </div>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                <div class="col-sm-10">
                    <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="primera_seccion" class="col-sm-2 col-form-label">Primera seccion</label>
                <div class="col-sm-10">
                    <textarea name="primera_seccion" id="primera_seccion" class="form-control"></textarea>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="segunda_seccion" class="col-sm-2 col-form-label">Segunda seccion</label>
                <div class="col-sm-10">
                    <textarea name="segunda_seccion" id="segunda_seccion" class="form-control"></textarea>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="archivoP" class="col-sm-2 col-form-label">Imagen principal</label>
                <div class="col-sm-10">
                    <input name="archivoP" id="archivoP" type="file" class="form-control" required>
                    <small class="form-text text-muted">Selecciona la imagen de encabezado para el boletín</small>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="archivoS1" class="col-sm-2 col-form-label">Imagen secundaria 1</label>
                <div class="col-sm-10">
                    <input name="archivoS1" id="archivoS1" type="file" class="form-control">
                    <small class="form-text text-muted">Selecciona la imagen a presentar en el cuerpo del boletín</small>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="archivoS2" class="col-sm-2 col-form-label">Imagen secundaria 2</label>
                <div class="col-sm-10">
                    <input name="archivoS2" id="archivoS2" type="file" class="form-control">
                    <small class="form-text text-muted">Selecciona la imagen a presentar en el cuerpo del boletín</small>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="archivoS3" class="col-sm-2 col-form-label">Imagen secundaria 3</label>
                <div class="col-sm-10">
                    <input name="archivoS3" id="archivoS3" type="file" class="form-control">
                    <small class="form-text text-muted">Selecciona la imagen a presentar en el cuerpo del boletín</small>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="archivoS4" class="col-sm-2 col-form-label">Imagen secundaria 4</label>
                <div class="col-sm-10">
                    <input name="archivoS4" id="archivoS4" type="file" class="form-control">
                    <small class="form-text text-muted">Selecciona la imagen a presentar en el cuerpo del boletín</small>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="subir">
                Subir
            </button>
        </form>
        <script>
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </div>
</div>