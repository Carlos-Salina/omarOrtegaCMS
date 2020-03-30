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
                    <div>Publicar en Galeria
                        <div class="page-title-subheading">Publica Imagenes en tiempo real en la galeria ya expuesta.
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
        <script src="./assets/plugins/dropzone/dist/dropzone.js"></script>
        <link href="./assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet">

        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <?php
                include "./views/actions/imagenes/formImg.php";
                ?>
            </div>
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                <?php
                include "./views/actions/imagenes/tableImg.php";
                ?>
            </div>
        </div>

    </div>
    <?php
    include "./views/layouts/footer.php";
    ?>