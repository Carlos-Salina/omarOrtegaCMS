<div class="main-card mb-3 card">
    <div class="card-body">
        <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Cambiar Contraseña</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="Cambiar Contraseña">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Contraseña Actual</label>
                    <input type="password" class="form-control" id="validationCustom05" placeholder="Contraseña Actual" required>
                    <div class="invalid-feedback">
                        Ingresa la contraseña para poder realizar los cambios
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Actualizar Contraseña</button>
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