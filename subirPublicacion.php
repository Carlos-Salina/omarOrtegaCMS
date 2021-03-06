<?php
include "./views/layouts/header.php";
?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph text-success">
                        </i>
                    </div>
                    <div>Realizar publicaciones en Prensa
                        <div class="page-title-subheading">Publica boletines, entrevistas y boletines en tiempo real.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------- TABS DE NAVEGACION ------ -->
        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Publicar</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                    <span>Lista - publicaciones</span>
                </a>
            </li>
        </ul>
        <!-- ------- FIN TABS DE NAVEGACION -------- -->

        <script src="./assets/plugins/ckeditor/ckeditor.js"></script>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <?php
                include "./views/actions/pub/formPub.php";
                ?>
            </div>
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                <?php
                include "./views/actions/pub/tablesPub.php";
                ?>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('descripcion', {
            height: 100
        });
        CKEDITOR.replace('primera_seccion');
        CKEDITOR.replace('segunda_seccion');
    </script>
    <?php
    include "./views/layouts/footer.php";
    ?>


    <div class="modal fade delete-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">¿Esta seguro?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Titulo</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>