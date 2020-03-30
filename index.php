<?php
include "./views/layouts/header.php";
?>

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Análisis de tablero
                        <div class="page-title-subheading">Conoce un resumen detallado sobre el uso en
                            <a href="https://www.omarortega.com.mx" target="_blank">www.omarortega.com.mx
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- --------- CONTADORES DE PUBLICACIONES ---------- -->
        <?php include "./views/actions/inicio/countPub.php" ?>
        <!-- -----------FIN DE CONTADORES DE PUBLICACIONES --------- -->
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>Ultimas publicaciones
                    </div>
                </div>
            </div>
        </div>
        
        <?php include "./views/actions/inicio/ultimasPub.php"; ?>

    </div>
    <?php
    include "./views/layouts/footer.php";
    ?>