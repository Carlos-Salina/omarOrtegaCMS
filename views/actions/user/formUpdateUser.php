<div class="main-card mb-3 card">
    <div class="card-body">
        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Nombres</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Apellidos</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Nombre de usuario</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Nombre de usuario" aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom03">Ciudad</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Ciudad" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Estado</label>
                    <input type="text" class="form-control" id="validationCustom04" placeholder="Estado" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Imagen</label>
                    <input type="file" class="form-control" id="validationCustom04" placeholder="State">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Actualizar Datos</button>
        </form>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
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